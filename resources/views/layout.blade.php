{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </body>
</html> --}}
<!doctype html>
<html lang="en">

<head>
    <title>DHNT FOOTBALL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public/frontend/images/favicon.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


<!-- bang dat san -->
    <script src="{{asset('public/frontend/js/jquery-3.4.1.js')}}"></script>



   <!-- Bootstrap Stylesheet -->
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome Stylesheet -->
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom Stylesheets -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/orange.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">

    <!-- Flex Slider Stylesheet -->
    <link href="{{asset('public/frontend/css/flexslider.css')}}" rel="stylesheet">


    <!--Date-Picker Stylesheet-->
    <link href="{{asset('public/frontend/css/datepicker.css')}}" rel="stylesheet">


    <!-- Magnific Gallery -->
    <link href="{{asset('public/frontend/css/magnific-popup.css')}}" rel="stylesheet">

    <!-- handmade Gallery -->
    <link href="{{asset('public/frontend/css/hanhmade.css')}}" rel="stylesheet">

    {{-- <!-- Time table -->
    <link href="{{asset('public/frontend/time_table/TimeTable.css')}}" rel="stylesheet">


    <!-- date picker -->
    <link href="{{asset('public/frontend/date_picker/daterangepicker.css')}}" rel="stylesheet">

    <!-- toast (nofication) -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/toast/jquery.toast.min.css')}}" />

    <!-- chosen  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/chosen/chosen.css')}}" /> --}}


</head>


<body id="homepage">

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>88 Vo Thi Sau Street, Nha Trang City, Khanh Hoa</li>
                            <li><span><i class="fa fa-phone"></i></span>+0905 69 2030</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            @if (Route::has('login')) 
                                @auth

                            @else
                                <li><a href="{{ route('login') }}"><span><i class="fa fa-lock"></i></span>Đăng nhập</a></li>
                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"><span><i class="fa fa-plus"></i></span>Đăng ký</a></li>
                                @endif 
                                @endauth 
                            @endif

                        </ul>
                    </div>
                    <!-- end links -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->

    <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                </button>
                <a href="{{URL::to('/')}}" class="navbar-brand"><span><i class="fa fa-soccer-ball-o"></i>DHNT </span>FOOTBALL</a>
            </div>
            <!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active"><a href="{{URL::to('/')}}" class="dropdown-toggle" data-toggle="dropdown">Trang chủ<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="{{URL::to('/')}}">Trang chính</a></li>
                        @if (Route::has('login')) 
                        @auth
                            <li><a href="{{URL::to('/booking')}}">Đặt Sân</a></li>
                        @else
                            <li><a href="{{URL::to('/booking-price')}}">Thông tin giá Sân</a></li>
                        @endauth 
                        @endif
                            <li><a href="{{URL::to('/list-match')}}">Tìm đối thủ</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">THÔNG tin đặt sân<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('/field-info-5')}}">Thông tin đặt sân 5</a></li>
                            <li><a href="{{URL::to('/field-info-7')}}">Thông tin đặt sân 7</a></li>
                            <li><a href="{{URL::to('/field-info-11')}}">Thông tin đặt sân 11</a></li>
                            <li><a href="{{URL::to('/field-info-futsal')}}">Thông tin đặt sân Futsal</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tìm đối thủ nhanh<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('/list-match')}}">Đối thủ đang chờ</a></li>
                            <li><a href="{{URL::to('/list-team')}}">Danh sách đội bóng</a></li>
                    @if (Route::has('login'))
                    @auth        
                            @if (Auth::user()->user_phone)
                                <li><a href="{{URL::to('/create-match')}}">Mời đối thủ giao lưu</a></li>
                            @else
                                <li><a href="{{URL::to('/user-infomation/'.Auth::user()->id)}}">Mời đối thủ giao lưu</a></li>
                            @endif
                        </ul>
                    </li>
                    @else
                    @endauth 
                    @endif

                    @if (Route::has('login'))
                    @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user-home" data-toggle="dropdown">
                            <span>
                                @if (Auth::user()->user_image)
                                    <img src="{{asset('public/storage/'.Auth::user()->user_image)}}" alt="" class="user-img-home">
                                @else
                                    <img src="{{asset('public/frontend/images/user.png')}}" alt="" class="user-img-home">
                                @endif
                            </span> 
                            {{ Auth::user()->name }}
                            <span><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('/user-infomation/'.Auth::user()->id)}}">Thông tin tài khoản</a></li>

                            {{-- @if ()
                            @else
                            @endif --}}
                            <li><a href="{{URL::to('/my-team/'.Auth::user()->id)}}">Đội bóng của tôi</a></li>


                            <li><a href="{{URL::to('/history-booking')}}">Lịch sử đặt sân</a></li>
                            <li><a href="{{URL::to('/history-match')}}">Lịch sử lời mời</a></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Đăng xuất
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @else
                    @endauth 
                    @endif
                    <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li> -->
                </ul>
            </div>
            <!-- end navbar collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav" >
            <h2 id="web-name"><span><i class="fa fa-soccer-ball-o"></i></span>DHNT FOOTBALL</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->
                
                <div class="list-group panel">
                
                    <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Trang chủ<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="home-links">
                        <a href="{{URL::to('/')}}" class="list-group-item active">Trang chính</a>
                        @if (Route::has('login'))
                        @auth
                            <a href="{{URL::to('/booking')}}" class="list-group-item">Đặt sân</a>
                        @else
                            <a href="{{URL::to('/booking')}}" class="list-group-item">Thông tin giá sân</a>
                        @endauth 
                        @endif
                        <a href="{{URL::to('/list-match')}}" class="list-group-item">Tìm đối thủ</a>
                    </div><!-- end sub-menu -->

                    @if (Route::has('login'))
                    @auth
                    <a href="#u-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-user link-icon"></i></span>{{ Auth::user()->name }}<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="u-links">
                        <a href="{{URL::to('/user-infomation/'.Auth::user()->id)}}" class="list-group-item">Thông tin tài khoản</a>
                        <a href="{{URL::to('/my-team/'.Auth::user()->id)}}" class="list-group-item">Đội bóng của tôi</a>
                        <a href="{{URL::to('/history-booking')}}" class="list-group-item">Lịch sử đặt sân</a>
                        <a href="{{URL::to('/history-match')}}" class="list-group-item">Lịch sử lời mời</a>                        
                        <a href="{{ route('logout') }}" class="list-group-item" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">                    
                            Đăng xuất
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div><!-- end sub-menu -->
                    @else
                    @endauth 
                    @endif
                    <a href="#DSN-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Thông tin đặt sân<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="DSN-links">
                        <a href="{{URL::to('/field-info-5')}}" class="list-group-item">Thông tin đặt sân 5</a>
                        <a href="{{URL::to('/field-info-7')}}" class="list-group-item">Thông tin đặt sân 7</a>
                        <a href="{{URL::to('/field-info-7')}}" class="list-group-item">Thông tin đặt sân 11</a>
                        <a href="{{URL::to('/field-info-7')}}" class="list-group-item">Thông tin đặt sân FUTSAL</a>
                    </div><!-- end sub-menu -->
                    
                    <a href="#TDTN-links" class="list-group-item " data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Tìm đối thủ nhanh<span><i class="fa fa-chevron-down arrow"></i></span></a>
                    <div class="collapse sub-menu" id="TDTN-links">
                        <a href="{{URL::to('/list-match')}}" class="list-group-item">Đối thủ đang chờ</a>
                        <a href="{{URL::to('/list-team')}}" class="list-group-item ">Danh sách đội bóng</a>
                        @if (Route::has('login'))
                        @auth        
                                @if (Auth::user()->user_phone)
                                    <a href="{{URL::to('/create-match')}}" class="list-group-item">Mời đối thủ giao lưu</a>
                                @else   
                                    <a href="{{URL::to('/user-infomation/'.Auth::user()->id)}}" class="list-group-item">Mời đối thủ giao lưu</a>
                                @endif
                            </ul>
                        </li>
                        @else
                        @endauth 
                        @endif
                    </div><!-- end sub-menu -->
                                        

                    
                    
                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->
    <!-- end sidenav-content -->

    @yield('main_content')

    {{-- <!--============== TOP datsannhanh ============-->
    <section id="datsannhanh" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>CÁC LOẠI SÂN</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="">
                                                <img src="{{('public/frontend/images/san5.jpg')}}" class="img-responsive" alt="destination-img" style="width:278px;height: 300px;" />
                                            </a>
                                        </div>
                                        <!-- end destination-img -->
                                    </div>
                                    <!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="">LOẠI SÂN 5</a>
                                                <p class="country">2 Sân</p>
                                                <p>Sân dành cho 10 người, mỗi đội 5 người.</p>
                                                <span class="destination-price">1h/200.000VND</span>
                                                <a href="" class="btn btn-orange">Đặt ngay</a>
                                            </div>
                                            <!-- end destination-title -->
                                        </div>
                                        <!-- end destination-info -->
                                    </div>
                                    <!-- end columns -->

                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end destination-block -->
                        </div>
                        <!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="">
                                                <img src="{{('public/frontend/images/san7.jpg')}}" class="img-responsive" alt="destination-img" style="width:278px;height: 300px;" />
                                            </a>
                                        </div>
                                        <!-- end destination-img -->
                                    </div>
                                    <!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="">LOẠI SÂN 7</a>
                                                <p class="country">1 Sân</p>
                                                <p>Sân dành cho 14 người, mỗi đội 7 người</p>
                                                <span class="destination-price">1h/400.000VND</span>
                                                <a href="" class="btn btn-orange">Đặt ngay</a>
                                            </div>
                                            <!-- end destination-title -->
                                        </div>
                                        <!-- end destination-info -->
                                    </div>
                                    <!-- end columns -->

                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end destination-block -->
                        </div>
                        <!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="">
                                                <img src="{{('public/frontend/images/san11.jpg')}}" class="img-responsive" alt="destination-img" style="width:278px;height: 300px;" />
                                            </a>
                                        </div>
                                        <!-- end destination-img -->
                                    </div>
                                    <!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="">LOẠI SÂN 11</a>
                                                <p class="country">1 Sân</p>
                                                <p>Sân dành cho 22 người, mỗi đội 11 người</p>
                                                <span class="destination-price">1h/600k</span>
                                                <a href="" class="btn btn-orange">Đặt ngay</a>
                                            </div>
                                            <!-- end destination-title -->
                                        </div>
                                        <!-- end destination-info -->
                                    </div>
                                    <!-- end columns -->

                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end destination-block -->
                        </div>
                        <!-- end columns -->

                        <div class="col-sm-6 col-md-6">
                            <div class="main-block destination-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                        <div class="main-img destination-img">
                                            <a href="">
                                                <img src="{{('public/frontend/images/futsal.jpg')}}" class="img-responsive" alt="destination-img" style="width:278px;height: 300px;" />
                                            </a>
                                        </div>
                                        <!-- end destination-img -->
                                    </div>
                                    <!-- end columns -->

                                    <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                        <div class="destination-info">
                                            <div class="destination-title">
                                                <a href="">SÂN TRONG NHÀ</a>
                                                <p class="country">1 Sân</p>
                                                <p>Sân futsal, mỗi đội 5 người.</p>
                                                <span class="destination-price">1h/450.000VND</span>
                                                <a href="" class="btn btn-orange">Đặt ngay</a>
                                            </div>
                                            <!-- end destination-title -->
                                        </div>
                                        <!-- end destination-info -->
                                    </div>
                                    <!-- end columns -->

                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end destination-block -->
                        </div>
                        <!-- end columns -->

                    </div>
                    <!-- end row -->

                    <div class="view-all text-center">
                        <a href="tour-listing-right-sidebar.html" class="btn btn-g-border">Xem tất cả</a>
                    </div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end datsannhanh -->  --}}




    {{-- <!--============== HIGHLIGHTS =============-->
    <section id="highlights" class="section-padding back-size">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="boxes">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-soccer-ball-o"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">{{$field_count->total()}}</span>
                                        <p>Sân bóng</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-user"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">{{$user_count->total()}}</span>
                                        <p>Thành viên</p>

                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-steam"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">{{$team_count->total()}}</span>
                                        <p>Đội bóng</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-globe"></i></span>
                                    </div>
                                    <!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">1</span>
                                        <p>mục tiêu</p>
                                    </div>
                                    <!-- end h-text -->
                                </div>
                                <!-- end highlight-box -->
                            </div>
                            <!-- end columns -->
                        </div>
                        <!-- end boxes -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end highlights --> --}}

    




    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">LIÊN HỆ</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>88 Vo Thi Sau Street, Nha Trang City, Khanh Hoa</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>DHNT.Football@gmail.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">TRANG</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{URL::to('/')}}">TRANG CHỦ</a></li>
                            <li><a href="{{URL::to('/list-team')}}">TÌM ĐỘI</a></li>
                            <li><a href="{{URL::to('/dat-san')}}">ĐẶT SÂN</a></li>
                            <li><a href="{{URL::to('/list-team')}}">DANH SÁCH</a></li>
                            <li><a href="{{URL::to('/404')}}">404 PAGE</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">CHỨC NĂNG</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{URL::to('/introduce')}}">Giới thiệu</a></li>
                            <li><a href="{{ route('login') }}">ĐĂNG NHẬP</a></li>
                            <li><a href="{{ route('register') }}">Đăng ký</a></li>
                            <li><a href="{{URL::to('/create-team')}}">Tạo đội</a></li>
                            <li><a href="{{URL::to('/map')}}">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">THÔNG TIN</h3>
                        <p>Trải qua hơn 60 năm xây dựng và phát triển, Trường Đại học Nha Trang đã trở thành một trong những cơ sở đào tạo đa ngành, đa lĩnh vực quy mô lớn; là cơ sở nghiên cứu chủ đạo, triển khai ứng dụng công nghệ tiên tiến, đặc biệt trong
                            lĩnh vực thủy sản phục vụ phát triển kinh tế xã hội khu vực Nam Trung Bộ, Tây Nguyên và phạm vi cả nước.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                        <p>© 2021 <a href="#">DHNT</a>. Football Club.</p>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->

    </section>
    <!-- end footer -->


    <!-- Page Scripts Starts -->


    <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('public/frontend/js/custom-navigation.js')}}"></script>
    <script src="{{asset('public/frontend/js/custom-flex.js')}}"></script>
    <script src="{{asset('public/frontend/js/custom-date-picker.js')}}"></script>

    <!-- search -->
    {{-- <script type="text/javascript">
        $('#keywords').keyup(function(){
            var query = $(this).val();

            if(query != '')
                {
                var _token = $('input[name="_token"]').val();

                $.ajax({
                url:"{{url('/autocomplete-ajax')}}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                $('#search_ajax').fadeIn();  
                    $('#search_ajax').html(data);
                }
                });

                }else{

                    $('#search_ajax').fadeOut();  
                }
        });

        $(document).on('click', '.li_search_ajax', function(){  
            $('#keywords').val($(this).text());  
            $('#search_ajax').fadeOut();  
        }); 
    </script> --}}



    {{-- <!-- Time table -->
    <script src="{{asset('public/frontend/time_table/common.js')}}"></script>
    <script src="{{asset('public/frontend/time_table/sample.js')}}"></script>
    <script src="{{asset('public/frontend/time_table/createjs.min.js')}}"></script>
    <script src="{{asset('public/frontend/time_table/TimeTable.js')}}"></script>

    <script src="{{asset('public/frontend/date_picker/moment.min.js')}}"></script>
    <script src="{{asset('public/frontend/date_picker/daterangepicker.min.js')}}"></script>

    <!-- toast -->
    <script src="{{asset('public/frontend/toast/jquery.toast.min.js')}}"></script> --}}

    <!-- Page Scripts Ends -->

</body>

</html>