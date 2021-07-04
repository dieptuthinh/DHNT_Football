@extends('layouts.admin_layout')
@section('admin_content')
    <!-- bang dat san -->
    <script src="{{asset('public/frontend/js/jquery-3.4.1.js')}}"></script>

    <!-- Time table -->
    <link href="{{asset('public/frontend/time_table/TimeTable.css')}}" rel="stylesheet">


    <!-- date picker -->
    <link href="{{asset('public/frontend/date_picker/daterangepicker.css')}}" rel="stylesheet">

    <!-- toast (nofication) -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/toast/jquery.toast.min.css')}}" />

    <!-- chosen  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/chosen/chosen.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/handmadebackend.css')}}" />


    <div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
         Bảng đặt sân
        </div>
        <div class=" w3-res-tb"> 

            <b>CHỌN NGÀY: </b>
            <input type="text" id="datepicker" /><br/>
            <br />
            <b>TÌNH TRẠNG ĐẶT SÂN NGÀY <span id='tieudetime'></span></b><br />
            <br />
            <div id="time_table"></div> 
            <br />
            <br />
            <b>DANH SÁCH ĐẶT SÂN NGÀY <span id='tieudeds'></span></b><br />
            <br />
            <div id='ds_datsan'></div><br />



            <div id='grayscreen'></div>
            <div id='formDatSan'>
                <b style='font-size: 18px;'>ĐẶT SÂN</b><br />
                <br />
                <table>
                    <tr>
                        <td>Sân:</td>
                        <td><span id='booking_fieldname' style='font-weight:bold;color:red;'></span></td>
                    </tr>
                    <tr>
                        <td>Khách hàng:</td>
                        <td><select id='booking_users' class='chosen'></select></td>
                    </tr>
                    <tr>
                        <td>Ngày đặt:</td>
                        <td><b><span id='datsan_ngaydat'></span></b></td>
                    </tr>
                    <tr>
                        <td>Bắt đầu:</td>
                        <td>
                            Giờ:
                            <select id="datsan_batdau_gio">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                            </select> 
                            Phút:
                            <select id="datsan_batdau_phut">
                                <option value="0">00</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kết thúc:</td>
                        <td>
                            Giờ:
                            <select id='datsan_ketthuc_gio'>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                            </select> 
                            Phút:
                            <select id="datsan_ketthuc_phut">
                                <option value="0">00</option>
                                <option value="15" selected>15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng thời gian (phút):</td>
                        <td><span id='datsan_phut'></span></td>
                    </tr>
                    <tr>
                        <td>Đơn giá (/phút):</td>
                        <td><input type='text' id='datsan_booking_price' size='5' value='3000' />đ</td>
                    </tr>
                    <tr>
                        <td>Tổng tiền:</td>
                        <td><span id='datsan_tongtien' style='color:red;font-weight:bold;'>0đ</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br />
                            <button id='datsan_ok'>Đồng ý</button>
                            <button id='datsan_cancel'>Hủy</button>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    </div>

    <!-- Time table -->
    <script src="{{asset('public/frontend/time_table/createjs.min.js')}}"></script>
    <script src="{{asset('public/frontend/time_table/TimeTable.js')}}"></script>
    <script src="{{asset('public/frontend/date_picker/moment.min.js')}}"></script>
    <script src="{{asset('public/frontend/date_picker/daterangepicker.min.js')}}"></script>
    <script src="{{asset('public/frontend/toast/jquery.toast.min.js')}}"></script>
    <script src="{{asset('public/frontend/chosen/chosen.jquery.js')}}"></script>

    <script src="{{asset('public/frontend/time_table/common.js')}}"></script>
    <script>
        $(document).ready(function() {

            xemDsDatSan(getToday());

            $("#datepicker").daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 2019,
                maxYear: parseInt(moment().format('YYYY'), 10)
            }, function(start, end, label) {
                xemDsDatSan(start.format("YYYY-MM-DD"));
            });
            // hiện và chọn ngày tháng

            function taoDatSan(user_id, field_id, booking_start, booking_end, booking_price,booking_total) {
                $.ajax({
                    url: "/BongDa/api/taodatsan.php",
                    type: "POST",
                    cache: false,
                    data: {
                        user_id: user_id,
                        field_id: field_id,
                        booking_start: booking_start,
                        booking_end: booking_end,
                        booking_price: booking_price,
                        booking_total: booking_total

                    },
                    success: function(msg) {
                        if (msg.includes("trùng")) {
                            thongbaoloi("Không thể tạo đặt sân", msg);
                        } else {
                            thongbaotot(msg);
                        }
                        xemDsDatSan(getCurrentFormattedDate());
                    },
                    error: function() {
                        thongbaoloi("Lỗi hệ thống!!");
                    }
                });
            }

            $("#datsan_ok").click(function() {
                // insert into database
                var user_id = $("#booking_users").val();
                var field_id = $("#booking_fieldname").attr("field_id");
                var ngay_dat = $("#datsan_ngaydat").text();
                var booking_start_gio = $("#datsan_batdau_gio").val();
                var booking_start_phut = $("#datsan_batdau_phut").val();
                var booking_end_gio = $("#datsan_ketthuc_gio").val();
                var booking_end_phut = $("#datsan_ketthuc_phut").val();
                var booking_start = ngay_dat + " " + booking_start_gio + ":" + booking_start_phut + ":" + "00";
                var booking_end = ngay_dat + " " + booking_end_gio + ":" + booking_end_phut + ":" + "00";
                if ($("#datsan_booking_price").val().trim() == "") {
                    $("#datsan_booking_price").val("0");
                }
                var booking_price = $("#datsan_booking_price").val();
                if (parseInt(booking_price) < 3000) {
                    thongbaoloi("Đơn giá không được nhỏ hơn 3000đ/phút!!!");
                    return;
                }
                var batdau = parseFloat(booking_start_gio) + parseFloat(booking_start_phut) / 60;
                var ketthuc = parseFloat(booking_end_gio) + parseFloat(booking_end_phut) / 60;
                var phut = (ketthuc - batdau) * 60;
                var booking_total = phut * booking_price;
                taoDatSan(user_id, field_id, booking_start, booking_end, booking_price ,booking_total);
                $("#formDatSan").css("display", "none");
                $("#grayscreen").css("display", "none");
            });

            $("#datsan_cancel").click(function() {
                $("#formDatSan").css("display", "none");
                $("#grayscreen").css("display", "none");
                $("#datsan_them_ten").val("");
                $("#datsan_them_user_phone").val("");
            });
        });
    </script>

@endsection