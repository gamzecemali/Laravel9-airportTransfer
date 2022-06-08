@extends('layouts.frontbase')

@section('title', $category->title . 'Transfers')
@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
            style="background-image: url="{{Storage::url($category->image)}}">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small">Welcome to Splash</span>
                        <h1>{{$category->title}}</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </header>
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">


                    <h2>Beautiful Images</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                @foreach($transfers as $rs)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{route('transfer',['id'=>$rs->id])}}">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="{{Storage::url($rs->image)}}" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                                <a href="{{route('transfer',['id'=>$rs->id])}}" class="fh5co-project-item image-popup">
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div id="gtco-features" class="border-bottom">
        <div class="gtco-container">
            <div class="row">

            </div>
            <div class="row">

            </div>
        </div>
    </div>
    </div>
@endsection
