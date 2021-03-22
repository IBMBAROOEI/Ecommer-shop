
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ثبت نام</title>
</head>
<body>
<link href="{{ asset('backend/app.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet" >
<link href="{{ asset('backend/css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/solid.min.css') }}" rel="stylesheet">


<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>ثبت نام</h1>
    </div>
    <div class="login-box">

            <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ثبت نام</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="inputEmail4" class=" label-text">ایمیل</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                <div class="form-group col-md-6">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="name" class=" label-text" >نام</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password" class=" label-text">password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password" class=" label-text">password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4"  class=" label-text">موبایل</label>
                    <input type="number"  class="form-control" >
                </div>
            </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>ورود</button>
                </div>
        </form>
    </div>
</section>
@include('backend.resource_js')

</body>
</html>
