@extends('layouts.frontbase')

@section('title', 'User Transfer')
@include('home.header')
@section('content')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-2 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>User Transfer</h1>
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
                            <a href="{{route('userpanel.addtransfer')}}" class="btn btn-primary btn-danger">ADD Transfer</a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style ="width:10px">Id</th>
                                    <th>Category</th>
                                    <th>Transfer Title</th>
                                    <th>Keywords</th>
                                    <th>description</th>
                                    <th>Status</th>
                                    <th style="width: 50px">Edit</th>
                                    <th style="width: 50px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $transfers as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route('transfer', ['id'=>$rs->id])}}">
                                                {{$rs->category->title}}</a>
                                        </td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}} </td>
                                        <td>{{$rs->description}} </td>
                                        <td>{{$rs->status}} </td>
                                        <td><a href="{{route('userpanel.transferedit',['id'=>$rs->id])}}" class="btn btn-primary btn-success"
                                            >Edit</a>
                                        </td>
                                        <td><a href="{{route('userpanel.transferdestroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger"
                                               onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a>
                                        </td>

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
