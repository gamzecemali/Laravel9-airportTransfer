@extends('layouts.frontbase')

@section('title', 'User Transfer Edit')
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-2 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>User Transfer</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 animate-box">
                        <h3>User Menu</h3>
                        @include('home.user.usermenu')
                    </div>
                    <div class="col-md-9 animate-box">
                        <div class="gtco-contact-info">
                            <form role="form" action="{{route('userpanel.transferupdate',['id'=>$transfer->id])}}" method="post" enctype="multipart/form-data" >
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
                                    <input type="text" class="form-control" name="title" value="{{$transfer->title}}">
                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$transfer->keywords}}">

                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$rs->description}}">

                                </div>

                                <div class="form-group">
                                    <label>Base Price</label>
                                    <input type="number" class="form-control" name="base_price" value="{{$transfer->base_price}}">

                                    <div class="form-group">
                                        <label>Km Price</label>
                                        <input type="number" class="form-control" name="km_price" value="{{$transfer->km_price}}">

                                        <div class="form-group">
                                            <label>Capacity</label>
                                            <input type="number" class="form-control" name="capacity" value="{{$transfer->capacity}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{$transfer->Slug}}">
                                        </div>

                                        <div class="form-group">
                                            <label>İmage</label>
                                            <input type="file" name="image">
                                        </div>

                                        <div class="form-group">
                                            <label>Detail Inf.</label>
                                            <textarea type="text" class="form-control" name="detail" id="detail" value="{{$transfer->detail}}">
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

                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
