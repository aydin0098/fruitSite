@extends('home.master')
@section('content')

    @include('home.includes.slider')

    <div class="container p-0 my-2">
        <div class="row">

            <div class="col-md-4 p-3">
                <div class="py-4 p-3 d-flex align-items-center justify-content-around algin text-lg-right text-md-center mb-3 service_style category-style radius30">
                    <img src="Img/Asset2501.png">
                    <h3 class="YekanBakhFaNum-Bold fa1-2">غذا و انواع کنسرو</h3>
                    <a href="shop.html">
                        <div class="arrow-box d-flex align-items-center justify-content-center">
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#292D32"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#292D32"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="py-4 p-3 d-flex align-items-center justify-content-around algin text-lg-right text-md-center mb-3 service_style category-style radius30">
                    <img src="Img/Asset2500.png">
                    <h3 class="YekanBakhFaNum-Bold fa1-2">لباس و اکسسوری</h3>
                    <a href="shop.html">
                        <div class="arrow-box d-flex align-items-center justify-content-center">
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#292D32"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#292D32"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="py-4 p-3 d-flex align-items-center justify-content-around algin text-lg-right text-md-center mb-3 service_style category-style radius30">
                    <img src="Img/Asset2502.png">
                    <h3 class="YekanBakhFaNum-Bold fa1-2">تجهیزات و اسباب بازی</h3>
                    <a href="shop.html">
                        <div class="arrow-box d-flex align-items-center justify-content-center">
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#292D32"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#292D32"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>

    <section class="bg-gray pb-4">

        <div class="container p-4 radius20 mt-5">
            <div class="d-flex align-items-center justify-content-between mt-4">
                <h2>محصولات جدید</h2>
                <a class="d-flex align-items-center a-button radius55 py-2 px-4" href="shop.html">
                    <span class="ml-2">همه محصولات</span>
                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#fff"/>
                        <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#fff"/>
                    </svg>

                </a>
            </div>
            <p class="mb-5">
                انواع محصولات باکیفیت برای پت های دوست داشتنی شما
            </p>
            <div class="owl-product owl-carousel">

                <div class="item">
                    <div class="card-body mb-3 text-center">
                        <a href="page-shop.html">
                            <img class="img-fluid" src="Img/product-4.jpg">
                        </a>
                        <div>
                            <h5 class="my-2 YekanBakhFaNum-SemiBold"><a href="page-shop.html">غذای مخصوص سگ</a></h5>
                            <span class="color-orange YekanBakhFaNum-Bold fa18">540.000</span>
                            <span class="color-orange YekanBakhFaNum-Regular fa14">تومان</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <div class="add-to-cart hoverable outlined">
                                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 21.25C15.9665 21.25 16.75 20.4665 16.75 19.5C16.75 18.5335 15.9665 17.75 15 17.75C14.0335 17.75 13.25 18.5335 13.25 19.5C13.25 20.4665 14.0335 21.25 15 21.25Z" fill="#FFAA00"/>
                                            <path d="M7 21.25C7.9665 21.25 8.75 20.4665 8.75 19.5C8.75 18.5335 7.9665 17.75 7 17.75C6.0335 17.75 5.25 18.5335 5.25 19.5C5.25 20.4665 6.0335 21.25 7 21.25Z" fill="#FFAA00"/>
                                            <path d="M3.59 2.69L3.39 5.14C3.35 5.61 3.72 6 4.19 6H19.5C19.92 6 20.27 5.68 20.3 5.26C20.43 3.49 19.08 2.05 17.31 2.05H5.02C4.92 1.61 4.72 1.19 4.41 0.84C3.91 0.31 3.21 0 2.49 0H0.75C0.34 0 0 0.34 0 0.75C0 1.16 0.34 1.5 0.75 1.5H2.49C2.8 1.5 3.09 1.63 3.3 1.85C3.51 2.08 3.61 2.38 3.59 2.69Z" fill="#FFAA00"/>
                                            <path d="M19.2601 7.5H3.92005C3.50005 7.5 3.16005 7.82 3.12005 8.23L2.76005 12.58C2.62005 14.29 3.96005 15.75 5.67005 15.75H16.7901C18.2901 15.75 19.6101 14.52 19.7201 13.02L20.0501 8.35C20.0901 7.89 19.7301 7.5 19.2601 7.5Z" fill="#FFAA00"/>
                                        </svg>

                                        <span class="text-center">افزودن به سبد خرید</span>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card-body mb-3 text-center">
                        <a href="page-shop.html">
                            <img class="img-fluid" src="Img/product-1.jpg">
                        </a>
                        <div>
                            <h5 class="my-2 YekanBakhFaNum-SemiBold"><a href="page-shop.html">غذای خشک تیدا</a></h5>
                            <span class="color-orange YekanBakhFaNum-Bold fa18">800.000</span>
                            <span class="color-orange YekanBakhFaNum-Regular fa14">تومان</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <div class="add-to-cart hoverable outlined">
                                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 21.25C15.9665 21.25 16.75 20.4665 16.75 19.5C16.75 18.5335 15.9665 17.75 15 17.75C14.0335 17.75 13.25 18.5335 13.25 19.5C13.25 20.4665 14.0335 21.25 15 21.25Z" fill="#FFAA00"/>
                                            <path d="M7 21.25C7.9665 21.25 8.75 20.4665 8.75 19.5C8.75 18.5335 7.9665 17.75 7 17.75C6.0335 17.75 5.25 18.5335 5.25 19.5C5.25 20.4665 6.0335 21.25 7 21.25Z" fill="#FFAA00"/>
                                            <path d="M3.59 2.69L3.39 5.14C3.35 5.61 3.72 6 4.19 6H19.5C19.92 6 20.27 5.68 20.3 5.26C20.43 3.49 19.08 2.05 17.31 2.05H5.02C4.92 1.61 4.72 1.19 4.41 0.84C3.91 0.31 3.21 0 2.49 0H0.75C0.34 0 0 0.34 0 0.75C0 1.16 0.34 1.5 0.75 1.5H2.49C2.8 1.5 3.09 1.63 3.3 1.85C3.51 2.08 3.61 2.38 3.59 2.69Z" fill="#FFAA00"/>
                                            <path d="M19.2601 7.5H3.92005C3.50005 7.5 3.16005 7.82 3.12005 8.23L2.76005 12.58C2.62005 14.29 3.96005 15.75 5.67005 15.75H16.7901C18.2901 15.75 19.6101 14.52 19.7201 13.02L20.0501 8.35C20.0901 7.89 19.7301 7.5 19.2601 7.5Z" fill="#FFAA00"/>
                                        </svg>

                                        <span class="text-center">افزودن به سبد خرید</span>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card-body mb-3 text-center">
                        <a href="page-shop.html">
                            <img class="img-fluid" src="Img/product-2.jpg">
                        </a>
                        <div>
                            <h5 class="my-2 YekanBakhFaNum-SemiBold"><a href="page-shop.html">قلاده چرمی رنگی</a></h5>
                            <span class="color-orange YekanBakhFaNum-Bold fa18">250.000</span>
                            <span class="color-orange YekanBakhFaNum-Regular fa14">تومان</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <div class="add-to-cart hoverable outlined">
                                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 21.25C15.9665 21.25 16.75 20.4665 16.75 19.5C16.75 18.5335 15.9665 17.75 15 17.75C14.0335 17.75 13.25 18.5335 13.25 19.5C13.25 20.4665 14.0335 21.25 15 21.25Z" fill="#FFAA00"/>
                                            <path d="M7 21.25C7.9665 21.25 8.75 20.4665 8.75 19.5C8.75 18.5335 7.9665 17.75 7 17.75C6.0335 17.75 5.25 18.5335 5.25 19.5C5.25 20.4665 6.0335 21.25 7 21.25Z" fill="#FFAA00"/>
                                            <path d="M3.59 2.69L3.39 5.14C3.35 5.61 3.72 6 4.19 6H19.5C19.92 6 20.27 5.68 20.3 5.26C20.43 3.49 19.08 2.05 17.31 2.05H5.02C4.92 1.61 4.72 1.19 4.41 0.84C3.91 0.31 3.21 0 2.49 0H0.75C0.34 0 0 0.34 0 0.75C0 1.16 0.34 1.5 0.75 1.5H2.49C2.8 1.5 3.09 1.63 3.3 1.85C3.51 2.08 3.61 2.38 3.59 2.69Z" fill="#FFAA00"/>
                                            <path d="M19.2601 7.5H3.92005C3.50005 7.5 3.16005 7.82 3.12005 8.23L2.76005 12.58C2.62005 14.29 3.96005 15.75 5.67005 15.75H16.7901C18.2901 15.75 19.6101 14.52 19.7201 13.02L20.0501 8.35C20.0901 7.89 19.7301 7.5 19.2601 7.5Z" fill="#FFAA00"/>
                                        </svg>

                                        <span class="text-center">افزودن به سبد خرید</span>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card-body mb-3 text-center">
                        <a href="page-shop.html">
                            <img class="img-fluid" src="Img/product-3.jpg">
                        </a>
                        <div>
                            <h5 class="my-2 YekanBakhFaNum-SemiBold"><a href="page-shop.html">کنسرو تیدا</a></h5>
                            <span class="color-orange YekanBakhFaNum-Bold fa18">100.000</span>
                            <span class="color-orange YekanBakhFaNum-Regular fa14">تومان</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <div class="add-to-cart hoverable outlined">
                                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 21.25C15.9665 21.25 16.75 20.4665 16.75 19.5C16.75 18.5335 15.9665 17.75 15 17.75C14.0335 17.75 13.25 18.5335 13.25 19.5C13.25 20.4665 14.0335 21.25 15 21.25Z" fill="#FFAA00"/>
                                            <path d="M7 21.25C7.9665 21.25 8.75 20.4665 8.75 19.5C8.75 18.5335 7.9665 17.75 7 17.75C6.0335 17.75 5.25 18.5335 5.25 19.5C5.25 20.4665 6.0335 21.25 7 21.25Z" fill="#FFAA00"/>
                                            <path d="M3.59 2.69L3.39 5.14C3.35 5.61 3.72 6 4.19 6H19.5C19.92 6 20.27 5.68 20.3 5.26C20.43 3.49 19.08 2.05 17.31 2.05H5.02C4.92 1.61 4.72 1.19 4.41 0.84C3.91 0.31 3.21 0 2.49 0H0.75C0.34 0 0 0.34 0 0.75C0 1.16 0.34 1.5 0.75 1.5H2.49C2.8 1.5 3.09 1.63 3.3 1.85C3.51 2.08 3.61 2.38 3.59 2.69Z" fill="#FFAA00"/>
                                            <path d="M19.2601 7.5H3.92005C3.50005 7.5 3.16005 7.82 3.12005 8.23L2.76005 12.58C2.62005 14.29 3.96005 15.75 5.67005 15.75H16.7901C18.2901 15.75 19.6101 14.52 19.7201 13.02L20.0501 8.35C20.0901 7.89 19.7301 7.5 19.2601 7.5Z" fill="#FFAA00"/>
                                        </svg>

                                        <span class="text-center">افزودن به سبد خرید</span>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="container-fluid text-lg-right text-center my-4">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-7 pl-lg-5">
                    <h2 class="mt-5">درباره ما</h2>
                    <p class="mb-3">
                        پت هوم،  سرزمین حیوانات خانگی با محصولات باکیفیت برای پت های شما
                    </p>
                    <h3 class="mt-4 color-orange">سرزمین حیوانات خانگی</h3>
                    <p class="my-4">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="Img/profile.jpg" class="img-fluid rounded-circle ml-3 pic55">
                            <div class="py-2">
                                <p class="text-dark bottom_p YekanBakhFaNum-Bold"> امین محمدی</p>
                                <span class="color-orange">مدیریت Pet Home</span>
                            </div>
                        </div>
                        <a class="d-flex align-items-center a-button radius55 py-2 px-4" href="about-us.html">
                            <span class="ml-2">بیشتر بخوانید</span>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#fff"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#fff"/>
                            </svg>
                        </a>
                    </div>


                </div>
                <div class="col-lg-5 d-flex align-items-center mt-5">
                    <img src="Img/about-us.png" class="img-fluid wapp" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-question pb-3">
        <div class="m-3 question-bg">
            <section class="container p-4 radius20 mt-5 mb-2">
                <div class=" text-center mt-3">
                    <h2 class="mt-5">نظرات مشتریان</h2>
                    <p class="mb-3">همواره در تلاشیم تا رضایت شمارو جلب کنیم،شما لایق بهترین ها هستید.</p>

                </div>
                <div class="mx-lg-5">
                    <div>
                        <div id="owl-Story" class="owl-carousel owl-theme text-center py-2 px-md-3">
                            <div class="item">
                                <div class="d-flex card flex-row justify-content-center align-items-center text-right mt-3 p-6 commernt-res">
                                    <img src="Img/profile.jpg" class="img-fluid pic155 p-1 rounded-circle ml-lg-5" />

                                    <div class="m-2">
                                        <p> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند.
                                        </p>

                                        <div class="pt-2">
                                            <p class="text-dark bottom_p">سامان نظری</p>
                                            <span>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.64892 13.7438C3.60065 14.0252 3.71632 14.3096 3.94729 14.4774C4.17825 14.6452 4.48446 14.6673 4.73715 14.5345L8.24523 12.6901L11.7447 14.5341C11.9974 14.6673 12.3038 14.6454 12.5349 14.4776C12.7661 14.3098 12.8819 14.0253 12.8336 13.7438L12.1634 9.83716L15.0056 7.07055C15.2103 6.87133 15.284 6.57314 15.1958 6.30148C15.1076 6.02982 14.8727 5.83185 14.5901 5.79088L10.668 5.22246L8.9138 1.66808C8.78746 1.41208 8.52673 1.25 8.24125 1.25C7.95577 1.25 7.69504 1.41208 7.5687 1.66808L5.81453 5.22246L1.89243 5.79088C1.60975 5.83185 1.37489 6.02982 1.28667 6.30148C1.19845 6.57314 1.27219 6.87133 1.47687 7.07055L4.31907 9.83716L3.64892 13.7438Z" stroke="#FDC736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>

                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.64892 13.7438C3.60065 14.0252 3.71632 14.3096 3.94729 14.4774C4.17825 14.6452 4.48446 14.6673 4.73715 14.5345L8.24523 12.6901L11.7447 14.5341C11.9974 14.6673 12.3038 14.6454 12.5349 14.4776C12.7661 14.3098 12.8819 14.0253 12.8336 13.7438L12.1634 9.83716L15.0056 7.07055C15.2103 6.87133 15.284 6.57314 15.1958 6.30148C15.1076 6.02982 14.8727 5.83185 14.5901 5.79088L10.668 5.22246L8.9138 1.66808C8.78746 1.41208 8.52673 1.25 8.24125 1.25C7.95577 1.25 7.69504 1.41208 7.5687 1.66808L5.81453 5.22246L1.89243 5.79088C1.60975 5.83185 1.37489 6.02982 1.28667 6.30148C1.19845 6.57314 1.27219 6.87133 1.47687 7.07055L4.31907 9.83716L3.64892 13.7438Z" stroke="#FDC736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>


                                          </span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="d-flex card flex-row justify-content-center align-items-center text-right mt-3 p-6 commernt-res">
                                    <img src="Img/profile-1.jpg" class="img-fluid pic155 p-1 rounded-circle ml-lg-5" />

                                    <div class="m-2">
                                        <p> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند.
                                        </p>

                                        <div class="pt-2">
                                            <p class="text-dark bottom_p">سامان نظری</p>
                                            <span>
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M3.64892 13.7438C3.60065 14.0252 3.71632 14.3096 3.94729 14.4774C4.17825 14.6452 4.48446 14.6673 4.73715 14.5345L8.24523 12.6901L11.7447 14.5341C11.9974 14.6673 12.3038 14.6454 12.5349 14.4776C12.7661 14.3098 12.8819 14.0253 12.8336 13.7438L12.1634 9.83716L15.0056 7.07055C15.2103 6.87133 15.284 6.57314 15.1958 6.30148C15.1076 6.02982 14.8727 5.83185 14.5901 5.79088L10.668 5.22246L8.9138 1.66808C8.78746 1.41208 8.52673 1.25 8.24125 1.25C7.95577 1.25 7.69504 1.41208 7.5687 1.66808L5.81453 5.22246L1.89243 5.79088C1.60975 5.83185 1.37489 6.02982 1.28667 6.30148C1.19845 6.57314 1.27219 6.87133 1.47687 7.07055L4.31907 9.83716L3.64892 13.7438Z" stroke="#FDC736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>

                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M3.64892 13.7438C3.60065 14.0252 3.71632 14.3096 3.94729 14.4774C4.17825 14.6452 4.48446 14.6673 4.73715 14.5345L8.24523 12.6901L11.7447 14.5341C11.9974 14.6673 12.3038 14.6454 12.5349 14.4776C12.7661 14.3098 12.8819 14.0253 12.8336 13.7438L12.1634 9.83716L15.0056 7.07055C15.2103 6.87133 15.284 6.57314 15.1958 6.30148C15.1076 6.02982 14.8727 5.83185 14.5901 5.79088L10.668 5.22246L8.9138 1.66808C8.78746 1.41208 8.52673 1.25 8.24125 1.25C7.95577 1.25 7.69504 1.41208 7.5687 1.66808L5.81453 5.22246L1.89243 5.79088C1.60975 5.83185 1.37489 6.02982 1.28667 6.30148C1.19845 6.57314 1.27219 6.87133 1.47687 7.07055L4.31907 9.83716L3.64892 13.7438Z" stroke="#FDC736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>


                                        </span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <h2>وبلاگ ما</h2>
                    <a class="d-flex align-items-center a-button radius55 py-2 px-4" href="blog.html">
                        <span class="ml-2">همه مقالات</span>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#fff"/>
                            <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#fff"/>
                        </svg>

                    </a>
                </div>
                <p class="mb-5">
                    کلی نکات آموزشی درباره نحوه نگهداری از پت های دوست داشتنی شما
                </p>
                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 mb-3 carding-blog overlyblog">
                            <a href="page-blog.html">
                                <img src="Img/beautiful-pet-3.jpg" alt="Card image">
                            </a>
                            <div class="p_relative">
                                <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="page-blog.html">بازی با حیوانات خانگی</a></h5>
                                <div class="d-flex justify-content-center">
                                    <a class="cateblog d-flex justify-content-center align-items-center" href="page-blog.html">

                                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.8039 15.6948C1.24392 9.80154 9.09212 3.185 14.3589 7.05897C16.8651 8.90645 18.684 13.8152 16.0989 16.3071C15.9496 16.4463 15.7836 16.5665 15.6048 16.6651C13.4566 17.8717 11.9063 15.4514 9.87622 15.1685C8.02159 14.9358 5.03555 18.5162 3.8039 15.6948Z" fill="#2F3134"/>
                                            <path d="M2.78714 5.10761C3.04712 5.22186 3.27512 5.39813 3.45114 5.62098C3.62717 5.84382 3.74586 6.10644 3.79681 6.38581C4.18349 8.35144 1.4266 10.4961 0.24507 8.176C-0.610641 6.51112 0.90386 4.25906 2.78714 5.10761Z" fill="#2F3134"/>
                                            <path d="M7.68856 1.26948C7.86855 1.53867 7.97938 1.8481 8.01123 2.17035C8.04308 2.49261 7.99497 2.81774 7.87116 3.11696C7.02977 5.24013 3.06986 5.60174 3.35988 2.65509C3.55322 0.524762 6.38888 -0.703308 7.68856 1.26948Z" fill="#2F3134"/>
                                            <path d="M14.7562 2.40443C14.7276 2.72709 14.6199 3.03771 14.4425 3.30876C14.2651 3.57981 14.0236 3.80292 13.7394 3.95831C11.7559 5.08971 8.44045 2.8842 10.5171 0.775354C12.0065 -0.749889 14.9854 0.0700197 14.7562 2.40443Z" fill="#2F3134"/>
                                            <path d="M19.3928 6.34287C19.2264 6.57342 19.0057 6.75937 18.7503 6.88427C18.4949 7.00918 18.2126 7.06917 17.9285 7.05895C15.9234 7.01241 14.4197 3.86167 16.9367 3.20288C18.752 2.72311 20.6245 4.68516 19.3928 6.34287Z" fill="#2F3134"/>
                                        </svg>
                                        <span class="mr-2 YekanBakhFaNum-SemiBold">بازی و سرگرمی</span>

                                    </a>
                                </div>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
                                <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                    <a class="d-flex justify-content-center align-items-center" href="#">
                                        <span class="ml-2 show-more">ادامه مطلب</span>
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#FFAA00"/>
                                            <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#FFAA00"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 mb-3 carding-blog overlyblog">
                            <a href="page-blog.html">
                                <img src="Img/beautiful-pet-1.jpg" alt="Card image">
                            </a>
                            <div class="p_relative">
                                <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="page-blog.html">تغذیه ی حیوانات خانگی</a></h5>
                                <div class="d-flex justify-content-center">
                                    <a class="cateblog d-flex justify-content-center align-items-center" href="page-blog.html">

                                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.8039 15.6948C1.24392 9.80154 9.09212 3.185 14.3589 7.05897C16.8651 8.90645 18.684 13.8152 16.0989 16.3071C15.9496 16.4463 15.7836 16.5665 15.6048 16.6651C13.4566 17.8717 11.9063 15.4514 9.87622 15.1685C8.02159 14.9358 5.03555 18.5162 3.8039 15.6948Z" fill="#2F3134"/>
                                            <path d="M2.78714 5.10761C3.04712 5.22186 3.27512 5.39813 3.45114 5.62098C3.62717 5.84382 3.74586 6.10644 3.79681 6.38581C4.18349 8.35144 1.4266 10.4961 0.24507 8.176C-0.610641 6.51112 0.90386 4.25906 2.78714 5.10761Z" fill="#2F3134"/>
                                            <path d="M7.68856 1.26948C7.86855 1.53867 7.97938 1.8481 8.01123 2.17035C8.04308 2.49261 7.99497 2.81774 7.87116 3.11696C7.02977 5.24013 3.06986 5.60174 3.35988 2.65509C3.55322 0.524762 6.38888 -0.703308 7.68856 1.26948Z" fill="#2F3134"/>
                                            <path d="M14.7562 2.40443C14.7276 2.72709 14.6199 3.03771 14.4425 3.30876C14.2651 3.57981 14.0236 3.80292 13.7394 3.95831C11.7559 5.08971 8.44045 2.8842 10.5171 0.775354C12.0065 -0.749889 14.9854 0.0700197 14.7562 2.40443Z" fill="#2F3134"/>
                                            <path d="M19.3928 6.34287C19.2264 6.57342 19.0057 6.75937 18.7503 6.88427C18.4949 7.00918 18.2126 7.06917 17.9285 7.05895C15.9234 7.01241 14.4197 3.86167 16.9367 3.20288C18.752 2.72311 20.6245 4.68516 19.3928 6.34287Z" fill="#2F3134"/>
                                        </svg>
                                        <span class="mr-2 YekanBakhFaNum-SemiBold">تغدیه و سلامتی</span>

                                    </a>
                                </div>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
                                <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                    <a class="d-flex justify-content-center align-items-center" href="#">
                                        <span class="ml-2 show-more">ادامه مطلب</span>
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#FFAA00"/>
                                            <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#FFAA00"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 mb-3 carding-blog overlyblog">
                            <a href="page-blog.html">
                                <img src="Img/beautiful-pet-2.jpg" alt="Card image">
                            </a>
                            <div class="p_relative">
                                <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="page-blog.html">رفتار کودک با حیوان خانگی</a></h5>
                                <div class="d-flex justify-content-center">
                                    <a class="cateblog d-flex justify-content-center align-items-center" href="page-blog.html">

                                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.8039 15.6948C1.24392 9.80154 9.09212 3.185 14.3589 7.05897C16.8651 8.90645 18.684 13.8152 16.0989 16.3071C15.9496 16.4463 15.7836 16.5665 15.6048 16.6651C13.4566 17.8717 11.9063 15.4514 9.87622 15.1685C8.02159 14.9358 5.03555 18.5162 3.8039 15.6948Z" fill="#2F3134"/>
                                            <path d="M2.78714 5.10761C3.04712 5.22186 3.27512 5.39813 3.45114 5.62098C3.62717 5.84382 3.74586 6.10644 3.79681 6.38581C4.18349 8.35144 1.4266 10.4961 0.24507 8.176C-0.610641 6.51112 0.90386 4.25906 2.78714 5.10761Z" fill="#2F3134"/>
                                            <path d="M7.68856 1.26948C7.86855 1.53867 7.97938 1.8481 8.01123 2.17035C8.04308 2.49261 7.99497 2.81774 7.87116 3.11696C7.02977 5.24013 3.06986 5.60174 3.35988 2.65509C3.55322 0.524762 6.38888 -0.703308 7.68856 1.26948Z" fill="#2F3134"/>
                                            <path d="M14.7562 2.40443C14.7276 2.72709 14.6199 3.03771 14.4425 3.30876C14.2651 3.57981 14.0236 3.80292 13.7394 3.95831C11.7559 5.08971 8.44045 2.8842 10.5171 0.775354C12.0065 -0.749889 14.9854 0.0700197 14.7562 2.40443Z" fill="#2F3134"/>
                                            <path d="M19.3928 6.34287C19.2264 6.57342 19.0057 6.75937 18.7503 6.88427C18.4949 7.00918 18.2126 7.06917 17.9285 7.05895C15.9234 7.01241 14.4197 3.86167 16.9367 3.20288C18.752 2.72311 20.6245 4.68516 19.3928 6.34287Z" fill="#2F3134"/>
                                        </svg>
                                        <span class="mr-2 YekanBakhFaNum-SemiBold">روانشناسی</span>

                                    </a>
                                </div>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
                                <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                    <a class="d-flex justify-content-center align-items-center" href="#">
                                        <span class="ml-2 show-more">ادامه مطلب</span>
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#FFAA00"/>
                                            <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#FFAA00"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 mb-3 carding-blog overlyblog">
                            <a href="page-blog.html">
                                <img src="Img/beautiful-pet-4.jpg" alt="Card image">
                            </a>
                            <div class="p_relative">
                                <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="page-blog.html">تربیت حیوانات خانگی</a></h5>
                                <div class="d-flex justify-content-center">
                                    <a class="cateblog d-flex justify-content-center align-items-center" href="page-blog.html">

                                        <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.8039 15.6948C1.24392 9.80154 9.09212 3.185 14.3589 7.05897C16.8651 8.90645 18.684 13.8152 16.0989 16.3071C15.9496 16.4463 15.7836 16.5665 15.6048 16.6651C13.4566 17.8717 11.9063 15.4514 9.87622 15.1685C8.02159 14.9358 5.03555 18.5162 3.8039 15.6948Z" fill="#2F3134"/>
                                            <path d="M2.78714 5.10761C3.04712 5.22186 3.27512 5.39813 3.45114 5.62098C3.62717 5.84382 3.74586 6.10644 3.79681 6.38581C4.18349 8.35144 1.4266 10.4961 0.24507 8.176C-0.610641 6.51112 0.90386 4.25906 2.78714 5.10761Z" fill="#2F3134"/>
                                            <path d="M7.68856 1.26948C7.86855 1.53867 7.97938 1.8481 8.01123 2.17035C8.04308 2.49261 7.99497 2.81774 7.87116 3.11696C7.02977 5.24013 3.06986 5.60174 3.35988 2.65509C3.55322 0.524762 6.38888 -0.703308 7.68856 1.26948Z" fill="#2F3134"/>
                                            <path d="M14.7562 2.40443C14.7276 2.72709 14.6199 3.03771 14.4425 3.30876C14.2651 3.57981 14.0236 3.80292 13.7394 3.95831C11.7559 5.08971 8.44045 2.8842 10.5171 0.775354C12.0065 -0.749889 14.9854 0.0700197 14.7562 2.40443Z" fill="#2F3134"/>
                                            <path d="M19.3928 6.34287C19.2264 6.57342 19.0057 6.75937 18.7503 6.88427C18.4949 7.00918 18.2126 7.06917 17.9285 7.05895C15.9234 7.01241 14.4197 3.86167 16.9367 3.20288C18.752 2.72311 20.6245 4.68516 19.3928 6.34287Z" fill="#2F3134"/>
                                        </svg>
                                        <span class="mr-2 YekanBakhFaNum-SemiBold">روانشناسی</span>

                                    </a>
                                </div>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
                                <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                    <a class="d-flex justify-content-center align-items-center" href="#">
                                        <span class="ml-2 show-more">ادامه مطلب</span>
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#FFAA00"/>
                                            <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#FFAA00"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
