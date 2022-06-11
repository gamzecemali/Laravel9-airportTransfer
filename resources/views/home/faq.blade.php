@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions'. $setting->title)
@include('home.header')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">


                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small"></span>
                            <h1>Frequently Asked Questions</h1>

                        </div>
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
                    <h1>Frequently Asked Questions</h1>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                    <h4>{{$rs->question}}</h4>
                                </a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                {!! $rs->answer !!}
                            </div>
                            </div>
                        @endforeach
                </div>
            </div>

        </div>
    </div>




@endsection
