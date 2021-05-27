<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Water DC CMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }} "></script>
</head>

<body class="body-bg">
   
    <!-- preloader area end -->
    @include('nav.head')
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
       
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            @include('nav.sidebar')
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->

        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
            <div class="row">
                    <!-- nav tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body2">
                                <div class="d-md-flex">
                                    <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <span> ข้อมูลระดับน้ำ</span> </a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <span> MataData </span></a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span> Data Dictionary </span> </a>
                                    </div>
                                    <!-- <div class="tab-content" id="v-pills-tabContent" style="background-color: #fff;"> -->
                                    <div class="tab-content" id="v-pills-tabContent" >
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                    
                                                </div>
                                            <!-- additional content area end -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                   
                                                </div>
                                            <!-- additional content area end -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="additional-content">
                                                                <div class="alert alert-primary" role="alert">
                                                                    <h4 class="alert-heading">พระราชกฤษฎีกากำหนดลุ่มน้ำ</h4>
                                                                    <p> ข้อมูล Shape File ของพื้นที่ 22 ลุ่มน้ำในประเทศไทย ตามพระราชกฤษฎีกากำหนดลุ่มน้ำ พ.ศ. 2564 </p>
                                                                    <p> ลุ่มน้ำสาละวิน ลุ่มน้ำโขงเหนือ ลุ่มน้ำโขงตะวันออกเฉียงเหนือ ลุ่มน้ำชี ลุ่มน้ำมูล ลุ่มน้ำปิง ลุ่มน้ำวัง ลุ่มน้ำยม ลุ่มน้ำน่าน ลุ่มน้ำเจ้าพระยา ลุ่มน้ำสะแกกรัง ลุ่มน้ำป่าสัก ลุ่มน้ำท่าจีน ลุ่มน้ำแม่กลอง ลุ่มน้ำบางปะกง ลุ่มน้ำโตนเลสาบ ลุ่มน้ำชายฝั่งทะเลตะวันออก ลุ่มน้ำเพชรบุรี-ประจวบคีรีขันธ์ ลุ่มน้ำภาคใต้ฝั่งตะวันออกตอนบน ลุ่มน้ำทะเลสาบสงขลา ลุ่มน้ำภาคใต้ตะวันออกตอนล่าง และลุ่มน้ำภาคใต้ฝั่งตะวันตก </p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : 2564 </p> 
                                                                    <p>รูปแบบข้อมูล : PDF </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- additional content area end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nav tab end -->
                    
                </div>
                
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p> ศูนย์ข้อมูลทรัพยากรน้ำ มหาวิทยาลัยเชียงใหม่</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
    <!-- offset area start -->
    
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"></script> 
    <!-- bootstrap 4 js -->
    <script src="{{ asset('js/popper.min.js')}}"></script> 
    <script src="{{ asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script> 
    <script src="{{ asset('js/metisMenu.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.slicknav.min.js')}}"></script> 


    
    <!-- others plugins -->
    <script src="{{ asset('js/plugins.js')}}"></script> 
    <script src="{{ asset('js/scripts.js')}}"></script> 
</body>

</html>