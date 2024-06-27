<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color: black;">
    <!-- Brand Logo -->
    <a class="navbar-brand" href="{{ route('home') }}">
        <img style="width:80%;" class="logo_light" src="{{ asset('assets/clients/images/logonike2.png') }}"
            alt="logo" />
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.home') }}" class="d-block">{{ Auth::user()->username }}</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Danh mục
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banner') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Ảnh
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.invoice') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Hóa đơn
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link">
                        <i class=""></i>
                        <p>
                            Tài Khoản
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>