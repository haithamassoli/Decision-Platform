@extends('layouts.app', ['class' => 'login-page', 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('password.update') }}">
            @csrf

            <div class="card card-login card-white">
                <h1 style="color:#cf51de;font-weight: bolder" class="text-center mt-3">إعادة تهيئة كلمة المرور</h1>
                <div class="card-body">
                    @include('alerts.success')

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">

                            </div>
                        </div>
                        <input type="email" name="email" class="text-right form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="البريد الالكتروني">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="password" name="password" class="text-right form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="كلمة المرور">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="text-right form-control" placeholder="تأكيد كلمة المرور">
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">إعادة تهيئة كلمة المرور</button>
                </div>
            </div>
        </form>
    </div>
@endsection
