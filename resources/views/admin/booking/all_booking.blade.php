@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách sân đã đặt
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
            <th>Băt đầu</th>      
            <th>Kết thúc</th>      
            <th>Thanh toán</th>      
            <th>Tổng tiền</th>      
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($booking_info as $booking_list)
          <tr>
            <td>{{$booking_list->field_type_name}}</td>
            <td>{{$booking_list->field_name}}</td>
            <td>{{$booking_list->name}}</td>
            <td>{{$booking_list->booking_start}}</td>
            <td>{{$booking_list->booking_end}}</td>
            <td>
                @if($booking_list->booking_status==1)
                    <span class="text-primary">Đã thanh toán</span>
                @else
                    <span class="wait-for-match">Chưa thanh toán</span>

                @endif  
            </td>
            <td>{{number_format($booking_list->booking_total).' '.'VND'}}</td>


            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($booking_info_info->booking_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-admin-product/'.$booking_list->booking_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-admin-product/'.$booking_list->booking_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              {{-- <a href="{{URL::to('/edit-team/'.$booking_list->booking_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> --}}
              <a onclick="return confirm('Bạn có chắc là muốn xóa đặt sân này ko?')" href="{{URL::to('/delete-booking/'.$booking_list->booking_id)}}" class="active styling-edit" ui-toggle-class="">
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
             {!!$booking_info->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
