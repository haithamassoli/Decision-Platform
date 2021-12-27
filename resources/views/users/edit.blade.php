@extends('layouts.arabic.master')
@section('title','إدارة الأصناف')
@section('user-active','class=active')
@section('content')
{{-- <div class="col-lg-6 col-md-6 col-sm-12 width">
    <div class="address">
        <h3>Update</h3>
        <form method="post" action='{{route('update_user',$user)}}'>
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <input class="contactus" value="{{$user->name}}" placeholder="Title" type="text" name="title">
                </div>
                <div class="col-sm-12">
                    <input class="contactus" value="{{$user->email}}" placeholder="Genra" type="text" name="description">
                </div>

                <div class="col-sm-12">
                    <input type="submit" class="send" name="submit"/>
                </div>
            </div>
        </form>
    </div>
</div> --}}
<div class="content text-right">
<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{route('update_user',$user->id)}}" autocomplete="off">
            <div class="card-body">
                    @csrf
                    @method('patch')
                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('الاسم') }}</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{$user->name }}">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label>{{ __('البريد الالكتروني') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{$user->email }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('كلمة السر') }}</label>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" value="" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('كلمة السر ') }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" value="" name="password_confirmation" class="form-control" placeholder="{{ __('تأكيد كلمة السر ') }}">
                    </div>
            </div>
            <button type="submit" class="btn btn-fill btn-primary">تعديل</button>
        </form>
    </div>
</div>
</div>
@endsection
