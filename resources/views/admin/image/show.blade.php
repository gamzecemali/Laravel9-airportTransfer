@extends('layouts.adminbase')

@section('title', 'Show Category: '.$data->title)



@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail: {{$data->title}}</h1>

                <div class="col-lg-12">
                    <a href="{{route('admin.category.edit', ['id'=>$data  ->id])}}" class="btn btn-block btn-success btn=sm" style="width: 70px">Edit</a>
                    <a href="{{route('admin.category.destroy', ['id'=>$data  ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                       class="btn btn-block btn-danger btn=sm" style="width: 70px">Delete</a>

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

    <div class="panel panel-default">
        <div class="&nbsp;panel-heading">
        <div class="&nbsp;panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
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
                        <td>{{$data->image}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Update Date</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                    </thead>
@endsection


































































