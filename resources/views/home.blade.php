@extends('layout')

@section('main_content')
    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-2">

        <div class="flexslider slider" id="slider-2">
            <ul class="slides">
                <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{('public/frontend/images/field1.jpg')}}) 50% 15%;background-size:cover;background-repeat: no-repeat;background-position: center;height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>DHNT FOOTBALL FIELD</h2>
                            <p>Liên hệ số điện thoại 0905692030.</p>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-1 -->

                <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{('public/frontend/images/field2.jpg')}}) 50% 15%;background-size:cover;background-repeat: no-repeat;background-position: center;height:100%;">
                    <div class=" meta">
                        <div class="container">
                            <h2>FRIENDLY FOOTBALL</h2>
                            <p>Giao hữu bóng đá để nâng cao sức khoẻ, trình độ và gặp gỡ những người bạn.</p>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end meta -->
                </li>
                <!-- end item-2 -->
            </ul>
        </div>
        <!-- end slider -->

        <div class="search-tabs" id="search-tabs-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#TimDoiNhanh" data-toggle="tab"><span><i class="fa fa-soccer-ball-o"></i></span><span class="st-text">Tìm trận đấu nhanh</span></a></li>
                        </ul>

                        <div class="tab-content">
    
                            <div id="TimDoiNhanh" class="tab-pane in active">
                                <form action="{{URL::to('/search')}}" autocomplete="off" method="POST">
                                 {{csrf_field()}}
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-10">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group left-icon">
                                                        <input type="text" class="form-control dpd1" name="keywords_submit" id="keywords" placeholder="MM/dd/yyyy">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <div id="search_ajax"></div>
                                                </div>
                                                <!-- end columns -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                            <button type="submit" name="search_items" class="btn btn-orange">Tìm kiếm</button>
                                        </div>
                                        <!-- end columns -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end hotels -->

                        </div>
                        <!-- end tab-content -->

                    </div>
                    <!-- end columns -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end search-tabs -->

    </section>
    <!-- end flexslider-container -->

    <!--================= Bang dat san =============-->
    <section id="BangDatSan" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-heading">
                        <h2>THÔNG TIN ĐẶT SÂN</h2>
                        <hr class="heading-line" />
                    </div>
                    <!-- end page-heading -->

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                                <ul class="booking-responsive-table">
                                    <li class="booking-table-header">
                                        <div class="booking-col booking-col-1">Người đặt</div>
                                        <div class="booking-col booking-col-2">Tên sân</div>
                                        <div class="booking-col booking-col-3">Bắt đầu</div>
                                        <div class="booking-col booking-col-4">Kết thúc</div>
                                    </li>
                            @foreach ($field_booking as $fb)
                                    <li class="booking-table-row">
                                        <div class="booking-col booking-col-1" data-label="Job Id">{{$fb->name}}</div>
                                        <div class="booking-col booking-col-2" data-label="Customer Name">{{$fb->field_name}}</div>
                                        <div class="booking-col booking-col-3" data-label="Amount">{{$fb->booking_start}}</div>
                                        <div class="booking-col booking-col-4" data-label="Payment Status">{{$fb->booking_end}}</div>
                                    </li>
                            @endforeach
                                </ul>                                


                        </div>
                    </div>

                    <div class="view-all text-center">
                        {{ $field_booking->links() }}
                    </div>
                    <!-- end view-all -->
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end BangDatSan -->


    @include('layouts.quick')
  @include('layouts.count')
@endsection
