<div class="container p-0 my-2">
    <div class="row">
        @foreach($categories as $cat)
            <div class="col-md-4 p-3">
                <div class="py-4 p-3 d-flex align-items-center justify-content-around algin text-lg-right text-md-center mb-3 service_style category-style radius30">
                    <img width="100" height="100" src="{{asset($cat['image'])}}">
                    <h3 class="YekanBakhFaNum-Bold fa1-2">{{$cat['title']}}</h3>
                    <a href="{{route('product.category',$cat['slug'])}}">
                        <div class="arrow-box d-flex align-items-center justify-content-center">
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#292D32"/>
                                <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#292D32"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
