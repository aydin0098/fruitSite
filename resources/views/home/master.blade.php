<html dir="rtl" lang="fa-IR">
@include('home.layout.head')

<body class="rtl">
<div class="main_wrap">
    <div class="of-site-mask"></div>

    <div class="off-canvas-wrap ">
        <div class="close-off-canvas-wrap">
            <a href="#" id="of-close-off-canvas">
                <svg class="mt-3" width="12" height="12" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 3L18.9706 19.9706" stroke="black" stroke-width="4" stroke-linecap="round"/>
                    <path d="M19.0874 2.47266L2.11684 19.4432" stroke="black" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </a>
        </div>

        <div class="off-canvas-inner">
            <div id="of-mobile-nav" class="mobile-menu-wrap">
                <div class="d-block text-center my-3">
                    <a href="Index.html" class="current py-2">
                        <img src="{{asset('front/Img/logo.svg')}}" />
                    </a>
                </div>
                <ul class="mobile-menu">
                    <li class="current-menu-item">
                        <a href="Index.html">صفحه اصلی</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="shop.html">محصولات</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="gallery.html">گالری</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="blog.html">وبلاگ</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="about-us.html">درباره ما</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="contact-us.html">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @include('home.layout.header')

    <div class="clearfix"></div>

    <section class="container-fluid text-lg-right text-center mt-4 p-3 mb-5">
        @yield('content')
    </section>

@include('home.layout.script')


</body>
</html>
