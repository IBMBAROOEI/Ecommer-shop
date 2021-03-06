

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{--<html lang="fa-IR" dir="rtl">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<title>????????</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<link href="{{ asset('../backend/app.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet" >--}}
{{--<link href="{{ asset('backend/css/fontawesome.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('backend/css/solid.min.css') }}" rel="stylesheet">--}}


{{--<section class="material-half-bg">--}}
{{--<div class="cover"></div>--}}
{{--</section>--}}
{{--<section class="login-content">--}}
{{--<div class="logo">--}}
{{--<h1>???????? ????????</h1>--}}
{{--</div>--}}
{{--<div class="login-box">--}}
{{--<form class="login-form" method="POST" action="{{ route('login') }}">--}}
{{--@csrf--}}
{{--<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>????????</h3>--}}
{{--<div class="form-group">--}}
{{--<label class="control-label">?????? ????????????</label>--}}
{{--<input class="form-control" type="text" placeholder="?????? ????????????" autofocus>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label class="control-label">???????? ????????</label>--}}
{{--<input class="form-control" type="password" placeholder="???????? ????????">--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<div class="utility">--}}
{{--<div class="animated-checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox"><span class="label-text">?????? ???? ?????????? ????????????</span>--}}
{{--</label>--}}
{{--</div>--}}
{{--<p class="semibold-text mb-2"><a href="#" data-toggle="flip">???????? ???????????? ???????????? ??????????</a></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group btn-container">--}}
{{--<button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>????????</button>--}}
{{--</div>--}}
{{--</form>--}}
{{--<form class="forget-form" action="index.html">--}}
{{--<h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>???????? ???????????? ???????????? ??????????</h3>--}}
{{--<div class="form-group">--}}
{{--<label class="control-label">?????????? ????????????</label>--}}
{{--<input class="form-control" type="text" placeholder="?????????? ????????????">--}}
{{--</div>--}}
{{--<div class="form-group btn-container">--}}
{{--<button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>????????</button>--}}
{{--</div>--}}
{{--<div class="form-group mt-3">--}}
{{--<p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> ?????????? ???? ???????? ????????</a></p>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</section>--}}
{{--<!-- Essential javascripts for application to work-->--}}
{{--<script src="js/jquery-3.2.1.min.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<!-- The javascript plugin to display page loading on top-->--}}
{{--<script src="js/plugins/pace.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--// Login Page Flipbox control--}}
{{--$('.login-content [data-toggle="flip"]').click(function() {--}}
{{--$('.login-box').toggleClass('flipped');--}}
{{--return false;--}}
{{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}