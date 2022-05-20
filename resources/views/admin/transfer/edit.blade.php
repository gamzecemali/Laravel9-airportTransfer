@extends('layouts.adminbase')

@section('title', 'Edit Transfer:.$data->title')



@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Transfer: {{$data->title}}</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.transfer.update', ['id'=>$data ->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control select2" name="category_id" style="width: 150px">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif >
                                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>

                                    <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">

                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">

                                </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}">


                                        <div class="form-group">
                                            <label>Base Price</label>
                                            <input type="number" class="form-control" name="base_price" value="{{$data->base_price}}">

                                            <div class="form-group">
                                                <label>Km Price</label>
                                                <input type="number" class="form-control" name="km_price" value="{{$data->km_price}}">

                                                <div class="form-group">
                                                    <label>Capacity</label>
                                                    <input type="number" class="form-control" name="capacity" value="{{$data->capacity}}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Detail Inf</label>
                                                    <textarea class="form-control" name="detail">
                                                        {{$data->detail}}
                                    </textarea>

                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" value="{{$data->slug}}">

                                </div>

                                <div class="form-group">
                                    <label>İmage</label>
                                    <input type="file" name="image">
                                </div>
                                <div class=form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                                    </div>
                                </div>
                                </div>
                            </form>




@endsection










