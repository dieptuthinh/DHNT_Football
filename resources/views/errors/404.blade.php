
<!doctype html>
<html lang="en">

<head>
    <title>Error Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome Stylesheet -->
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom Stylesheets -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/orange.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
</head>


<body>

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
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
                <!-- end columns -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->


    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="error-text" class="section-padding back-size">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="company-name"><span><i class="fa fa-soccer-ball-o"></i></span>DHNT FOOTBALL</h3>
                        <h2>404</h2>
                        <p>Kh??ng t??m th???y trang.</p>
                        <a href="{{URL::to('/')}}" class="btn btn-w-border">V??? trang ch???</a>
                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end error-text -->
    </section>
    <!-- end innerpage-wrapper -->




    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>EMAIL</h2>
                    <p>????ng k?? ????? nh???n th??ng b??o </p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="??i???n email c???a b???n v??o ????y" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end newsletter-1 -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>88 Vo Thi Sau Street, Nha Trang City, Khanh Hoa</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>DHNT.Football@gmail.com</li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                        <h3 class="footer-heading">PAGES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">TRANG CH???</a></li>
                            <li><a href="#">T??M ?????I</a></li>
                            <li><a href="#">?????T S??N</a></li>
                            <li><a href="#">DANH S??CH</a></li>
                            <li><a href="#">404 PAGE</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Gi???i thi???u</a></li>
                            <li><a href="#">????NG NH???P</a></li>
                            <li><a href="#">????ng k??</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>Tr???i qua h??n 60 n??m x??y d???ng v?? ph??t tri???n, Tr?????ng ?????i h???c Nha Trang ???? tr??? th??nh m???t trong nh???ng c?? s??? ????o t???o ??a ng??nh, ??a l??nh v???c quy m?? l???n; l?? c?? s??? nghi??n c???u ch??? ?????o, tri???n khai ???ng d???ng c??ng ngh??? ti??n ti???n, ?????c bi???t trong
                            l??nh v???c th???y s???n ph???c v??? ph??t tri???n kinh t??? x?? h???i khu v???c Nam Trung B???, T??y Nguy??n v?? ph???m vi c??? n?????c.</p>
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
                        <p>?? 2021 <a href="#">DHNT</a>. Football Club.</p>
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
    <script src="{{asset('public/frontend/js/custom-navigation.js')}}"></script>

    <!-- Page Scripts Ends -->
</body>

</html>
