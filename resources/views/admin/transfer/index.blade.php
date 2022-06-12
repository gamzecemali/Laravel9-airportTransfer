@extends('layouts.adminbase')

@section('title', 'Transfer List')

@section('content')
    <div id="page-wrapper">

        <div class="row">

            <!-- Page Header -->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('admin.transfer.create')}}" class="btn btn-block btn-success btn=sm" style="width: 100px">Add Transfer</a>
                    <br>Transfer List
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Base Price</th>
                                <th>Km Price</th>
                                <th>Capacity</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                    <td>{{$rs -> id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs -> base_price}}</td>
                                    <td>{{$rs -> km_price}}</td>
                                    <td>{{$rs -> capacity}}</td>
                                    <td>{{$rs -> slug}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                    </td>
                                    <td>
                                       <a href="{{route('admin.image.index', ['tid'=>$rs ->id])}}"
                                       onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">

                                       <img src="{{asset('assets')}}/admin/assets/img/gallery.jpg" style="height: 40px">
                                   </a>
                                   </td>


                                    <td>{{$rs -> status}}</td>

                                    <td><a href="{{route('admin.transfer.edit', ['id'=>$rs ->id])}}" class="btn btn-block btn-info btn=sm">Edit</a></td>
                                    <td><a href="{{route('admin.transfer.destroy', ['id'=>$rs ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                                           class="btn btn-block btn-danger btn=sm">Delete</a>
                                    <td><a href="{{route('admin.transfer.show', ['id'=>$rs ->id])}}" class="btn btn-block btn-success btn=sm">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
@endsection
