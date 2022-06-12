@extends('layouts.adminbase')

@section('title', 'User List')

@section('content')
    <div id="page-wrapper">

        <div class="row">

            <!-- Page Header -->
            < class="col-lg-12">


            <div class="panel panel-default">
                <div class="panel-heading">

                    <br>User List
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs -> id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs -> email}}</td>
                                    <td>
                                        @foreach ($rs->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td>{{$rs -> status}}</td>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.user.show', ['id'=>$rs ->id])}}" class="btn btn-block btn-success btn=sm"
                                           onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                          Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.user.destroy', ['id'=>$rs ->id])}}"onclick="return confirm ('Deleting! Are you sure?')"
                                           class="btn btn-block btn-danger btn=sm">Delete</a>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
@endsection
