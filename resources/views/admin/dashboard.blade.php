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
      DANH SÁCH ĐẶT SÂN VÀ DOANH THU
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 ">  
      
        <b>CHỌN NGÀY: </b>
        <input type="text" id="datepicker" /><br/>
        <br />
        <b>DANH SÁCH ĐẶT SÂN NGÀY <span id='tieudeds'></span></b><br />
        <br />
        <div id='ds_datsan'></div><br />
        <br />   
             
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

            $("#datsan_btnthemkh").click(function() {
                var name = $("#datsan_them_ten").val();
                var user_phone = $("#datsan_them_user_phone").val();
                if (kiemtraten(name) && kiemtrauser_phone(user_phone)) {
                    themKhachHang(name, user_phone);
                }
            });

            $("#chbThemKhach").change(function() {
                if ($(this).is(":checked")) {
                    $("#datsan_themkhach").removeClass("disabled");
                } else {
                    $("#datsan_themkhach").addClass("disabled");
                }
            });

            function themKhachHang(name, user_phone) {
                $.ajax({
                    url: "/BongDa/api/dskhachhang.php",
                    type: "POST",
                    cache: false,
                    data: {
                        action: "add",
                        name: name,
                        user_phone: user_phone
                    },
                    success: function(msg) {
                        if (msg.includes("đã tồn tại")) {
                            thongbaoloi(msg);
                        } else {
                            $("#datsan_them_ten").val("");
                            $("#datsan_them_user_phone").val("");
                            getDsKhachHang();
                        }
                    },
                    error: function() {
                        alert("Khong the them khach hang moi!!!");
                    }
                });
            }
        });
    </script>
@endsection