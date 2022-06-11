@extends('layouts.frontbase')

@section('title', 'Contact'. $setting->title)
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Contact</h1>
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
                    <div class="col-md-6 animate-box">
                        <h3>Contact Form</h3>
                       @include('home.messages')
                        <form action="{{route("storemessage")}}" method="post">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="name">Name</label>
                                    <input type="text"  name="name" id="name" class="form-control" placeholder="Name & Surname">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="phone">Phone</label>
                                    <input type="tel"  name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="email">E-mail</label>
                                    <input type="text"  name="email" id="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input type="text"  name="subject" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="message" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="gtco-contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                             {!! $setting->contact !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






