@extends('layouts.arabic.master')
@section('title','إدارة المشرفين - إضافة')
@section('admin-active','class=active')
@section('content')
<body>
    <div class="content">
        @include('alerts.success')
        <div class="row">
            <div class="col-md-12 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title" style="display:block; text-align: right;">تعديل المشرف</h5>
                    </div>
                    <form method="post" action="{{ route('admin.manage_admins.store') }}">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label style="display:block; text-align: right;">الإسم</label>
                                <input type="text" name="admin_name"
                                    class="form-control {{ $errors->has('admin_name') ? ' is-invalid' : '' }}"
                                    placeholder="الإسم">
                                @include('alerts.feedback', ['field' => 'admin_name'])
                            </div>

                            <div class="form-group">
                                <label style="display:block; text-align: right;">البريد الإلتروني</label>
                                <input type="email" name="admin_email"
                                    class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}"
                                    placeholder="البريد الإلتروني">
                                @include('alerts.feedback', ['field' => 'admin_email'])
                            </div>
                            <div class="form-group">
                                <label style="display:block; text-align: right;">كلمة السر</label>
                                <input type="password" name="admin_password"
                                    class="form-control{{ $errors->has('admin_password') ? ' is-invalid' : '' }}"
                                    placeholder="كلمة السر" value="">
                                @include('alerts.feedback', ['field' => 'admin_password'])
                            </div>
                            <div class="form-group">
                                <label style="display:block; text-align: right;">المشرف</label>
                                <select style="padding: 10px; background-color:rgb(39,41,61); color:#fff; width:100%;"
                                    name="admin_role" id="">
                                    <option value="0">مشرف</option>
                                    <option value="1">مشرف خارق</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'admin_role'])
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">إضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
