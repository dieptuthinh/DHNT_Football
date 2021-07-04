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
         DOANH THU
        </div>
        <div class="row w3-res-tb">
        <div class="col-sm-12 ">  

            <input type="text" id="datepicker"/><br/>
            <br/>
            <span id='tieude'></span><br/>
            <br />
            <div id='ds_datsan'></div><br />

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
	
	$('#datepicker').daterangepicker({
	
	}, function(start, end, label) {
		g_booking_start = start.format("YYYY-MM-DD");
		g_booking_end = end.format("YYYY-MM-DD");
		$("#tieude").html("<b>Doanh thu từ ngày " + g_booking_start + " đến " + g_booking_end + "</b>");
		xemDoanhThu(g_booking_start, g_booking_end);
	});
});
</script>

@endsection