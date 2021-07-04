@extends('layout')

@section('main_content')



       <!--=================== PAGE-COVER =================-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Lịch sử phiếu đặt sân</h1>
                    <ul class="breadcrumb">
                        <li> <a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li class="active">Lịch sử phiếu đặt sân</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->

{{-- <p>Sau khi được duyệt xin hãy kiểm tra bên thông tin đặt sân</p> --}}

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="team-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
                    
                    @foreach($booking_history as $key => $booking_history_info)
                        <div class="list-block main-block f-list-block">
                            <div class="list-content">                           
                                <div class="list-info f-list-info">
                                        <?php 
                                            $success=Session::get('success');
                                            if($success){
                                                echo'<span style="font-size: 16px" class="wait-for-match">'.$success.'</span>' ;
                                                Session::put('success',null);
                                            }
                                        ?> 
                                    <div class="list-team-info lmatch">
                                        <h3 class="t-info-heading">{{$booking_history_info->booking_details_date}}</h3>
                                        <div class="table-responsive">                                        
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span><i class="fa fa-clock-o"></i> </span> Thời gian bắt đầu: </td>
                                                        <td>
                                                            {{$booking_history_info->booking_details_start}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-clock-o"></i> </span> Thời gian kết thúc: </td>
                                                        <td>
                                                            {{$booking_history_info->booking_details_end}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-phone"></i> </span> Số điện thoại liên hệ: </td>
                                                        <td>
                                                            {{$booking_history_info->booking_details_phone}} 
                                                        </td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td><span><i class="fa fa-shirtsinbulk"></i> </span> Loại sân: </td>
                                                        <td>
                                                            @if($booking_history_info->field_type_id==1)
                                                                Loại sân 5
                                                            @endif
                                                            @if($booking_history_info->field_type_id==2)
                                                                Loại sân 7
                                                            @endif      
                                                            @if($booking_history_info->field_type_id==3)
                                                                Loại sân 11
                                                            @endif  
                                                            @if($booking_history_info->field_type_id==4)
                                                                Loại sân Futsal
                                                            @endif                                                          
                                                        </td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td><span><i class="fa fa-shirtsinbulk"></i> </span> Sân: </td>
                                                        <td>
                                                            @if($booking_history_info->field_id==1)
                                                                Sân A
                                                            @endif
                                                            @if($booking_history_info->field_id==2)
                                                                Sân B
                                                            @endif      
                                                            @if($booking_history_info->field_id==3)
                                                                Sân C
                                                            @endif  
                                                            @if($booking_history_info->field_id==4)
                                                                Sân D
                                                            @endif 
                                                            @if($booking_history_info->field_id==5)
                                                                Sân E
                                                            @endif                                                                                                                       
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-shirtsinbulk"></i> </span>Tình trạng</td>
                                                        <td>                                                        
                                                            @if($booking_history_info->booking_details_status==1)
                                                                <span class="text-primary">Duyệt đặt sân</span>
                                                            @else
                                                                <span class="wait-for-match">Chưa được duyệt</span>

                                                            @endif  
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span><i class="fa fa-user"></i> </span>Người đặt:</td>
                                                        <td>{{$booking_history_info->name}}</td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td><span><i class="fa fa-quote-left"></i> </span>Lời nhắn:</td>
                                                        <td>{{date("m/d/Y")}}</td>
                                                    </tr> --}}
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
        
                    <span>{!!$booking_history->links()!!}</span>
                    </div>
                    <!-- end columns -->


                    <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-history-block">
                                    <h3>Cần giúp đỡ</h3>
                                    <p>Xin vui lòng liên hệ số điện thoại dưới đây.</p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+0905692030</p>
                                    </div>
                                    <p>Khi đã xác nhận đã đặt sân thì xin kiểm tra tại bảng đặt sân để chắc chắn đã đặt được sân, xin cảm ơn.</p>
                                    <!-- end support-contact -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                        </div>
                        <!-- end row -->
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

@include('layouts.count')
@endsection
