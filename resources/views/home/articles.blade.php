@extends('home.master')
@section('title','مقالات')
@section('content')

    <section class="container-fluid bkg p-0">
        <div class="row">
            <div class="col-lg-12 p-0 mb-3">
                <div class="bg-package d-flex align-items-center justify-content-center">
                    <div class="breadcrumb radius15">
                        <ul class="">
                            <li><a href="#">خانه / </a></li>
                            <li><a href="#" class="current">بلاگ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row">


            <div class="col-xl-12 order-xl-0 pl-4 order-0 mb-3">

                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card p-3 mb-3 carding-blog overlyblog">

                                <a href="{{route('article.show',$article['slug'])}}">
                                    <img src="{{asset($article['image'])}}" alt="Card image">
                                </a>

                                <div class="p_relative">
                                    <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="{{route('article.show',$article['slug'])}}">{{$article['title']}}</a></h5>

                                    <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                        <a class="d-flex justify-content-center align-items-center" href="{{route('article.show',$article['slug'])}}">
                                            <span class="ml-2 show-more">ادامه مطلب</span>
                                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z"
                                                    fill="#FFAA00"/>
                                                <path
                                                    d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z"
                                                    fill="#FFAA00"/>
                                            </svg>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach


                </div>

            </div>

        </div>
    </section>

@endsection
