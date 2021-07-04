@extends('layouts.admin_layout')

@section('admin_content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật loại sân</div>
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
                    <form method="POST" action="{{URL::to('/update-field-type/'.$field_type_edit->field_type_id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="field_type_name" class="col-md-4 col-form-label text-md-right">Tên loại sân</label>

                            <div class="col-md-6">
                                <input id="field_type_name" type="text" class="form-control @error('field_type_name') is-invalid @enderror" name="field_type_name" value="{{$field_type_edit->field_type_name}}" required autocomplete="field_type_name" autofocus>

                                @error('field_type_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_desc" class="col-md-4 col-form-label text-md-right">Mô tả loại sân</label>

                            <div class="col-md-6">
                                <input id="field_type_desc" type="text" class="form-control @error('field_type_desc') is-invalid @enderror" name="field_type_desc" value="{{$field_type_edit->field_type_desc}}" required autocomplete="field_type_desc">

                                @error('field_type_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_allas" class="col-md-4 col-form-label text-md-right">Allas Loại sân </label>

                            <div class="col-md-6">
                                <input id="field_type_allas" type="text" class="form-control @error('field_type_allas') is-invalid @enderror" name="field_type_allas" value="{{$field_type_edit->field_type_allas}}" required autocomplete="new-field_type_allas">

                                @error('field_type_allas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_type_status" class="col-md-4 col-form-label text-md-right">Status Loại sân </label>

                            <div class="col-md-6">
                               <select class="form-control" name="field_type_status">
                               @if ($field_type_edit->field_type_status==1)
                                <option selected value="1">Hiện </option>
                                <option value="0">Ẩn </option>
                                @else
                                <option value="1">Hiện </option>
                                <option selected value="0">Ẩn </option>
                               @endif
                               </select>

                                @error('field_type_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cập nhật loại sân
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

</div> --}}
{{-- ------------------ --}}


<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật loại sân
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
                        <form role="form" action="{{URL::to('/update-field-type/'.$field_type_edit->field_type_id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="field_type_name">Tên loại sân</label>
                            <input id="field_type_name" type="text" class="form-control @error('field_type_name') is-invalid @enderror" name="field_type_name" value="{{$field_type_edit->field_type_name}}" required autocomplete="field_type_name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="field_type_desc" class="col-md-4 col-form-label text-md-right">Mô tả loại sân</label>
                            <textarea style="resize:none;" type="text" rows="5" class="form-control" name="field_type_desc" id="field_type_desc" required>{{$field_type_edit->field_type_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="field_type_status" class="col-md-4 col-form-label text-md-right">Tình trạng Loại sân </label>
                            <select class="form-control" name="field_type_status">
                                @if ($field_type_edit->field_type_status==1)
                                <option selected value="1">Hiện </option>
                                <option value="0">Ẩn </option>
                                @else
                                <option value="1">Hiện </option>
                                <option selected value="0">Ẩn </option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="update_field_type" class="btn btn-info">Cập nhật loại sân</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection