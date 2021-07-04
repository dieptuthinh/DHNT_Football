@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tài khoản user
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
            <th>Tên User</th>
            <th>Ảnh đại diện</th>
            <th>Phone</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_user as $user_list)
          <tr>
            <td>{{$user_list->name}}</td>
            @if ($user_list->user_phone and $user_list->user_image)
                <td><img src="{{asset('public/storage/'.$user_list->user_image)}}" height="100" weight="100"></td>
                <td>{{$user_list->user_phone}}</td>                
            @else
                <td><img src="{{asset('public/frontend/images/user.png')}}" alt="" height="100" weight="100"></td>
                <td>User chưa nhập số điện thoại</td>
            @endif
            <td>{{$user_list->email}}</td>

            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($all_user_info->user_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-admin-product/'.$user_list->user_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-admin-product/'.$user_list->user_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              <a href="{{URL::to('/edit-user/'.$user_list->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa người này ko?')" href="{{URL::to('/delete-user/'.$user_list->id)}}" class="active styling-edit" ui-toggle-class="">
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
             {!!$all_user->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
