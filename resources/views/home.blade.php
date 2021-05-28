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
        @include('nav.sidebar')
        <!-- header area end -->

        <div class="main-content-inner">
            <div class="container">
                
                <!-- testimonial area start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body bg0">
                                <div class="testimonial-carousel owl-carousel">
                                    <div class="tst-item">
                                        <div >
                                            <img src="https://waterdc.in.cmu.ac.th/lib/exe/fetch.php?w=400&tok=ceaaf7&media=dsdsfsdf.jpg" alt="author image">
                                        </div>
                                    </div>
                                    <div class="tst-item">
                                        <div class="tstu-content" >
                                            <h4 class="tstu-name">ศูนย์วิชาการสนับสนุนด้านการบริหารจัดการน้ำ </h4>
                                            <span class="profsn">มหาวิทยาลัยเชียงใหม่</span> <hr>
                                            <p>เป็นศูนย์วิชาการสนับสนุนด้านการบริหารจัดการน้ำ ที่มุ่งเน้นสนับสนุนงานวิจัย พัฒนาองค์ความรู้และนวัตกรรม และเป็นศูนย์กลางทางวิชาการด้านการบริการจัดการทรัพยากรน้ำแบบครบวงจร ภายใต้นโยบายและยุทธศาสตร์เชิงรุกของมหาวิทยาลัยเชียงใหม่ เพื่อความเป็นเลิศในระดับชาติและนานาชาติ</p>
                                            <p>รายชื่อหน่วยงานร่วมสนับสนุนศูนย์วิชาการด้านการบริหารจัดการน้ำ มหาวิทยาลัยเชียงใหม่ <br>
                                                 1) ศูนย์วิจัยด้านการจัดการภัยพิบัติทางธรรมชาติ มช. (CENDiM)<br>
                                                 2) สำนักบริการเทคโนโลยีสารสนเทศ มช. (ITSC)<br>
                                                 3) ศูนย์ภูมิภาคเทคโนโลยีอวกาศและภูมิสารสนเทศ (ภาคเหนือ) มช. (GISTNORTH)<br>
                                                 4) ศูนย์วิจัยเศรษฐศาสตร์ ทรัพยากรธรรมชาติและสิ่งแวดล้อม มช. (NREE)<br>
                                                 5) ศูนย์วิจัยและพัฒนากฎหมาย คณะนิติศาสตร์ มช. (LRDC)<br>
                                                 6) ห้องปฎิบัติการการวิจัยตัวชี้วัดทางชีวภาพของแหล่งน้ำจืด มช.<br>
                                                 7) ศูนย์วิจัยและพัฒนาเมือง (City R&D Center) คณะวิศวกรรมศาสตร์ มช.<br>
                                                 8) กลุ่มวิจัย OASYS คณะวิศวกรรมศาตร์ มช.<br>
                                                 9) ศูนย์วิศวกรรมโยธาและฐานรากระบบรางขั้นสูง มช. (CMU RailCFC)
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial area end -->
                <!-- Social Campain area start -->
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="textHeadBorderMiddle">
                                <span> คลังข้อมูลน้ำ </span>
                        </div>
                    </div>
                </div>
                <!-- Social Campain area end -->
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-signal"></i> สถานีโทรมาตร/สถานี</div>
                                            <h2>( 2 )</h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-map"></i> เชิงพื้นที่</div>
                                            <h2>( 2 )</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-file"></i> กฏหมาย</div>
                                            <h2>( 1 )</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-paint-bucket"></i> การเกษตรกรรม</div>
                                            <h2>( 1 )</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seo fact area end -->
             
                   
                 
               
                   
                </div>
            </div>
        </div>
        <br>
        <!-- footer area start-->
            @include('nav.footer')
        <!-- footer area end-->
    </div>

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
