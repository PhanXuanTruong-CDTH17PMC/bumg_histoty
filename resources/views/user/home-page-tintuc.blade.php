<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        Tin Tức
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet') }}" />
    <link rel="stylesheet" href="fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<header >
    <div class="navbar-custom" style="background-color: green">
        <div class="container-fluid">
                <!-- LOGO -->
                <div class="logo-box">
                    <a  class="logo text-center">
                    <label style="color:White; font-size:50px">PT Home's</label>
                    </a>
                </div>
                <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="button">
                    
                    <a href="/log-in" class="nav-link  nav-user mr-0 waves-effect " style=" color: white">
                        Đăng nhập
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<body class="authentication-bg authentication-bg-pattern" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<img  class="img-fluid" name="image" style="height:100vh; width:100%; " src="{{asset('assets/images/img/sile-1.jpg') }}" alt="err">
   <div class="site-section pb-0">
      <div class="container md-8">
          <h1  style="margin:auto;padding-bottom: 50px;Color green;display: block;text-align: center;"><b>Tin Tức</b></h1>
      </div>
      <div class="container">
      <h2>{{$tintuc->tieu_de}}</h2>
          <div class="container">
          {!!(substr($tintuc->noi_dung_tt,1, )) !!}
        </div>
      </div>
    </div>
    
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetale>rt2/sweetalert2.min.js') }}"></script>
    <script type="text/javascript">
      window.onload = function(){
        setTimeout("switch_Image()", 3000);
      }
      var current = 1;
      var num_image = 4;
      function switch_Image(){
          current++;
          document.images['image'].src ='assets/images/img/sile-' + current + '.jpg';
        if(current < num_image){
          setTimeout("switch_Image()", 3000);
        }else if(current == num_image){
          current = 0;
          setTimeout("switch_Image()", 3000);
        }
    }
</script>
</body>
</html>
