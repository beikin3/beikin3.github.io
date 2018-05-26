<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>


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
<script src="{{ asset('js/main.js') }}" defer></script>
<!-- <script src="{{ asset('js/jquery.validate.min.js') }}"></script> -->