@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">CategoryList</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category List
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
                                    <td><a href="/admin/category/edit/{{$rs ->id}}" class="btn btn-block btn-info btn=sm">Edit</a></td>
                                    <td><a href="/admin/category/delete/{{$rs ->id}}" class="btn btn-block btn-danger btn=sm">Delete</a></td>
                                    <td><a href="/admin/category/show/{{$rs ->id}}" class="btn btn-block btn-success btn=sm">Show</a></td>
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
