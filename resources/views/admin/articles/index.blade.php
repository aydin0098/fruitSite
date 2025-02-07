@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">لیست مقالات</h4>
                        <a href="{{route('articles.create')}}" type="button" class="btn btn-success mb-2 mr-2" style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>
                        <hr>



                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>نام مقاله</th>
                                <th>لینک مقاله</th>
                                <th>عکس</th>
                                <th>تاریخ ایجاد</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->slug}}</td>
                                    <td>
                                        <img  width="40" src="{{asset($article->image)}}">
                                    </td>
                                    <td>{{$article->created_at}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('articles.edit',$article['id'])}}" style="font-size:20px;"><i class="fa fa-edit" style="color:#dc3545;"></i></a>
                                        <form id="form" action="{{route('articles.destroy',$article->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a id="btn_delete" onclick="submitForm()" style="font-size:20px;"><i class="fa fa-trash" style="color:#dc3545;"></i></a>
                                        </form>
                                    </td>
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
