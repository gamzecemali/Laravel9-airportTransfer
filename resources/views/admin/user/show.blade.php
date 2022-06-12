@extends('layouts.adminwindows')

@section('title', 'User Details: '.$data->title)


@section('content')

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Detail User: {{$data->title}}</h1>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>
                                <th>Name & Surname</th>
                                <td>{{$data->name}}</td>


                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Roles</th>
                                <td>
                                    @foreach ($data->roles as $role)
                                        {{$role->name}}
                                    <td><a href="{{route('admin.user.destroyrole', ['uid'=>$data ->id,'rid'=>$role->id ])}}"onclick="return confirm ('Deleting! Are you sure?')"
                                           class="btn btn-block btn-danger btn=sm">[X]</a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>

                            <tr>
                                <th>Add Role to User :</th>
                                <td>
                                <form role="form" action="{{route('admin.user.addrole', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$data->id}}">
                                    <select name="role_id" >
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach

                                    </select>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                    </div>

                                </form>
                                </td>
                            </tr>
                            </thead>
                            @endsection

                            @section('foot')
                                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                                <script>
                                    $(function () {
                                        $('.textarea').summernote()
                                    })

                                </script>
@endsection
