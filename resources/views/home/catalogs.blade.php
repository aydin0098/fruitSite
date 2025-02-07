@extends('home.master')
@section('title','کاتالوگ ها')
@section('content')
    <section class="container-fluid bkg p-0">
        <div class="row">
            <div class="col-lg-12 p-0 mb-3">
                <div class="bg-package d-flex align-items-center justify-content-center">
                    <div class="breadcrumb radius15">
                        <ul class="">
                            <li><a href="#">خانه / </a></li>
                            <li><a href="#" class="current">کاتالوگ ها</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="d-flex align-items-center mb-1">

            <h2 class="mr-3">کاتالوگ ها</h2>

        </div>
        <p class="mb-3">کاتالوگ های محصولات</p>

        <div class="gg-container">
            <div class="gg-box" id="heightWidth">
                @foreach($catalogs as $catalog)
                    <a href="{{asset($catalog['file'])}}" class="radius15">{{$catalog['name']}}</a>
                @endforeach

            </div>
        </div>
    </section>
@endsection
