@extends('layouts.adminbase')

@section('title', 'Show Category:.$data->title')



@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail Data: {{$data->title}}</h1>

                <div class="col-lg-12">
                    <a href="{{route('admin.category.edit', ['id'=>$data  ->id])}}" class="btn btn-block btn-success btn=sm" style="width: 100px">Edit</a>
                    <a href="{{route('admin.category.destroy', ['id'=>$data  ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                       class="btn btn-block btn-danger btn=sm" style="width: 100px">Delete</a>

                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.category.update', ['id'=>$data ->id])}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label><br>Id</label>
                                    <input type="text" class="form-control" name="Id" value="{{$data->id}}">

                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="Title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Keyword</label>
                                    <input type="text" class="form-control" name="Keyword" value="{{$data->keywords}}">
                                 </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="text" class="form-control" name="Image" value="{{$data->image}}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" name="Status" value="{{$data->status}}">
                                </div>
                                <div class="form-group">
                                    <label>Created Date</label>
                                    <input type="text" class="form-control" name="Created Date" value="{{$data->created_at}}">
                                </div>
                                <div class="form-group">
                                    <label>Update Date</label>
                                    <input type="text" class="form-control" name="Update Date" value="{{$data->updated_at}}">
                                </div>
@endsection










