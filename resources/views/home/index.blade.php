@extends('layouts.frontbase')

@section('title', $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))

@section('content')

    <header id="gtco-header" class="gtco-cover" role="banner"
            style="background-image: url="({{asset('assets')}}/assets/images/img_4.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small">Welcome to Splash</span>
                        <h1>Build website using this template.</h1>
                    </div>
{{--                    LOGIN FORM--}}
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap">

                            <div class="tab">
{{--                                <ul class="tab-menu">--}}
{{--                                    @auth()--}}
{{--                                    <li class="gtco-second"><a href="/" data-tab="login">{{Auth::user()->name}}</a></li>--}}
{{--                                    <li class="gtco-second"><a href="/logoutuser" data-tab="login">Logout</a></li>--}}
{{--                                    @endauth--}}

{{--                                    @guest()--}}
{{--                                    <li class="active gtco-first"><a href="/loginregister" data-tab="signup">Sign up</a></li>--}}
{{--                                    <li class="gtco-second"><a href="/loginuser" data-tab="login">Login</a></li>--}}
{{--                                    @endguest--}}
{{--                                </ul>--}}



                                <div class="tab-content">
                                    @auth()
                                        <a href="/userpanel"><input type="submit" class="btn btn-primary" value="{{Auth::user()->name}}"></a>
                                        <a href="/logoutuser"><input type="submit" class="btn btn-primary" value="Log Out"></a>
                                    @endauth
                                    @guest()
                                        <a href="/register"><input type="submit" class="btn btn-primary" value="Sign up"></a>
                                        <a href="/login"><input type="submit" class="btn btn-primary" value="Login"></a>
                                    @endguest

                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_2.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_2.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_3.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_3.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_4.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_4.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_1.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_1.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_5.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_5.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_6.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_6.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="gtco-features" class="border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Splash Features</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                @foreach($transferlist1 as $rs)
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon"><i class="ti-vector"></i></span>
                        <h3>Pixel Perfect</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
@section('slider')
    @include('home.slider')
@endsection
