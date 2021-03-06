<div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                <li >
                                        <a href="{{ asset('/')}}">
                                            <i class="ti-home"></i> <br>
                                            <span>หน้าแรก</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ asset('/data')}}">
                                            <i class="ti-folder"></i><br>
                                            <span>คลังข้อมูล</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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