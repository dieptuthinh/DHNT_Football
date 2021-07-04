@extends('layouts.admin_layout')

@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách sân bóng
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
            <th>Tên sân</th>
            <th>Tên loại sân</th>
            <th>Tình trạng</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_field as $field_list)
          <tr>
            <td>{{$field_list->field_name}}</td>
            {{-- <td>{{number_format($field_list->field_price).' '.'VND'}}</td> --}}
            <th>{{$field_list->field_type['field_type_name']}}</th>
            <td>
                @if($field_list->field_status==1)
                    <span class="text-primary">Hoạt động</span>
                @else
                    <span class="text-danger">Không hoạt động</span>

                @endif
            </td>

            {{-- <td>
                <span class="text-ellipsis">
                <?php
                if($all_field_info->field_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-field-product/'.$field_list->field_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                    <?php
                    }else{
                    ?>  
                    <a href="{{URL::to('/active-field-product/'.$field_list->field_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }
                ?>
                </span>
            </td> --}}
           
            <td>
              <a href="{{URL::to('/edit-field/'.$field_list->field_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa sân này ko?')" href="{{URL::to('/delete-field/'.$field_list->field_id)}}" class="active styling-edit" ui-toggle-class="">
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
             {!!$all_field->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
