@extends('layouts.frontbase')

@section('title', 'e commerce project')


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
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    <ul class="tab-menu">
                                        <li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
                                        <li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <form action="#">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="username">Username or Email</label>
                                                        <input type="text" class="form-control" id="username">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password2">Repeat Password</label>
                                                        <input type="password" class="form-control" id="password2">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary" value="Sign up">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-content-inner" data-content="login">
                                            <form action="#">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="username">Username or Email</label>
                                                        <input type="text" class="form-control" id="username">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary" value="Login">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

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
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
                        <h3>Pixel Perfect</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
                        <h3>Fully Responsive</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                        <h3>Web Development</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
                        <h3>Web Design</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-paint-roller"></i>
						</span>
                        <h3>Accent Colours</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-announcement"></i>
						</span>
                        <h3>Theme Updates</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-stats-up"></i>
						</span>
                        <h3>Increase Earnings</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-magnet"></i>
						</span>
                        <h3>Passive Income</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Creativity Fuel</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Projects Done</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-time"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Hours Spent</span>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


