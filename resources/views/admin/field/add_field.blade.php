@extends('layouts.admin_layout')

@section('admin_content')
{{-- <div class="container">
    <div class="row justify-content-center">
        @include('admin.nav')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm sân</div>
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
                    <form method="POST" action="{{URL::to('/insert-field')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="field_name" class="col-md-4 col-form-label text-md-right">Tên sân</label>

                            <div class="col-md-6">
                                <input id="field_name" type="text" class="form-control @error('field_name') is-invalid @enderror" name="field_name" value="{{ old('field_name') }}" required autocomplete="field_name" autofocus>

                                @error('field_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_price" class="col-md-4 col-form-label text-md-right">Giá tiền</label>

                            <div class="col-md-6">
                                <input id="field_price" type="text" class="form-control @error('field_price') is-invalid @enderror" name="field_price" value="{{ old('field_price') }}" required autocomplete="field_price">

                                @error('field_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_allas" class="col-md-4 col-form-label text-md-right">Allas sân </label>

                            <div class="col-md-6">
                                <input id="field_allas" type="text" class="form-control @error('field_allas') is-invalid @enderror" name="field_allas" required autocomplete="new-field_allas">

                                @error('field_allas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_status" class="col-md-4 col-form-label text-md-right">Tình trạng sân </label>

                            <div class="col-md-6">
                               <select class="form-control" name="field_status">
                                <option value="1">Trống</option>
                                <option value="0">Đang sử dụng</option>
                               </select>

                                @error('field_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_id" class="col-md-4 col-form-label text-md-right">Tên loại sân </label>

                            <div class="col-md-6">
                               <select class="form-control" name="field_id">
                                <option value="0">Chọn loại sân</option>
                               @foreach ($field_type as $ft)
                                    <option value="{{$ft->field_type_id}}">{{$ft->field_type_name}}</option>
                               @endforeach
                               </select>

                                @error('field_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Thêm sân
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
                <div class="card-header">Danh sách sân</div>   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Tên sân</th>
                            <th>Giá sân</th>
                            <th>Tên loại sân</th>
                            <th>Alias</th>
                            <th>Tình trạng</th>
                            <th>Quản lý</th>
                        </tr>
                    @foreach($field as $field_list)
                        <tr>
                            <th>{{$field_list->field_name}}</th>
                            <th>{{$field_list->field_price}}</th>
                            <th>{{$field_list->field['field_name']}}</th>
                            <th>{{$field_list->field_allas}}</th>
                            <th>
                                @if($field_list->field_status==1)
                                    <span class="text-primary">Trống</span>
                                @else
                                    <span class="text-danger">Đang sử dụng</span>

                                @endif
                            </th>
                            <th><a href="{{URL::to('/edit-field/'.$field_list->field_id)}}">Edit</a> | <a href="{{URL::to('/delete-field/'.$field_list->field_id)}}">Delete</a> </th>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>

            <br><br>
            <span>{!!$field->render()!!}</span>
        </div>
        
    </div>
</div> --}}


{{-- --------------------- --}}
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sân bóng
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
                        <form method="POST" action="{{URL::to('/insert-field')}}">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="field_name">Tên sân</label>
                                <input id="field_name" type="text" class="form-control @error('field_name') is-invalid @enderror" name="field_name" value="{{ old('field_name') }}" required autocomplete="field_name" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="field_status">Status Loại sân </label>
                                    <select class="form-control" name="field_status">
                                        <option value="1">Hiện </option>
                                        <option value="0">Ẩn </option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <select class="form-control" name="field_type_id">
                                    @foreach ($add_field_type as $ft)
                                            <option value="{{$ft->field_type_id}}">{{$ft->field_type_name}}</option>
                                    @endforeach
                                </select>
                            </div>                   
                            <button type="submit" name="add_field" class="btn btn-info">Thêm sân</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection