@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 box-margin height-card">
                <div class="card card-body">
                    <h4 class="card-title">تنظیمات سایت</h4>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{route('admin.settings.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">عنوان سایت:</label>
                                        <input value="{{$settings['site_name']}}"  name="site_name" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">لوگو سایت:</label>
                                        <input name="site_logo" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">ادرس:</label>
                                        <input name="address" type="text" class="form-control" id="exampleInputEmail111" value="{{$settings['address']}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">تلفن تماس:</label>
                                        <input value="{{$settings['phone']}}" name="phone" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">ساعت کاری:</label>
                                        <input value="{{$settings['work_time']}}" name="work_time" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">روزهای کاری:</label>
                                        <input value="{{$settings['work_day']}}" name="work_day" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail111">متن درباره ما:</label>
                                        <textarea name="about_us_text" type="text" class="form-control" id="exampleInputEmail111">{{$settings['about_us_text']}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">تصویر درباره ما:</label>
                                        <input name="about_us_image" type="file" class="form-control" id="exampleInputEmail111">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">تصویر تماس با ما:</label>
                                        <input name="contact_us_image" type="file" class="form-control" id="exampleInputEmail111">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">بنر درباره ما:</label>
                                        <input name="about_us_banner" type="file" class="form-control" id="exampleInputEmail111">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail111">بنر تماس با ما:</label>
                                        <input name="contact_us_banner" type="file" class="form-control" id="exampleInputEmail111">
                                        @if($settings['contact_us_banner'])
                                            <img width="70px" src="{{asset($settings['contact_us_banner'])}}">
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-success mb-2 mr-2" style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row-->

    </div>
@endsection

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        function previewImage(event) {--}}
{{--            const file = event.target.files[0];--}}
{{--            const reader = new FileReader();--}}

{{--            reader.onload = function(e) {--}}
{{--                const image = document.getElementById('imagePreview');--}}
{{--                image.src = e.target.result;--}}
{{--                image.style.display = 'block';--}}
{{--            };--}}

{{--            reader.readAsDataURL(file);--}}
{{--        }--}}
{{--    </script>--}}
{{--@endsection--}}

