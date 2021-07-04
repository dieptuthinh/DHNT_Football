@extends('layouts.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tài khoản admin
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
            <th>Tên Admin</th>
            <th>Email</th>
            <th>Phone</th>      
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_admin as $admin_list)
          <tr>
            <td>{{$admin_list->admin_name}}</td>
            <td>{{$admin_list->admin_email}}</td>
            <td>{{$admin_list->admin_phone}}</td>

            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($all_admin_info->admin_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-admin-product/'.$admin_list->admin_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-admin-product/'.$admin_list->admin_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              <a href="{{URL::to('/edit-admin/'.$admin_list->admin_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa người này ko?')" href="{{URL::to('/delete-admin/'.$admin_list->admin_id)}}" class="active styling-edit" ui-toggle-class="">
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
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {!!$all_admin->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>



@endsection
