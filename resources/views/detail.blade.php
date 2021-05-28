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
                            @include('nav.sidebar1')
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
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span> Data Dictionary </span> </a>
                                    </div>
                                    <!-- <div class="tab-content" id="v-pills-tabContent" style="background-color: #fff;"> -->
                                    <div class="tab-content" id="v-pills-tabContent" >
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <!-- additional content area start -->
                                            <div class="col-12 mt-2" style="margin-left:10px;">
                                                <div class="single-table">
                                                    <div class="table-responsive">
                                                        <table class="table text-center" width="100%">
                                                            <thead class="text-uppercase">
                                                                <tr>
                                                                    <th colspan="2">ข้อมูลสถานีโทรมาตร/สถานี : ระดับน้ำของสถานีฝาง 2563 </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td >วันที่ปรับปรุงทรัพยากรล่าสุด </td>
                                                                    <td>มค 64</td>
                                                                </tr>
                                                                <tr>
                                                                    <td >วันที่สร้างทรัพยากร</td>
                                                                    <td>มค 64</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>รูปแบบของไฟล์ชุดข้อมูล</td>
                                                                    <td>Excel File</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ดาวน์โหลด</td>
                                                                    <td><a href="https://drive.google.com/file/d/1aWXu-wmD0Mx9ot0ldzJL14VCMqatuOo4/view" title="ดาวน์โหลด" > <i class="fa fa-file-excel-o" style="font-size:24px;"></i> </a></td> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional content area end -->
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <!-- additional content area start -->
                                                <div class="col-12 mt-2">
                                                    <div class="single-table">
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead class="text-uppercase bg-light">
                                                                    <tr>
                                                                        <th >ID</th>
                                                                        <th >Name</th>
                                                                        <th >Data type</th>
                                                                        <th >Description</th>
                                                                        <th >Example</th>
                                                                    </tr>
                                                                </thead>
                                                                 <tbody>
                                                                    <tr>
                                                                        <th>1</th>
                                                                        <td>วันที่</td>
                                                                        <td>date</td>
                                                                        <td>วันที่ได้รับการตรวจวัดจากโทรมาตร</td>
                                                                        <td>4/1/20 0:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>2</th>
                                                                        <td>รหัสสถานี</td>
                                                                        <td>text</td>
                                                                        <td>รหัสสถานีโทรมาตร</td>
                                                                        <td>604</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>3</th>
                                                                        <td>ระดับน้ำ</td>
                                                                        <td>integer</td>
                                                                        <td>ระดับน้ำที่ได้รับการตรวจวัดจากโทรมาตร หน่วยวัดเซนติเมตร</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>4</th>
                                                                        <td>ระดับน้ำทะเล</td>
                                                                        <td>float</td>
                                                                        <td>ระดับน้ำที่ได้รับการตรวจวัดจากโทรมาตร หน่วยวัด มรทก</td>
                                                                        <td>534.1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>5</th>
                                                                        <td>อัตราการไหล</td>
                                                                        <td>float</td>
                                                                        <td>อัตราการไหลของน้ำ หน่วยวัด เมตร/วินาที</td>
                                                                        <td>1.2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>6</th>
                                                                        <td>น้ำฝน</td>
                                                                        <td>integer</td>
                                                                        <td>ปริมาณน้ำฝนราย 5 นาที หน่วยวัด มิลลิเมตร</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>7</th>
                                                                        <td>อุณหภูมิ</td>
                                                                        <td>integer</td>
                                                                        <td>อุณหภูมิ หน่วยวัด องศาเซลเซียส</td>
                                                                        <td>25</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>8</th>
                                                                        <td>ความชื้น</td>
                                                                        <td>integer</td>
                                                                        <td>ความชื้น หน่วยวัด เปอร์เซ็นต์</td>
                                                                        <td>39</td>
                                                                    </tr>
                                                                          
                                                                </tbody>
                                                            </table>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert alert-primary" style="margin-top:20px;">
                                                    <table class="table text-center" width="100%">
                                                        <thead class="text-uppercase">
                                                            <tr><th colspan="2">ข้อมูลสถานีโทรมาตร/สถานี : data dictionary </th></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td >วันที่ปรับปรุงทรัพยากรล่าสุด </td>
                                                                <td>มค 64</td>
                                                            </tr>
                                                            <tr>
                                                                <td >วันที่สร้างทรัพยากร</td>
                                                                <td>มค 64</td>
                                                            </tr>
                                                            <tr>
                                                                <td>รูปแบบของไฟล์ชุดข้อมูล</td>
                                                                <td>Excel File</td>
                                                            </tr>
                                                            <tr>
                                                                 <td>ดาวน์โหลด</td>
                                                                <td><a href="#" title="ดาวน์โหลด" > <i class="fa fa-file-excel-o" style="font-size:24px;"></i> </a></td> 
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <!-- additional content area end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- nav tab end -->
                   <!-- Progress Table start -->
                   <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body2">
                                <h4 class="header-title">ข้อมูลเพิ่มเติม</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <tbody>
                                                <tr>
                                                    <th>วันที่สร้างชุดข้อมูล </th>
                                                    <td>มค 64</td>
                                                </tr>
                                                <tr>
                                                    <th>ขอบเขตเชิงภูมิศาสตร์ </th>
                                                    <td>อำเภอฝาง จังหวัดเชียงใหม่</td>
                                                </tr>
                                                <tr>
                                                    <th>กลุ่มชุดข้อมูล </th>
                                                    <td>ข้อมูลโทรมาตร/สถานี</td>
                                                </tr>
                                                <tr>
                                                    <th>ป้ายกำกับ </th>
                                                    <td><span class="status-p bg-primary">โทรมาตร</span> <span class="status-p bg-warning">ระดับน้ำ</span> <span class="status-p bg-success">ฝาง</span> </td>
                                                </tr>
                                                <tr>
                                                    <th>ระดับในการเข้าถึงข้อมูล </th>
                                                    <td>ราย 5 นาที</td>
                                                </tr>
                                                <tr>
                                                    <th>ความถี่ในการปรับปรุง </th>
                                                    <td>1 ปั</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>แหล่งที่มา </th>
                                                    <td>Oasys Reserach Group</td>
                                                </tr>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                
                
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
