@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách các lời mời thi đấu
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
            <th>Thời gian </th>
            <th>trình độ</th>
            <th>Mô tả</th>
            <th>Tình trạng</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_match as $match_list)
          <tr>
            <td>{{$match_list->team_name}}</td>
            <td>{{$match_list->match_time}}</td>
            <td>
                @if($match_list->match_team_level==0)
                    Mới chơi
                @endif
                @if($match_list->match_team_level==1)
                    Trung bình
                @endif      
                @if($match_list->match_team_level==2)
                    Trung bình yếu
                @endif  
                @if($match_list->match_team_level==3)
                    Trung bình khá
                @endif  
                @if($match_list->match_team_level==4)
                    Khá
                @endif  
                @if($match_list->match_team_level==5)
                    Khá mạnh
                @endif 
            </td>
            <td>{{$match_list->match_desc}}</td>
            <td>
                @if($match_list->match_status==1)
                    <span class="text-primary">Đã có kèo</span>
                @else
                    <span class="wait-for-match">Đang chờ</span>

                @endif  
            </td>


            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($all_match_info->match_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-admin-product/'.$match_list->match_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-admin-product/'.$match_list->match_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              {{-- <a href="{{URL::to('/edit-match/'.$match_list->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> --}}
              <a onclick="return confirm('Bạn có chắc là muốn xóa lời mời này ko?')" href="{{URL::to('/delete-match/'.$match_list->match_id)}}" class="active styling-edit" ui-toggle-class="">
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
             {!!$all_match->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
