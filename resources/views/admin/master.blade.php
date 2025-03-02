<!doctype html>
<html lang="en">

@include('admin.layout.head')

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ont-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="لاراول لرن" class="letters-loading" style="color:#ff2d20;">
                        لاراول لرن
                     </span>
            </div>
        </div>

        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" src="{{asset('back/img/core-img/logo.png')}}" alt="لوگوی دسک تاپ"> <img class="small-logo" src="{{asset('back/img/core-img/small-logo.png')}}" alt="آرم موبایل"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->

                @include('admin.layout.sidebar')
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        @include('admin.layout.header')

        <!-- Main Content Area -->
        <div class="main-content">
            <nav aria-label="خرده نان" class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item"><a href="#">کتابخانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">داده ها</li>
                </ol>
            </nav>
            @yield('content')
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

@include('admin.layout.scripts')
</body>
</html>
