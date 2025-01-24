@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 box-margin height-card">
                <div class="card card-body">
                    <h4 class="card-title">ویرایش کاتالوگ {{$catalog['name']}}</h4>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{route('catalogs.update',$catalog['id'])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="exampleInputEmail111">نام کاتالوگ:</label>
                                    <input value="{{$catalog['name']}}" name="name" type="text" class="form-control" id="exampleInputEmail111">
                                </div>
                                <div class="input-group cust-file-button mb-3">
                                    <div class="custom-file">
                                        <input name="file" type="file" class="custom-file-input form-control" id="inputGroupFile03">
                                        <label class="custom-file-label" for="inputGroupFile03">انتخاب فایل</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-success mb-2 mr-2" style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 box-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">کاتولوگ ها</h4>
                        <hr>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>لینک کاتالوگ</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($catalogs as $catalog)
                                <tr>
                                    <td>{{$catalog['name']}}</td>
                                    <td>{{$catalog['file']}}</td>

                                    <td class="d-flex">
                                        <a href="{{route('catalogs.edit',$catalog['id'])}}" style="font-size:20px;"><i class="fa fa-edit" style="color:#04a9f5;"></i></a>
                                        <form id="form" action="{{route('catalogs.destroy',$catalog->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a id="btn_delete" onclick="submitForm()" style="font-size:20px;"><i class="fa fa-trash" style="color:#dc3545;"></i></a>
                                        </form>                                      </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div>
@endsection
@section('scripts')
    <script>
        let submitForm = ()=>{
            let form = document.getElementById('form')
            form.submit()
        }

    </script>

@endsection
