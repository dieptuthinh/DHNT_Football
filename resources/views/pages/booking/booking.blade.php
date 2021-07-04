@extends('layout')

@section('main_content')
       <!--=================== PAGE-COVER =================-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Trang thông tin đặt sân</h1>
                    <ul class="breadcrumb">
                        <li> <a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li class="active">Đặt sân</li>
                    </ul>
                </div>
                <!-- end columns -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-cover -->
    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="thank-you" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="space-right">
                            <div class="thank-you-note">
                                <h3>Sân Bóng Trường Đại Học Nha Trang</h3>
                                <p>Số 2 Nguyễn Đình Chiểu, Vĩnh Thọ, Thành phố Nha Trang, Khánh Hòa 650000.</p>
                                <a href="#" class="btn btn-orange">0 9 0 5 6 9 2 0 3 0</a>
                            </div>
                            <!-- end thank-you-note -->

                            <div class="list-team-info">
                                <h3 class="ds-info-heading"><span><i class="fa fa-soccer-ball-o"></i></span>Giá thuê sân 5</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        @foreach($field_price as $key => $fp)   
                                        @if ($fp->field_type_id == 1)  
                                            <tr>
                                                <td>{{$fp->field_price_time}}</td>
                                                <td>{{$fp->field_price_unit_price}} vnđ / phút</td>
                                            </tr>
                                        @endif               
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                                <div class="">
                                    <a href="" class="btn btn-orange" data-toggle="modal" data-target="#booking5">Đặt sân</a>
                                </div>
                            </div>
                            <!-- end traveler-info -->
                                <div id="booking5" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">Tạo phiếu đặt sân</h3>
                                            </div>
                                            <!-- end modal-header -->

                                            <div class="modal-body bookingcard">
                                                <form role="form" action="{{URL::to('/create-booking')}}" method="post" >
                                                {{ csrf_field() }}
                                                    <div class="form-group no-view">
                                                        <label for="user_id">user id</label>
                                                        <input type="text" name="user_id"class="form-control" id="user_id" value="{{Auth::user()->id}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="name">Tên người đặt</label>
                                                        <input type="text" readonly name="name"class="form-control" id="name" value="{{Auth::user()->name}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group right-icon">
                                                        <label for="field_type">Loại sân</label>
                                                        <input type="text" readonly name="name"class="form-control" id="field_type" value="Loại sân 5"/>                                                        
                                                    </div>   

                                                    <div class="form-group right-icon">
                                                        <label for="field_id">Sân</label>
                                                        <select class="form-control" name="field_id" id="field_id">
                                                            <option value="1">Sân A</option>
                                                            <option value="2">Sân B</option>
                                                        </select>
                                                    </div>   
                                                                                         
                                                    <div class="form-group">
                                                        <label for="booking_details_date">Ngày đặt</label>
                                                        <input type="text" name="booking_details_date" class="form-control dpd1" id="" placeholder="MM/dd/yyyy" required/>
                                                    </div>
                                                    <!-- end form-group -->
                                                                                                
                                                    <div class="form-group">
                                                        <label for="booking_details_start">Giờ bắt đầu đặt sân</label>
                                                        <select class="form-control" name="booking_details_start" id="booking_details_start">
                                                            <option value="5h">5h</option>
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                        </select>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="booking_details_end">Giờ kết thúc đặt sân</label>
                                                        <select class="form-control" name="booking_details_end" id="booking_details_end">
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                            <option value="22h">22h</option>
                                                        </select>
                                                    </div>
                                                    <!-- end form-group -->
                                                    <div class="form-group">
                                                        <label for="booking_details_phone">Số điện thoại</label>
                                                        <input type="text" name="booking_details_phone" class="form-control" id="booking_details_phone" value="{{Auth::user()->user_phone}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group no-view">
                                                        <label for="booking_details_status">Tình trạng</label>
                                                        <input type="text" name="booking_details_status"class="form-control" id="booking_details_status" value="0"/>
                                                    </div>
                                                    <!-- end form-group -->                                                
                                                    <button type="submit" name="insert_booking_cart" class="btn btn-orange">Lưu đặt sân</button>
                                                </form>
                                            </div>
                                            <!-- end modal-bpdy -->
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                    <!-- end modal-dialog -->
                                </div>
                            <!-- end edit-profile -->


                            <div class="list-team-info">
                                <h3 class="ds-info-heading"><span><i class="fa fa-soccer-ball-o"></i></span>Giá thuê sân 7</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        @foreach($field_price as $key => $fp)   
                                        @if ($fp->field_type_id == 2)  
                                            <tr>
                                                <td>{{$fp->field_price_time}}</td>
                                                <td>{{$fp->field_price_unit_price}} vnđ / phút</td>
                                            </tr>
                                        @endif               
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                                <div class="">
                                    <a href="" class="btn btn-orange" data-toggle="modal" data-target="#booking7">Đặt sân</a>
                                </div>
                            </div>
                            <!-- end traveler-info -->
                                <div id="booking7" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">Tạo phiếu đặt sân</h3>
                                            </div>
                                            <!-- end modal-header -->

                                            <div class="modal-body bookingcard">
                                                <form role="form" action="{{URL::to('/create-booking')}}" method="post" >
                                                {{ csrf_field() }}
                                                    <div class="form-group no-view">
                                                        <label for="user_id">user id</label>
                                                        <input type="text" name="user_id"class="form-control" id="user_id" value="{{Auth::user()->id}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="name">Tên người đặt</label>
                                                        <input type="text" readonly name="name"class="form-control" id="name" value="{{Auth::user()->name}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group right-icon">
                                                        <label for="field_type">Loại sân</label>
                                                        <input type="text" readonly name="name"class="form-control" id="field_type" value="Loại sân 7"/>                                                    
                                                    </div>   

                                                    <div class="form-group right-icon">
                                                        <label for="field_id">Sân</label>
                                                        <select class="form-control" name="field_id" id="field_id">
                                                            <option value="3">Sân C</option>
                                                        </select>
                                                    </div>   
                                                                                         
                                                    <div class="form-group">
                                                        <label for="booking_details_date">Ngày đặt</label>
                                                        <input type="text" name="booking_details_date" class="form-control dpd1" id="" placeholder="MM/dd/yyyy" required/>
                                                    </div>
                                                    <!-- end form-group -->
                                                                                                
                                                    <div class="form-group">
                                                        <label for="booking_details_start">Giờ bắt đầu đặt sân</label>
                                                        <select class="form-control" name="booking_details_start" id="booking_details_start">
                                                            <option value="5h">5h</option>
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                        </select>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="booking_details_end">Giờ kết thúc đặt sân</label>
                                                        <select class="form-control" name="booking_details_end" id="booking_details_end">
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                            <option value="22h">22h</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="booking_details_phone">Số điện thoại</label>
                                                        <input type="text" name="booking_details_phone" class="form-control" id="booking_details_phone" value="{{Auth::user()->user_phone}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group no-view">
                                                        <label for="booking_details_status">Tình trạng</label>
                                                        <input type="text" name="booking_details_status"class="form-control" id="booking_details_status" value="0"/>
                                                    </div>
                                                    <!-- end form-group -->                                                
                                                    <button type="submit" name="insert_booking_cart" class="btn btn-orange">Lưu đặt sân</button>
                                                </form>
                                            </div>
                                            <!-- end modal-bpdy -->
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                    <!-- end modal-dialog -->
                                </div>
                            <!-- end edit-profile -->


                            <div class="list-team-info">
                                <h3 class="ds-info-heading"><span><i class="fa fa-soccer-ball-o"></i></span>Giá thuê sân 11</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        @foreach($field_price as $key => $fp)   
                                        @if ($fp->field_type_id == 3)  
                                            <tr>
                                                <td>{{$fp->field_price_time}}</td>
                                                <td>{{$fp->field_price_unit_price}} vnđ / phút</td>
                                            </tr>
                                        @endif               
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                                <div class="">
                                    <a href="" class="btn btn-orange" data-toggle="modal" data-target="#booking11">Đặt sân</a>
                                </div>
                            </div>
                            <!-- end traveler-info -->
                                <div id="booking11" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">Tạo phiếu đặt sân</h3>
                                            </div>
                                            <!-- end modal-header -->

                                            <div class="modal-body bookingcard">
                                                <form role="form" action="{{URL::to('/create-booking')}}" method="post" >
                                                {{ csrf_field() }}
                                                    <div class="form-group no-view">
                                                        <label for="user_id">user id</label>
                                                        <input type="text" name="user_id"class="form-control" id="user_id" value="{{Auth::user()->id}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="name">Tên người đặt</label>
                                                        <input type="text" readonly name="name"class="form-control" id="name" value="{{Auth::user()->name}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group right-icon">
                                                        <label for="field_type">Loại sân</label>
                                                        <input type="text" readonly name="name"class="form-control" id="field_type" value="Loại sân 11"/>
                                                    </div>   

                                                    <div class="form-group right-icon">
                                                        <label for="field_id">Sân</label>
                                                        <select class="form-control" name="field_id" id="field_id">
                                                            <option value="4">Sân D</option>
                                                        </select>
                                                    </div>   
                                                                                         
                                                    <div class="form-group">
                                                        <label for="booking_details_date">Ngày đặt</label>
                                                        <input type="text" name="booking_details_date" class="form-control dpd1" id="" placeholder="MM/dd/yyyy" required/>
                                                    </div>
                                                    <!-- end form-group -->
                                                                                                
                                                    <div class="form-group">
                                                        <label for="booking_details_start">Giờ bắt đầu đặt sân</label>
                                                        <select class="form-control" name="booking_details_start" id="booking_details_start">
                                                            <option value="5h">5h</option>
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                        </select>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="booking_details_end">Giờ kết thúc đặt sân</label>
                                                        <select class="form-control" name="booking_details_end" id="booking_details_end">
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                            <option value="22h">22h</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="booking_details_phone">Số điện thoại</label>
                                                        <input type="text" name="booking_details_phone" class="form-control" id="booking_details_phone" value="{{Auth::user()->user_phone}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group no-view">
                                                        <label for="booking_details_status">Tình trạng</label>
                                                        <input type="text" name="booking_details_status"class="form-control" id="booking_details_status" value="0"/>
                                                    </div>
                                                    <!-- end form-group -->                                                
                                                    <button type="submit" name="insert_booking_cart" class="btn btn-orange">Lưu đặt sân</button>
                                                </form>
                                            </div>
                                            <!-- end modal-bpdy -->
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                    <!-- end modal-dialog -->
                                </div>
                            <!-- end edit-profile -->




                            <div class="list-team-info">
                                <h3 class="ds-info-heading"><span><i class="fa fa-soccer-ball-o"></i></span>Giá thuê sân Futsal</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        @foreach($field_price as $key => $fp)   
                                        @if ($fp->field_type_id ==4)  
                                            <tr>
                                                <td>{{$fp->field_price_time}}</td>
                                                <td>{{$fp->field_price_unit_price}} vnđ / phút</td>
                                            </tr>
                                        @endif               
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                                <div class="">
                                    <a href="" class="btn btn-orange" data-toggle="modal" data-target="#bookingfutsal">Đặt sân</a>
                                </div>
                            </div>
                            <!-- end traveler-info -->
                                <div id="bookingfutsal" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">Tạo phiếu đặt sân</h3>
                                            </div>
                                            <!-- end modal-header -->

                                            <div class="modal-body bookingcard">
                                                <form role="form" action="{{URL::to('/create-booking')}}" method="post" >
                                                {{ csrf_field() }}
                                                    <div class="form-group no-view">
                                                        <label for="user_id">user id</label>
                                                        <input type="text" name="user_id"class="form-control" id="user_id" value="{{Auth::user()->id}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="name">Tên người đặt</label>
                                                        <input type="text" readonly name="name"class="form-control" id="name" value="{{Auth::user()->name}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group right-icon">
                                                        <label for="field_type">Loại sân</label>
                                                        <input type="text" readonly name="name"class="form-control" id="field_type" value="Loại sân Futsal"/>
                                                    </div>   

                                                    <div class="form-group right-icon">
                                                        <label for="field_id">Sân</label>
                                                        <select class="form-control" name="field_id" id="field_id">
                                                            <option value="5">Sân E</option>
                                                        </select>
                                                    </div>   
                                                                                         
                                                    <div class="form-group">
                                                        <label for="booking_details_date">Ngày đặt</label>
                                                        <input type="text" name="booking_details_date" class="form-control dpd1" id="" placeholder="MM/dd/yyyy" required/>
                                                    </div>
                                                    <!-- end form-group -->
                                                                                                
                                                    <div class="form-group">
                                                        <label for="booking_details_start">Giờ bắt đầu đặt sân</label>
                                                        <select class="form-control" name="booking_details_start" id="booking_details_start">
                                                            <option value="5h">5h</option>
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                        </select>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group">
                                                        <label for="booking_details_end">Giờ kết thúc đặt sân</label>
                                                        <select class="form-control" name="booking_details_end" id="booking_details_end">
                                                            <option value="6h">6h</option>
                                                            <option value="7h">7h</option>
                                                            <option value="8h">8h</option>
                                                            <option value="9h">9h</option>
                                                            <option value="10h">10h</option>
                                                            <option value="11h">11h</option>
                                                            <option value="12h">12h</option>
                                                            <option value="13h">13h</option>
                                                            <option value="14h">14h</option>
                                                            <option value="15h">15h</option>
                                                            <option value="16h">16h</option>
                                                            <option value="17h">17h</option>
                                                            <option value="18h">18h</option>
                                                            <option value="19h">19h</option>
                                                            <option value="20h">20h</option>
                                                            <option value="21h">21h</option>
                                                            <option value="22h">22h</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="booking_details_phone">Số điện thoại</label>
                                                        <input type="text" name="booking_details_phone" class="form-control" id="booking_details_phone" value="{{Auth::user()->user_phone}}"/>
                                                    </div>
                                                    <!-- end form-group -->

                                                    <div class="form-group no-view">
                                                        <label for="booking_details_status">Tình trạng</label>
                                                        <input type="text" name="booking_details_status"class="form-control" id="booking_details_status" value="0"/>
                                                    </div>
                                                    <!-- end form-group -->                                                
                                                    <button type="submit" name="insert_booking_cart" class="btn btn-orange">Lưu đặt sân</button>
                                                </form>
                                            </div>
                                            <!-- end modal-bpdy -->
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                    <!-- end modal-dialog -->
                                </div>
                            <!-- end edit-profile -->                            
                        </div>
                        <!-- end space-right -->
                    </div>
                    <!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">

                        <div class="row">


                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block contact">
                                    <h2 class="side-bar-heading">Cần trợ giúp ?</h2>
                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                        <div class="text">
                                            <p>DHNT.Football@gmail.com</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                        <div class="text">
                                            <p>+905-692-30</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->

                                    <div class="c-list">
                                        <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                        <div class="text">
                                            <p>Số 2 Nguyễn Đình Chiểu, Vĩnh Thọ, Thành phố Nha Trang, Khánh Hòa 650000.</p>
                                        </div>
                                    </div>
                                    <!-- end c-list -->
                                </div>
                                <!-- end side-bar-block -->
                            </div>
                            <!-- end columns -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="side-bar-block follow-us">
                                    <h2 class="side-bar-heading">Follow Us</h2>
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                    </ul>
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
        <!-- end thank-you -->
    </section>
    <!-- end innerpage-wrapper -->

@include('layouts.count')
@endsection
