@extends('layouts.admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm User
                </header>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/insert-user')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Tên User</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="new_email">
                        </div>

                        {{-- <div class="form-group">
                            <label for="user_image">Hình ảnh</label>
                            <input id="user_image" type="file" class="form-control-file @error('user_image') is-invalid @enderror" name="user_image" required autocomplete="new_user_image">
                        </div> --}}

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="password">
                        </div>  
                        {{-- <div class="form-group">
                            <label for="user_phone">Số điện thoại</label>
                            <input id="user_phone" type="text" class="form-control @error('user_phone') is-invalid @enderror" name="user_phone" required autocomplete="user_phone">
                        </div>                    --}}
                        <button type="submit" name="add_User" class="btn btn-info">Thêm User</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection
