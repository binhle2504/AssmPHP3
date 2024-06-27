@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h2>Quản Lý</h2>

            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thống kê</li>
                </ol>
            </div> -->
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <p>Số Lượng :</p>
                        <h3>{{$product}}</h3>

                        <p>Sản phẩm</p>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box  bg-danger">
                    <div class="inner">
                        <p>Số Lượng :</p>
                        <h3>{{$invoice}}</h3>

                        <p>Hóa đơn</p>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <p>Số Lượng :</p>
                        <h3>{{Auth::user()->count()}}</h3>

                        <p>Người dùng</p>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <p>Số Lượng :</p>
                        <h3>{{$invoice_1}}</h3>

                        <p>Hóa đơn đã thanh toán</p>
                    </div>
                    <div class="icon">
                        <i class=""></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection