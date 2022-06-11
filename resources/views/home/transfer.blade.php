@extends('layouts.frontbase')

@section('title', $data->title)

@php
    $average=$data->comments->average('rate');
@endphp

@section('content')


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
                        @include('home.messages')
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
                                    {{--COMMENT FORM DIV--}}
                                    <div class="col-md-12 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                        <div class="form-wrap">
                                            <div class="tab">
                                                <ul class="tab-menu">
                                                    <body>
                                                    <p style="text-align:left;"><h1>Write Your Review</h1></p>
                                                    </body>
                                                    </html>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-content-inner active" data-content="signup">
                                                        <form action="{{route('storecomment')}}" method="post">
                                                            @csrf
                                                            <div class="row form-group">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="transfer_id"  class="form-control" value="{{$data->id}}">
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col-md-12">
                                                                    <label for="subject">Subject</label>
                                                                    <input type="text" name="subject"  class="form-control" id="subject">
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col-md-12">
                                                                    <textarea class="input" name="Comment"   placeholder="Your comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-12">
                                                                    <label for="rate">Your Rating</label>
                                                                    <select name="rate">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-12">
                                                                    @auth()
                                                                    <input type="submit" class="btn btn-primary" value="Submit">
                                                                    @else
                                                                        <a href="/login" class="btn btn-danger"> For Submit Your Review, Please Login</a>
                                                                    @endauth
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


{{--                    commentlist--}}
                    <div class="gtco-section">
                        <div class="gtco-container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                                    <h2>Comments About {{$data->title}}</h2>
                                    <h3>Avarage Rate: {{$average}}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <ul class="fh5co-faq-list">

                                        @foreach($reviews as $rs)
                                            <li class="animate-box">
                                                <h2><b>{{$rs->user->name}} </b>Says <b>{{$rs->subject}}</b> Rate:<b> {{$rs->rate}}</b></h2>
                                                <p>{{$rs->review}}</p>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </footer>
    </div>
@endsection

