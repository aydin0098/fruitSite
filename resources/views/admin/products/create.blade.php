@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-12 box-margin height-card">
            <div class="card card-body">
                <h4 class="card-title">افزودن محصول</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail111">عنوان محصول:</label>
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail111">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail111">قیمت محصول:</label>
                                    <input name="price" type="text" class="form-control" id="exampleInputEmail111">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail111">دسته بندی محصول:</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group cust-file-button mb-3">
                                    <div class="custom-file">
                                        <input onchange="previewImage(event)"
                                            name="image" type="file" class="custom-file-input form-control" id="inputGroupFile03">
                                        <label class="custom-file-label" for="inputGroupFile03">تصویر محصول</label>


                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <img id="imagePreview" src="" alt="پیش‌نمایش تصویر" style="max-width: 300px; display: none;">

                            </div>

                            <div class="form-group col-12">
                                <label for="exampleInputEmail111">توضیحات محصول:</label>
                                <textarea name="description" class="form-control" id=""></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">عنوان متا:</label>
                                <input name="meta_title" type="text" class="form-control" id="meta-title">
                                <div id="counter1" style="font-size:12px"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail111">توضیحات متا:</label>
                                <textarea name="meta_description" class="form-control" id="meta-description"></textarea>
                                <div id="counter2" style="font-size:12px"></div>
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

@section('scripts')
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const image = document.getElementById('imagePreview');
                image.src = e.target.result;
                image.style.display = 'block';
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection

