<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets2/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        PT Home's
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                         <a class="nav-link" href="/thong-bao">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Thông Bào</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="/user-cu-dan">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Thành viên</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user-hoa-don">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>Hoa Đơn</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user-phuong-tien">
                            <i class="nc-icon nc-bus-front-12"></i>
                            <p>Phương Tiện</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/phan-anh">
                            <i class="nc-icon nc-send"></i>
                            <p>Phản Ành</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="logout">
                            <i class="nc-icon nc-button-power"></i>
                            <p>Đăng Xuất</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
                 @include('messages.messages')
                @yield('main-content')
        </div>
</body>
<!--   Core JS Files   -->
<script src="../assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets2/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
</html>
