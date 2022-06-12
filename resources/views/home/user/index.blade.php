@extends('layouts.frontbase')

@section('title', 'User Panel')
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-2 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>User Panel</h1>
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
                            <h3>User Profile</h3>
                              @include('profile.show')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
