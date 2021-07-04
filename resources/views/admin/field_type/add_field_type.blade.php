@extends('layouts.admin_layout')
@section('admin_content')

{{-- <div class="container">
    <div class="row justify-content-center">
        @include('admin.nav')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Thêm loại sân</div>
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
                <div class="card-body">
                    <form method="POST" action="{{URL::to('/insert-field-type')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="field_type_name" class="col-md-2 col-form-label text-md-right">Tên loại sân</label>

                            <div class="col-md-10">
                                <input id="field_type_name" type="text" class="form-control @error('field_type_name') is-invalid @enderror" name="field_type_name" value="{{ old('field_type_name') }}" required autocomplete="field_type_name" autofocus>

                                @error('field_type_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_desc" class="col-md-2 col-form-label text-md-right">Mô tả loại sân</label>

                            <div class="col-md-10">
                                <textarea id="field_type_desc" type="text" class="form-control ckeditor"  name="field_type_desc"></textarea>

                                @error('field_type_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_allas" class="col-md-2 col-form-label text-md-right">Allas Loại sân </label>

                            <div class="col-md-10">
                                <input id="field_type_allas" type="text" class="form-control @error('field_type_allas') is-invalid @enderror" name="field_type_allas" required autocomplete="new-field_type_allas">

                                @error('field_type_allas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_status" class="col-md-2 col-form-label text-md-right">Status Loại sân </label>

                            <div class="col-md-10">
                               <select class="form-control" name="field_type_status">
                                <option value="1">Hiện </option>
                                <option value="0">Ẩn </option>
                               </select>

                                @error('field_type_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Thêm loại sân
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Danh sách loại sân</div>   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Tên loại sân</th>
                            <th>Mô tả loại sân</th>
                            <th>Alias</th>
                            <th>Tình trạng</th>
                            <th>Quản lý</th>
                        </tr>
                    @foreach($field_type as $field_type_list)
                        <tr>
                            <th>{{$field_type_list->field_type_name}}</th>
                            <th>{{$field_type_list->field_type_desc}}</th>
                            <th>{{$field_type_list->field_type_allas}}</th>
                            <th>
                                @if($field_type_list->field_type_status==1)
                                    <span class="text-primary">Hoạt động</span>
                                @else
                                    <span class="text-danger">Không hoạt động</span>

                                @endif
                            </th>
                            <th><a href="{{URL::to('/edit-field-type/'.$field_type_list->field_type_id)}}">Edit</a> | <a href="{{URL::to('/delete-field-type/'.$field_type_list->field_type_id)}}">Delete</a> </th>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>

            <br><br>
            <span>{!!$field_type->render()!!}</span>
        </div>
        
    </div>
</div> --}}

{{-- --------------------- --}}
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm loại sân
                </header>
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
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/insert-field-type')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="field_type_name">Tên loại sân</label>
                            <input id="field_type_name" type="text" class="form-control @error('field_type_name') is-invalid @enderror" name="field_type_name" value="{{ old('field_type_name') }}" required autocomplete="field_type_name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="field_type_desc">Mô tả loại sân</label>
                            <textarea id="field_type_desc" type="text" style="resize: none" class="form-control ckeditor"  name="field_type_desc"></textarea>    
                        </div>
                        <div class="form-group">
                            <label for="field_type_status">Tình trạng Loại sân </label>
                                <select class="form-control" name="field_type_status">
                                    <option value="1">Hiện </option>
                                    <option value="0">Ẩn </option>
                               </select>
                        </div>                    
                        <button type="submit" name="add_field_type" class="btn btn-info">Thêm loại sân</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection