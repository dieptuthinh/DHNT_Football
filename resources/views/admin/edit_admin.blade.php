@extends('layouts.admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Admin
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
                        <form role="form" action="{{URL::to('/update-admin/'.$admin_edit->admin_id)}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="admin_name">Tên Admin</label>
                            <input id="admin_name" type="text" class="form-control @error('admin_name') is-invalid @enderror" name="admin_name" value="{{ $admin_edit->admin_name }}" required autocomplete="admin_name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="admin_email">Email</label>
                            <input id="admin_email" type="email" class="form-control @error('admin_email') is-invalid @enderror" name="admin_email" value="{{ $admin_edit->admin_email }}" required autocomplete="new_admin_email">
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Password</label>
                            <input id="admin_password" type="text" class="form-control @error('admin_password') is-invalid @enderror" name="admin_password"  required autocomplete="admin_password">
                        </div>  
                        <div class="form-group">
                            <label for="admin_phone">Phone</label>
                            <input id="admin_phone" type="text" class="form-control @error('admin_phone') is-invalid @enderror" name="admin_phone" value="{{ $admin_edit->admin_phone }}" required autocomplete="admin_phone">
                        </div>                   
                        <button type="submit" name="update_admin" class="btn btn-info">Cập nhật Admin</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection
