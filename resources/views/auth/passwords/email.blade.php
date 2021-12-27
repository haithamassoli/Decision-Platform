@extends('layouts.app', ['class' => 'login-page', 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('password.email') }}">
            @csrf

            <div class="card card-login card-white">
                    <h1 style="color:#cf51de;font-weight: bolder" class="text-center mt-3">إعادة تهيئة كلمة المرور</h1>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{-- <i style="float:right" class="ml-auto mr-0 tim-icons icon-email-85"></i> --}}
                            </div>
                        </div>
                        <input type="email" name="email" class="text-right form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="البريد الالكتروني">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">إرسال رابط إعادة تهيئة كلمة المرور</button>
                </div>
            </div>
        </form>
    </div>
@endsection
