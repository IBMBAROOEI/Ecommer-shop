<!DOCTYPE html>
<link href="{{ asset('backend/app.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet" >
<link href="{{ asset('backend/css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/solid.min.css') }}" rel="stylesheet">

<link href="{{ asset('backend/fonts/FontAwesome.otf') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/fontawesome-webfont.svg') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/fontawesome-webfont.eot') }}" rel="stylesheet" >
<link href="{{ asset('backend/fonts/fontawesome-webfont.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/fontawesome-webfont.woff') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/fontawesome-webfont.woff2') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-Bold-FD-WOL.eot') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-Bold-FD-WOL.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-Bold-FD-WOL.woff') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-FD-WOL.eot') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-FD-WOL.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/fonts/Vazir-FD-WOL.woff') }}" rel="stylesheet">


<link href="{{ asset('backend/webfonts/fa-brands-400.eot') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-brands-400.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-brands-400.woff') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-brands-400.woff2') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-regular-400.eot') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-regular-400.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-regular-400.woff') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-regular-400.woff2') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-solid-900.eot') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-solid-900.ttf') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-solid-900.woff') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-solid-900.woff2') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-brands-400.svg') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-regular-400.svg') }}" rel="stylesheet">
<link href="{{ asset('backend/webfonts/fa-solid-900.svg') }}" rel="stylesheet">
<html lang="fa-IR" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/v4-shims.min.css">
    <title>???????? | ??????</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>??????</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>????????</h3>
          <div class="form-group">
            <label class="control-label">?????? ????????????</label>
            <input class="form-control" type="text" placeholder="?????? ????????????" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">???????? ????????</label>
            <input class="form-control" type="password" placeholder="???????? ????????">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">?????? ???? ?????????? ????????????</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">???????? ???????????? ???????????? ??????????</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>????????</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>???????? ???????????? ???????????? ??????????</h3>
          <div class="form-group">
            <label class="control-label">?????????? ????????????</label>
            <input class="form-control" type="text" placeholder="?????????? ????????????">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>????????</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> ?????????? ???? ???????? ????????</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>