@extends('layouts.arabic.master')
@section('title','إدارة الأصناف')
@section('user-active','class=active')
@section('content')
<div class="content text-right" style="color:white">
<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{Route('create_user')}}" autocomplete="off" enctype="multipart/form-data">
            <div class="card-body">
                    @csrf
                    @include('alerts.success')
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('الاسم') }}</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="الاسم">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label>{{ __('البريد الالكتروني') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="البريد الالكتروني">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                        <label>{{ __('الدور') }}</label>

                        @include('alerts.feedback', ['field' => 'role'])
                        <select class="form-control" name="role" id="">
                                <option class="form-control" value="admin">admin</option>
                                <option class="form-control" value="user">user</option>
                        </select>
                    </div>
                    <div>
                        <label>الصورة
                          <img src="black/img/addo.png" width="60px" height="60px" alt="" style="cursor: pointer;">
                        <input type="file" style="display:none" name="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" >
                        </label>
                         @include('alerts.feedback', ['field' => 'image'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('كلمة السر') }}</label>

                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('كلمة السر ') }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('تأكيد كلمة السر ') }}">
                    </div>
                    <button type="submit" class="btn btn-fill btn-primary">إضافة</button>
            </div>

        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th class="text-center">
                        الاسم
                      </th>
                      <th class="text-center">
                        البريد الالكتروني
                      </th>
                      <th class="text-center">
                        الدور
                      </th>
                      <th class="text-center">
                        تاريخ الانشاء
                      </th>
                      <th class="text-center">
                        الصورة
                     </th>
                      <th class="text-center">
                        التعديلات
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)


                    <tr>
                      <td class="text-center">
                        {{$user->name}}
                      </td>
                      <td class="text-center">
                        {{$user->email}}
                      </td>
                      <td class="text-center">
                        {{$user->role}}
                      </td>
                      <td class="text-center">
                        {{$user->created_at}}
                      </td>
                      <td class="text-center">
                        <img src='{{asset("black/img/$user->image")}}' alt="" width="90px" height="90px">
                      </td>
                      <td class="text-center">
                        <a href="{{route('edit', $user)}}"><button type="button" class="btn btn-primary btn-sm">تعديل</button></a>
                        <form style="display: inline-block" action="{{route('destroy',$user)}}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger btn-sm">حذف</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
