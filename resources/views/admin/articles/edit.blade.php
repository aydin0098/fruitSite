@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 box-margin height-card">
                <div class="card card-body">
                    <h4 class="card-title">ویرایش مقاله {{$article->title}}</h4>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{route('articles.update',$article['id'])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="exampleInputEmail111">عنوان مقاله:</label>
                                        <input value="{{$article['title']}}" name="title" type="text" class="form-control" id="exampleInputEmail111">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group cust-file-button mb-3">
                                        <div class="custom-file">
                                            <input onchange="previewImage(event)"
                                                   name="image" type="file" class="custom-file-input form-control" id="inputGroupFile03">
                                            <label class="custom-file-label" for="inputGroupFile03">تصویر مقاله</label>


                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <img id="imagePreview" src="" alt="پیش‌نمایش تصویر" style="max-width: 300px; display: none;">

                                </div>

                                <div class="form-group col-12">
                                    <label for="exampleInputEmail111">توضیحات مقاله:</label>
                                    <textarea name="content" class="form-control" id="">{{$article['content']}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail111">عنوان متا:</label>
                                    <input value="{{$article['meta_title']}}" name="meta_title" type="text" class="form-control" id="meta-title">
                                    <div id="counter1" style="font-size:12px"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail111">توضیحات متا:</label>
                                    <textarea name="meta_description" class="form-control" id="meta-description">{{$article['meta_description']}}</textarea>
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
