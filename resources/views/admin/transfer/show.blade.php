@extends('layouts.adminbase')

@section('title', 'Show Transfer: '.$data->title)


@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail: {{$data->title}}</h1>
                <div class="col-lg-12">
                    <a href="{{route('admin.transfer.edit', ['id'=>$data  ->id])}}" class="btn btn-block btn-success btn=sm" style="width: 100px">Edit</a>
                    <a href="{{route('admin.transfer.destroy', ['id'=>$data  ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                       class="btn btn-block btn-danger btn=sm" style="width: 100px">Delete</a>

                </div>


            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}</td>

                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>


                            </tr>
                            <tr>
                                <th>Base Price</th>
                                <td>{{$data->base_price}}</td>
                            </tr>
                            <tr>
                                <th>Km Price</th>
                                <td>{{$data->km_price}}</td>
                            </tr>
                            <tr>
                                <th>Capacity</th>
                                <td>{{$data->capacity}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{$data->slug}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>  @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                    @endif</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th>Detail Inf</th>
                                <td>{!! $data->detail !!}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            </tr>
                            </thead>
@endsection

                            @section('foot')
                                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                                <script>
                                    $(function () {
                                        $('.textarea').summernote()
                                    })

                                </script>
@endsection










