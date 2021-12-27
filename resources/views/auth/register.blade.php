@extends('layouts.app', ['class' => 'register-page', 'contentClass' => 'register-page'])

@section('content')
<div class="row mr-auto">
        <div class="col-md-6 offset-3">
            <div class="card card-register card-white mr-auto">
                <h1 style="color:#cf51de;font-weight: bolder" class="text-center mt-3">إنشاء حساب</h1>
                <form class="form" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                </div>
                            </div>
                            <input type="text" name="name" class="text-right form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('الإسم') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="email" name="email" class="text-right form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('الإيميل') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group text-right">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="file" name="image" class="text-right form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"  >
                        </div>
                        @include('alerts.feedback', ['field' => 'image'])
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="password" name="password" class="text-right form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('كلمة المرور') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">

                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="text-right form-control" placeholder="{{ __('تأكيد كلمة المرور') }}">
                        </div>
                        <div class="text-right form-check text-left">
                            <label class="form-check-label">
                                <input class="text-right form-check-input" type="checkbox" required>
                                <span class="form-check-sign"></span>
                                {{ __('أوافق على') }}
                                <a href="#">{{ __('الشروط والأحكام') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('إنشاء حساب') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
