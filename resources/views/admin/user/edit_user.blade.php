@extends('layouts.admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật User
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
                        <form role="form" action="{{URL::to('/update-user/'.$user_edit->id)}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Tên User</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user_edit->name }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user_edit->email }}" required autocomplete="new_email">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Số điện thoại</label>
                            <input id="user_phone" type="text" class="form-control @error('user_phone') is-invalid @enderror" name="user_phone" value="{{ $user_edit->user_phone }}" required autocomplete="user_phone">
                        </div>                   
                        <button type="submit" name="update_User" class="btn btn-info">Cập nhật User</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection
