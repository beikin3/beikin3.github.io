@extends('layouts.app')
@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="page login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <img src="{{ asset('img/beikin.png') }}" alt="" class="img-fluid mx-auto" width="200">
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                                <form method="POST" action="{{ route('login') }}" class="form-validate">
                                @csrf
                                <div class="form-group">
                                    <!-- <input id="login-username" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material"> -->

                                    <input id="email" type="email" class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <label for="login-username" class="label-material">Email</label>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="input-material {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                                    <label for="login-password" class="label-material">Senha</label>
                                </div>
                                <button type="submit" id="login" class="btn btn-primary">{{ __('Login') }}</button>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form>
                            <a href="#" class="forgot-pass">Esqueceu a senha? Azar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

@section('scripts')
<!-- <script src="{{ asset('js/jquery.validate.min.js') }}"></script> -->
@endsection