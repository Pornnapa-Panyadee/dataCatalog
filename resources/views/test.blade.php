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
        @include('nav.sidebar1')
        <!-- header area end -->

        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="container">
            <div class="row">
                    <!-- nav tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card" >
                            <div class="card-body" style="height:90%;">
                                <div class="d-md-flex">
                                    <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="ti-signal"></i><span> สถานีโทรมาตร/สถานี</span> </a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="ti-map"></i><span> เชิงพื้นที่ </span></a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="ti-file"></i><span> กฏหมาย </span> </a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="ti-paint-bucket"></i><span> การเกษตรกรรม </span> </a>
                                    </div>
                                    <!-- <div class="tab-content" id="v-pills-tabContent" style="background-color: #fff;"> -->
                                    <div class="tab-content" id="v-pills-tabContent" >
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="additional-content">
                                                                <div class="alert alert-primary" role="alert">
                                                                    <h4 class="alert-heading"><a href="{{ asset('detail')}}" > ระดับน้ำของสถานีฝาง 2563 </a> </h4>
                                                                    <p>ข้อมูลระดับน้ำ  ระดับน้ำทำเล อัตราการไหล น้ำฝน อุณหภูมิ และความชื้น ของสถานีโทรมาตรที่ติดตั้งในลุ่มน้ำฝาง จำนวน 4 สถานี</p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : มกราคม 2564</p> 
                                                                    <p>รูปแบบข้อมูล : Excel</p>
                                                                </div>
                                                                <div class="alert alert-primary" role="alert">
                                                                    <h4 class="alert-heading">ระดับน้ำของสถานีในพื้นที่จังหวัดพะเยา</h4>
                                                                    <p>ข้อมูลระดับน้ำ  ระดับน้ำทำเล อัตราการไหล น้ำฝน อุณหภูมิ และความชื้น ของสถานีโทรมาตรที่ติดตั้งในจังหวัดพะเยา 4 อำเภอ จำนวน 18 สถานี</p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : มกราคม 2564</p> 
                                                                    <p>รูปแบบข้อมูล : Excel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- additional content area end -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="additional-content">
                                                                <div class="alert alert-primary" role="alert">
                                                                    <h4 class="alert-heading">Shape File พื้นที่ 22 ลุ่มน้ำ</h4>
                                                                    <p> ข้อมูล Shape File ของพื้นที่ 22 ลุ่มน้ำในประเทศไทย ตามพระราชกฤษฎีกากำหนดลุ่มน้ำ พ.ศ. 2564</p>
                                                                    <p>ลุ่มน้ำสาละวิน ลุ่มน้ำโขงเหนือ ลุ่มน้ำโขงตะวันออกเฉียงเหนือ ลุ่มน้ำชี ลุ่มน้ำมูล ลุ่มน้ำปิง ลุ่มน้ำวัง ลุ่มน้ำยม ลุ่มน้ำน่าน ลุ่มน้ำเจ้าพระยา ลุ่มน้ำสะแกกรัง ลุ่มน้ำป่าสัก ลุ่มน้ำท่าจีน ลุ่มน้ำแม่กลอง ลุ่มน้ำบางปะกง ลุ่มน้ำโตนเลสาบ ลุ่มน้ำชายฝั่งทะเลตะวันออก ลุ่มน้ำเพชรบุรี-ประจวบคีรีขันธ์ ลุ่มน้ำภาคใต้ฝั่งตะวันออกตอนบน ลุ่มน้ำทะเลสาบสงขลา ลุ่มน้ำภาคใต้ตะวันออกตอนล่าง และลุ่มน้ำภาคใต้ฝั่งตะวันตก</p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : 2564 </p> 
                                                                    <p>รูปแบบข้อมูล : Shape File </p>
                                                                </div>
                                                                <div class="alert alert-primary" >
                                                                    <h4 class="alert-heading">ข้อมูลพื้นที่รับน้ำจังหวัดเชียงราย</h4>
                                                                    <p>ข้อมูลแผนที่แสดงขอบเขตพื้นที่รับในพื้นที่แต่ละอำเภอของจังหวัดเชียงราย </p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : มกราคม 2564</p> 
                                                                    <p>รูปแบบข้อมูล : PDF</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <!-- additional content area start -->
                                            <div class="col-12 mt-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="additional-content">
                                                                <div class="alert alert-primary" role="alert">
                                                                    <h4 class="alert-heading">คู่มือการหาปริมาณการใช้น้ำของพืช ปริมาณการใช้น้ำของพืชอ้างอิงและค่าสัมประสิทธิ์พืช</h4>
                                                                    <p> ปริมาณการใช้น้ำของพืชอ้างอิงและค่าสัมประสิทธิ์พืช โดยการหาความสัมพันธ์ระหว่าง ดิน-น้ำ-พืช โดยหาปริมาณการใช้น้ำของพืช เช่น ข้าว พืชไร่ พืชผัก ฯลฯ </p>
                                                                    <hr>
                                                                    <p class="mb-0">ปรับปรุงข้อมูล : 2554 </p> 
                                                                    <p>รูปแบบข้อมูล : PDF </p>
                                                                    <!-- http://water.rid.go.th/hwm/cropwater/iwmd/pdf/rev_cwr_manual.pdf -->
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
            @include('nav.footer')
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
