@extends('layouts.adminbase')

@section('title', 'Add Transfer')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Transfer</h1>
                </div>

            </div>
            <!--End Page Header -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{route('admin.transfer.store')}}" method="post" enctype="multipart/form-data" >
                                @csrf

                                <div class="form-group">
                                    <label>Parent Transfer</label>

                                    <select class="form-control select2" name="category_id" style="width: 150px">
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">

                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords">

                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description">

                                </div>

                                <div class="form-group">
                                    <label>Base Price</label>
                                    <input type="number" class="form-control" name="base_price" >

                                    <div class="form-group">
                                        <label>Km Price</label>
                                        <input type="number" class="form-control" name="km_price" >

                                        <div class="form-group">
                                            <label>Capacity</label>
                                            <input type="number" class="form-control" name="capacity" >
                                        </div>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" class="form-control" name="slug" placeholder="Slug">
                                        </div>

                                        <div class="form-group">
                                            <label>İmage</label>
                                            <input type="file" name="image">
                                        </div>

                                        <div class="form-group">
                                            <label>Detail Inf.</label>
                                            <textarea type="text" class="form-control" name="detail" id="detail">
                                                </textarea>

                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#detail' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>


                                            <div class=form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

@endsection
