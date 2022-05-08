@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <div id="page-wrapper">

        <div class="row">

            <!-- Page Header -->
            < class="col-lg-12">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('admin.category.create')}}" class="btn btn-block btn-success btn=sm" style="width: 100px">Add Category</a>
                        <br>Category List
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs -> id}}</td>
                                    <td>{{$rs -> title}}</td>
                                    <td>{{$rs -> keywords}}</td>
                                    <td>{{$rs -> description}}</td>
                                    <td>{{$rs -> slug}}</td>
                                    <td>{{$rs -> status}}</td>
                                    <td>{{$rs -> image}}</td>
                                    <td><a href="{{route('admin.category.edit', ['id'=>$rs ->id])}}" class="btn btn-block btn-info btn=sm">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy', ['id'=>$rs ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                                       class="btn btn-block btn-danger btn=sm">Delete</a>
                                    <td><a href="{{route('admin.category.show', ['id'=>$rs ->id])}}" class="btn btn-block btn-success btn=sm">Show</a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header -->
        </div>



    </div>



@endsection
