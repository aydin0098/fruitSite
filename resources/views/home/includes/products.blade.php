<section class="bg-gray pb-4">

    <div class="container p-4 radius20 mt-5">
        <div class="d-flex align-items-center justify-content-between mt-4">
            <h2>محصولات جدید</h2>
            <a class="d-flex align-items-center a-button radius55 py-2 px-4" href="{{route('product.all')}}">
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
            @foreach($products as $product)
                <div class="item">
                    <div class="card-body mb-3 text-center">
                        <a href="{{route('product.index',$product['slug'])}}">
                            <img class="img-fluid" src="{{asset($product->image)}}">
                        </a>
                        <div>
                            <h5 class="my-2 YekanBakhFaNum-SemiBold">
                                <a href="{{route('product.index',$product['slug'])}}">{{$product['title']}}</a></h5>
                            @if($product['price'])
                                <span class="color-orange YekanBakhFaNum-Bold fa18">540.000</span>
                                <span class="color-orange YekanBakhFaNum-Regular fa14">تومان</span>
                            @else
                                <span class="color-orange YekanBakhFaNum-Bold fa18">تماس بگیرید</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>
