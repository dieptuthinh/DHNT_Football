@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách các phiếu sân 
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">              
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          {{-- <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Search</button>
          </span> --}}
        </div>
      </div>
    </div>
    <div class="table-responsive">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Loại Sân</th>
            <th>Sân</th>
            <th>Người đặt</th>
            <th>Ngày đặt</th>      
            <th>Bắt đầu</th>      
            <th>Kết thúc</th>      
            <th>Tình trạng</th>      
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($booking_details_info as $booking_details_list)
          <tr>
            <td>{{$booking_details_list->field_type_name}}</td>
            <td>{{$booking_details_list->field_name}}</td>
            <td>{{$booking_details_list->name}}</td>
            <td>{{$booking_details_list->booking_details_date}}</td>
            <td>{{$booking_details_list->booking_details_start}}</td>
            <td>{{$booking_details_list->booking_details_end}}</td>

            {{-- <td>
                @if($booking_details_list->booking_details_status==1)
                    <span class="text-primary">Duyệt đặt sân</span>
                @else
                    <span class="wait-for-match">Chưa được duyệt</span>

                @endif  
            </td> --}}



            <td>
              <?php
                if ($booking_details_list->booking_details_status==1){
                ?>
                <a href="{{URL::to('/waiting-for-booking/'.$booking_details_list->booking_details_id)}}"><span style="font-size: 18px" class="fa fa-thumbs-up text-primary">Duyệt phiếu đặt sân</span></a>
                <?php  
                }else{  
                ?>              
                <a href="{{URL::to('/accept-booking/'.$booking_details_list->booking_details_id)}}"><span style="font-size: 18px" class="fa fa-thumbs-down wait-for-match">Đang chờ duyệt</span></a>
                <?php
                }  
                ?>
            </td>
           
            <td>
              {{-- <a href="{{URL::to('/edit-team/'.$booking_details_list->booking_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> --}}
              <a onclick="return confirm('Bạn có chắc là muốn xóa phiếu đặt sân này ko?')" href="{{URL::to('/delete-booking-card/'.$booking_details_list->booking_details_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {!!$booking_details_info->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
