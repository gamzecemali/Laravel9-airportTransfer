@extends('layouts.frontbase')

@section('title', 'User Registeration Page' )
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">


                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small"></span>
                            <h1>User Registration</h1>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </header>

    <div id="gtco-features" class="border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">

                    @include('auth.register')
                </div>
            </div>

        </div>
    </div>




@endsection
