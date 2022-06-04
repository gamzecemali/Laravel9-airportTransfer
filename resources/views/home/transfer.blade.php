@extends('layouts.frontbase')

@section('title', $data->title)


@section('content')

    <div class="page-inner">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="index.html">Splash <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="features.html">Features</a></li>
                            <li class="active"><a href="tour.html">Tour</a></li>
                            <li class="has-dropdown">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="btn-cta"><a href="#"><span>Get started</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" >

            <a href="{{route('transfer',['id'=>$data->id])}}"><img style="position:absolute;width: 100%;height: 100%" src="{{Storage::url($data->image)}}"></a>

            <div class="overlay"></div>
            <div class="gtco-container">

                <div class="row">

                    <div class="col-md-12 col-md-offset-0 text-left">

                        <div class="row row-mt-15em">

                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">

                                <h1>{{$data->category->title}}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="gtco-section border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 text-left gtco-heading">
                        <h2><b>{{$data->title}}</b></h2>
                        <p><b>{{$data->description}}</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                            <div class="feature-copy">
                                <h3><b>Base Price:</b> {{$data->base_price}}</h3>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                            <div class="feature-copy">
                                <h3><b>Km Price:</b> {{$data->km_price}}</h3>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                            <div class="feature-copy">
                                <h3><b>Capacity: </b>{{$data->km_price}} </h3>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                            <div class="feature-copy">
                                <h3><b>Detail:</b></h3>
                                <p>{!! $data->details !!}</p>
                                <button href="{{route('transfer',['id'=>$data->id])}}" class="btn-primary">Book Now</button>
                            </div>
                        </div>

                        </div>
                            <div class="col-md-7 macbook-wrap animate-box" data-animate-effect="fadeInRight">
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="gtco-section border-bottom">
                        <div class="gtco-container">

                            <div class="row">
                                <div class="col-md-8 text-left gtco-heading">
                                    <h2>Product for iPhone</h2>
                                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 mt-sm">
                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-layers-alt"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Retina Ready</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-key"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Fully Responsive</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-image"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Ready To Use</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-heart"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Download Files</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-infinite"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Download Files</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="ti-credit-card"></i>
						</span>
                                        <div class="feature-copy">
                                            <h3>Download Files</h3>
                                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>
@endsection

