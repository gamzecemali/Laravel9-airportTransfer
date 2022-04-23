@extends('layouts.frontbase')

@section('title', 'Title from sub file')



@section('content')
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

@endsection
