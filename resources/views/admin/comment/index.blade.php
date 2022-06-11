@extends('layouts.adminbase')

@section('title', ' Comment & Reviews List')

@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Comment List</h1>
                </div>
            </div>
            <div class="panel-body" >
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style ="width:10px">Id </th>
                            <th>Name</th>
                            <th>Transfer</th>
                            <th>Subject</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 50px">Show</th>
                            <th style="width: 50px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $rs )
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('admin.transfer.show', ['id'=>$rs->transfer_id])}}">
                                        {{$rs->user->name}}</a>
                                </td>
                                <td>{{$rs->transfer->title}}</td>
                                <td>{{$rs->subject}} </td>
                                <td>{{$rs->rate}} </td>
                                <td>{{$rs->status}} </td>

                                <td><a href="{{route('admin.comment.show',['id'=>$rs ->id])}}" class="btn btn-primary btn-success"
                                       onclick="return !window.open(this.href,'',)">Show</a> </td>

                                <td><a href="{{route('admin.comment.destroy',['id'=>$rs ->id])}}" class="btn btn-primary btn-danger"
                                       onclick="return confirm ('Deleting !! Are you sure ?')">Delete</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>



            </div>
        </div>


@endsection
