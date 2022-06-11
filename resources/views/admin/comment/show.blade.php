@extends('layouts.adminwindows')

@section('title', 'Show Message: '.$data->title)


@section('content')

    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail Comment : {{$data->title}}</h1>
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
                                <th>Transfer</th>
                                <td>{{$data->transfer->title}}</td>
                            </tr>
                            <tr>
                                <th>Name & Surname</th>
                                <td>{{$data->user->name}}</td>

                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Review</th>
                                <td>{{$data->COMMENT}}</td>
                            </tr>
                            <th>Rate</th>
                            <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th>Ip Number</th>
                                <td>{{$data->ip}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
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
                                <th>Admin Note :</th>
                                <td>
                                    <form role="form" action="{{route('admin.comment.update', ['id'=>$data->id])}}" method="post">
                                        @csrf
                                       <select name="status">
                                           <option selected >{{$data->status}}</option>
                                           <option value="True">True</option>
                                           <option value="False">False</option>
                                       </select>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Comment</button>
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
