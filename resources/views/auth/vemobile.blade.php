
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<form class="forget-form" action="index.html">
    <h3 class="login-head">
    </h3>
    <div class="form-group">
        <label class="control-label">شماره موبایل</label>
        <input class="form-control" type="text" placeholder="شماره موبایل">
    </div>
    <div class="form-group btn-container">
        <a href=""  class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw" ></i>ورود</a>
    </div>
</form>
@include('backend.resource_js')
</body>
</html>