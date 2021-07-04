@extends('layout')

@section('main_content')



       <!--=================== PAGE-COVER =================-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Tìm đối thủ đá bóng</h1>
                    <ul class="breadcrumb">
                        <li> <a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li class="active">Danh sách đội đang chờ</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->

    
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
                                                        <input type="text" class="form-control dpd1" name="keywords_submit" id="keywords"  placeholder="MM/dd/yyyy">
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

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="team-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                        <div class="side-bar-block filter-block">
                            <h3>Lọc kết quả</h3>
                            <p>Tìm kiếm theo trình độ</p>

                            <nav class="filter-team">
                                <ul class="filter-team-list">
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-mc')}}" class="filter-team-item__link" type="submit">Mới chơi</a>
                                    </li>
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-tb')}}" class="filter-team-item__link">Trung bình</a>
                                    </li>
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-tby')}}" class="filter-team-item__link">Trung bình yếu</a>
                                    </li>
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-tbk')}}" class="filter-team-item__link">Trung bình khá</a>
                                    </li>
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-k')}}" class="filter-team-item__link">Khá</a>
                                    </li>
                                    <li class="filter-team-item filter-team-item--active">
                                        <a href="{{URL::to('/match-km')}}" class="filter-team-item__link">Khá mạnh</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end side-bar-block -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Cần giúp đỡ</h3>
                                    <p>Xin vui lòng liên hệ số điện thoại dưới đây.</p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+1 123 1234567</p>
                                    </div>
                                    <!-- end support-contact -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    @foreach($match_info as $key => $list_match_info)
                        <div class="list-block main-block f-list-block">
                            <div class="list-content">
                                <div class="list-info f-list-info">

                                    <div class="list-team-info lmatch">
                                        <h3 class="t-info-heading">{{$list_match_info->team_name}}</h3>
                                        <p>Xin liên hệ qua số điện thoại để sắp đặt trận đấu giao hữu</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span><i class="fa fa-calendar"></i> </span> Thời gian: </td>
                                                        <td>
                                                            {{$list_match_info->match_time}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-phone"></i> </span> Số điện thoại liên hệ: </td>
                                                        <td>
                                                            {{$list_match_info->team_phone}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-shirtsinbulk"></i> </span> Trình độ: </td>
                                                        <td>
                                                            @if($list_match_info->match_team_level==0)
                                                                Mới chơi
                                                            @endif
                                                            @if($list_match_info->match_team_level==1)
                                                                Trung bình
                                                            @endif      
                                                            @if($list_match_info->match_team_level==2)
                                                                Trung bình yếu
                                                            @endif  
                                                            @if($list_match_info->match_team_level==3)
                                                                Trung bình khá
                                                            @endif  
                                                            @if($list_match_info->match_team_level==4)
                                                                Khá
                                                            @endif  
                                                            @if($list_match_info->match_team_level==5)
                                                                Khá mạnh
                                                            @endif  
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-shirtsinbulk"></i> </span>Tình trạng</td>
                                                        <td>                                                        
                                                            @if($list_match_info->match_status==1)
                                                                <span class="text-primary">Đã có kèo</span>
                                                            @else
                                                                <span class="wait-for-match">Đang chờ</span>

                                                            @endif                                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-quote-left"></i> </span>Lời nhắn:</td>
                                                        <td>{{$list_match_info->match_desc}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                        {{-- <button type="submit" class="btn btn-orange" data-toggle="modal" data-target="#invite-match">Mời giao lưu</button> --}}

                                    </div>
                                    <!-- end f-list-info -->
                                </div>
                                <!-- end list-content -->
                            </div>
                        </div>
                        <!-- end f-list-block -->
                    @endforeach

                    <span>{!!$match_info->links()!!}</span>
                    
                        {{-- <div class="pages">

                            <ol class="pagination">
                             
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div> --}}
                        <!-- end pages -->
                    </div>
                    <!-- end columns -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end team-listing -->
    </section>
    <!-- end innerpage-wrapper -->

    {{-- <div id="invite-match" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Thông tin liên hệ</h3>
                    <p>Xin liên hệ qua số điện thoại để giao hữu</p>
                </div>
                <!-- end modal-header -->

                <div class="modal-body">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Tên đội bóng</label>
                                <input type="text" readonly class="form-control"  value="{{$list_match_info->team_name}}"/>
                        </div>
                        <!-- end form-group -->

                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" readonly  class="form-control"   value="{{$list_match_info->team_phone}}"/>
                        </div>
                        <!-- end form-group -->



                        <button type="submit" name="edit_team_info" class="btn btn-orange">Xác nhận</button>
                    </form>
                </div>
                <!-- end modal-bpdy -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div> --}}
    <!-- end edit-profile -->
    @include('layouts.count')
@endsection
