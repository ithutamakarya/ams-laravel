<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AMS - Hutama Karya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="shortcut icon" href="images/hk.ico" type="image/x-icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.onload = function() {
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
  </head>
  <body>
    <div class="login-wrapper">
      <div class="bg-pic">
        <div id="slide" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
              @for ($i = 1; $i < 11; $i++)
              <div class="item <?= $i+1 == 2 ? "active" : "" ?>">
                <img src="image-login/<?= $i ?>.jpg" style="height: 900px" class="img-responsive">
              </div>
              @endfor
            </div>
        </div> 
      </div>
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-10 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <strong>&nbsp;<font style="color:#25308B; font-size:24pt">A</font><font style="color:#25308B; font-size:15pt">UDIT</font>&nbsp;&nbsp;&nbsp;<font style="color:#25308B; font-size:24pt">M</font></font><font style="color:#25308B; font-size:15pt">ANAGEMENT</font>&nbsp;&nbsp;&nbsp;<font style="color:#25308B; font-size:24pt">S</font><font style="color:#25308B; font-size:15pt">YSTEM</font></strong><br>
          <img src="images/logo.png" alt="logo" data-src="images/logo.png" data-src-retina="images/logo.png" width="350">
          <form method="POST" action="{{ route('login') }}" class="p-t-15" id="form-login" autocomplete="off">
            @csrf
            <div class="form-group form-group-default">
              <label>Username</label>
              <div class="controls">
                <input type="text" name="email" class="form-control" required>
              </div>
            </div>
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" class="form-control" name="password" required>
              </div>
            </div>
			     <button type="submit" class="btn btn-primary btn-cons m-t-10">Login</button>
          </form>
          <br>
          <a href="https://servicedesk.hutamakarya.com/view_email_hk" style="border-radius: 15px;">Lupa Password ?</a>
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-12 no-padding m-t-10">
                <p>
                  <small>Copyright © 2021 PT Hutama Karya (PERSERO)</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="pages/js/pages.min.js"></script>
  </body>
</html>

    {{-- <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-3">
            {{ __('Log in') }}
        </x-primary-button>
    </div> --}}
