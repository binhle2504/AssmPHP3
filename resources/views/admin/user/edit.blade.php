@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa tài khoản</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sửa tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('admin.postEditUser') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên</label>
                                        <input type="text" class="form-control" placeholder="Họ và tên" name="name"
                                        value="{{old('name',$data->name)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên người dùng</label>
                                        <input type="text" class="form-control"
                                            placeholder="Tên người dùng" name="username" value="{{old('username',$data->username)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="text" class="form-control"
                                            placeholder="Email" name="email" value="{{old('email',$data->email)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại</label>
                                        <input type="text" class="form-control"
                                            placeholder="Số điện thoại" name="phone" value="{{old('phone',$data->phone)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="text" class="form-control"
                                            placeholder="Mật khẩu" name="password" value="{{old('password',$data->password)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chức vụ</label>
                                        <select name="role" class="form-control">
                                            <option value="0" {{ $data->role == 0 ? 'selected' : '' }}> Người dùng</option>
                                            <option value="1" {{ $data->role == 1 ? 'selected' : '' }}> Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Khoá tài khoản</label>
                                        <select name="banned" class="form-control">
                                            <option value="0" {{ $data->banned == 0 ? 'selected' : '' }}> Mở khoá</option>
                                            <option value="1" {{ $data->banned == 1 ? 'selected' : '' }}> Khoá</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Sửa tài khoản</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
