@extends('layouts.frontbase')

@section('title', 'User Comments')
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-2 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>User Comment</h1>
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
                            <h3>User Comments</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style ="width:10px">Id </th>
                                    <th>Name</th>
                                    <th>Transfer</th>
                                    <th>Subject</th>
                                    <th>Rate</th>
                                    <th>Status</th>

                                    <th style="width: 50px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $comments as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route('transfer', ['id'=>$rs->transfer_id])}}">
                                                {{$rs->user->name}}</a>
                                        </td>
                                        <td>{{$rs->transfer->title}}</td>
                                        <td>{{$rs->subject}} </td>
                                        <td>{{$rs->rate}} </td>
                                        <td>{{$rs->status}} </td>


                                        <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs ->id])}}" class="btn btn-primary btn-danger"
                                               onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
