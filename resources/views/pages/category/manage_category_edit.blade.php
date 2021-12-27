@extends('layouts.arabic.master')
@section('title','إدارة الأصناف - تعديل')
@section('cat-active','class=active')
@section('content')
<div class="content text-right">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title text-right">تعديل صنف</h5>
                </div>
                <form method="post" action="{{ route('admin.manage_categories.update',$category->category_id)}}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @method('PUT')
                            @include('alerts.success')
                            <div class="form-group">
                                <label>الصنف</label>
                                <input type="text" name="category_name" class="form-control" placeholder="الصنف" value="{{$category->category_name}}">
                            </div>
                                <label>الصورة</label>
                                <input type="file" name="category_image" class="form-control">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">تعديل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
