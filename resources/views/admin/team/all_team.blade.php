@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách đội bóng
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
            <th>Tên đội bóng</th>
            <th>Địa chỉ</th>
            <th>Trình độ</th>      
            <th>Giới thiệu</th>      
            <th>Logo đội bóng</th>      
            <th>Đội trưởng</th>      
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_team as $team_list)
          <tr>
            <td>{{$team_list->team_name}}</td>
            <td>{{$team_list->team_address}}</td>
            <td>
                @if($team_list->team_level==0)
                    Mới chơi
                @endif
                @if($team_list->team_level==1)
                    Trung bình
                @endif      
                @if($team_list->team_level==2)
                    Trung bình yếu
                @endif  
                @if($team_list->team_level==3)
                    Trung bình khá
                @endif  
                @if($team_list->team_level==4)
                    Khá
                @endif  
                @if($team_list->team_level==5)
                    Khá mạnh
                @endif 
            </td>
            <td>{{$team_list->team_desc}}</td>
            <td><img src="{{asset('public/storage/'.$team_list->team_logo)}}" height="100" weight="100" alt="flight-img" /></td>
            <td>{{$team_list->name}}</td>



            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($all_team_info->team_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-admin-product/'.$team_list->team_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-admin-product/'.$team_list->team_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              {{-- <a href="{{URL::to('/edit-team/'.$team_list->team_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> --}}
              <a onclick="return confirm('Bạn có chắc là muốn xóa người này ko?')" href="{{URL::to('/delete-team/'.$team_list->team_id)}}" class="active styling-edit" ui-toggle-class="">
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
             {!!$all_team->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
