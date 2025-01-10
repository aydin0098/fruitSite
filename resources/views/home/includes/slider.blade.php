<section class="container">
    <div class="row">

        <div class="col-lg-12 p-0 mb-3">
            <div id="owl-mainslider" class="owl-carousel owl-theme text-center">
                @foreach($sliders as $slider)
                    <div class="item">
                        <img alt="{{$slider->title}}" src="{{asset($slider->image)}}" class="img-fluid radius-slide" />
                    </div>
                @endforeach



            </div>
        </div>

    </div>
</section>
