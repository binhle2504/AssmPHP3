<div class="" style="position: relative;">
    <header class="header_wrap fixed-top header_with_topbar">
        <div class="top-header" style="z-index: 1;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <!-- <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>0398185124</span></li>
                        </ul> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <ul class="header_list">
                                @auth
                                @if (auth()->user()->role == 1)
                                <li><a href="{{ route('admin.home') }}"><i class="ti-settings"></i><span
                                            class="text-black">Quản Lý</span></a>
                                </li>
                                @endif
                                <li><a href=" {{ route('logout') }}"><i class="ti-shift-right"></i></a>
                                </li>
                                @else
                                <li><a href="{{ route('login') }}"><i class="ti-id-badge"></i><span>Đăng nhập</span></a>
                                </li>
                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="z-index: 9" class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img style="width:14%;" class="logo_light"
                            src="{{ asset('assets/clients/images/logonike.png') }}" alt="logo" />
                        <!-- <img class="logo_light" src="{{ asset('assets/clients/images/logonike.png') }}" alt="logo" /> -->
                        <img style="width:14%;" class="logo_dark"
                            src="{{ asset('assets/clients/images/logonike.png') }}" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a class="nav-link nav_item" href="{{ route('home') }}">Trang Chủ</a></li>
                            {!! Helper::category() !!}
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <!-- <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li> -->
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{route('cart')}}"><i
                                    class="ti-shopping-cart-full"><span class="cart_count amount"
                                        id="cart-item">0</span></i></a>
                        </li>
                        <!--   chỗ này thông báo số lượng trong giỏ hàng , cho vào sau thẻ a bên trên  -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>