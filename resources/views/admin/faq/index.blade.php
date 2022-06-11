@extends('layouts.adminbase')

@section('title', 'Faq List')

@section('content')
    <div id="page-wrapper">

        <div class="row">

            <!-- Page Header -->
            < class="col-lg-12">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('admin.faq.create')}}" class="btn btn-block btn-success btn=sm" style="width: 100px">Add Question</a>
                    <br>Faq
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs -> id}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{{$rs -> answer}}</td>
                                    </td>
                                    <td>{{$rs -> status}}</td>

                                    <td><a href="{{route('admin.faq.edit', ['id'=>$rs ->id])}}" class="btn btn-block btn-info btn=sm">Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy', ['id'=>$rs ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                                           class="btn btn-block btn-danger btn=sm">Delete</a>
                                    <td><a href="{{route('admin.faq.show', ['id'=>$rs ->id])}}" class="btn btn-block btn-success btn=sm">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
@endsection
