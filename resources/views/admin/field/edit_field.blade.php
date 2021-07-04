@extends('layouts.admin_layout')

@section('admin_content')
{{-- ------------------ --}}

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sân bóng
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
                        <form method="POST" action="{{URL::to('/update-field/'.$field_edit->field_id)}}">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="field_name">Tên sân</label>
                                <input id="field_name" type="text" class="form-control @error('field_name') is-invalid @enderror" name="field_name" value="{{$field_edit->field_name}}" required autocomplete="field_name" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="field_status">Tình trạng sân </label>
                                <select class="form-control" name="field_status">
                                @if ($field_edit->field_status==1)
                                    <option selected value="1">Trống </option>
                                    <option value="0">Đang sử dụng</option>
                                    @else
                                    <option value="1">Trống </option>
                                    <option selected value="0">Đang sử dụng</option>
                                @endif
                                </select>
                            </div> 
                            <div class="form-group">
                                <select class="form-control" name="field_type_id">
                                    @foreach ($field_type as $ft)
                                            <option value="{{$ft->field_type_id}}">{{$ft->field_type_name}}</option>
                                    @endforeach
                                </select>
                            </div>                   
                            <button type="submit" name="add_field" class="btn btn-info">Cập nhật sân bóng</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>

@endsection