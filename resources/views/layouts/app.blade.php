<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AMS - Hutama Karya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="images/hk.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="chosen/chosen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript" src="chosen/chosen.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script type="text/javascript">
        window.onload = function(){
        // fix for windows 8
        if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
            document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
        function no_framing() {
            if(self != top) {
                window.open(self.document.location, "_top", "");
            }
        }
        function logout()
        {
            var x = window.confirm("Anda Yakin Akan Keluar System");
            if(x)
            {
                location.href="_includes/logout.php";
            }		
        }
        function sh(id, jml){
            if(jml == '0'){
                document.getElementById(id).style.display = 'none';
            }else{	
                document.getElementById(id).style.display = 'block';
            }
        } 
    </script>
</head>

<body class="fixed-header menu-pin menu-behind">
    @include('layouts.navigation')

    <div class="page-container">
        <div class="header ">
            <div class="container-fluid relative">
                <div class="pull-left full-height visible-sm visible-xs">
                    <div class="header-inner">
                        <a href="#"
                            class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5"
                            data-toggle="sidebar">
                            <span class="icon-set menu-hambuger"></span>
                        </a>
                    </div>
                </div>
                <div class="pull-center hidden-md hidden-lg">
                    <div class="header-inner">
                        <div class="brand inline">
                            <img src="images/logo.png" alt="logo" data-src="images/logo.png"
                                data-src-retina="images/logo.png" height="22">
                        </div>
                    </div>
                </div>
                <div class="pull-right full-height visible-sm visible-xs">
                    <div class="header-inner">
                        <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block">
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" pull-left sm-table hidden-xs hidden-sm">
                <div class="header-inner">
                    <div class="brand inline">
                        <img src="images/headerlogo.png" alt="logo" data-src="images/headerlogo.png"
                            data-src-retina="images/headerlogo.png" width="140" height="51">
                    </div>
                </div>
            </div>
            <div class=" pull-right">
                <div class="visible-lg visible-md m-t-10">
                    <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                        <span class="semi-bold">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="dropdown pull-right">
                        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="thumbnail-wrapper d32 circular inline m-t-5">
                                <img src="images/user.png" alt="" data-src="images/user.png"
                                    data-src-retina="images/user.png" width="32" height="32">
                            </span>
                        </button>
                        <ul class="dropdown-menu profile-dropdown" role="menu">
                            <li class="bg-master-lighter">
                                <a href="#" class="clearfix">
                                    <span class="pull-left"></span></a><a class="logout_user" href="#"
                                    title="Logout" onclick="logout()">Logout</a>
                                <span class="pull-right"><i class="pg-power"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="content">
                {{ $slot }}
            </div>
            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2019</span>
                        <span class="font-montserrat">PT Hutama Karya (PERSERO)</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easy-loading/1.1.1/jquery.loading.min.js"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="pages/js/pages.min.js"></script>
    <script src="assets/js/form_elements.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <script src="assets/js/actions.js" type="text/javascript"></script>
</body>

</html>
