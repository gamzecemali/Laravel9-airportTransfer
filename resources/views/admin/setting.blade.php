@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection



@section('content')
    <div id="page-wrapper">


        <div class="row">
            <!--  page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Settings</h1>
            </div>
            <!-- end  page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>General</th>
                                        <th>Smtp E-mail</th>
                                        <th>Social Media</th>
                                        <th>About Us</th>
                                        <th>Contact</th>
                                        <th>References</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td>
                                            <input type="text" class="form-control" name="id" value="{{$data->id}}" placeholder="Id">
                                            <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title">
                                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" placeholder="Keywords">
                                            <input type="text" class="form-control" name="description" value="{{$data->description}}" placeholder="Descriptions">
                                            <input type="text" class="form-control" name="company" value="{{$data->company}}" placeholder="Company">
                                            <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Address">
                                            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="E-mail">
                                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone">

                                            <div class=form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                            <br>

                                            <input type="file" class="form-control" name="icon" value="" placeholder="İcon">


                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}" placeholder="smtpserver">
                                            <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}" placeholder="smtpemail">
                                            <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}" placeholder="smtppassword">
                                            <input type="number" class="form-control" name="smtpport" value="{{$data->smtpport}}" placeholder="smtpport">


                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="fax" value="{{$data->fax}}" placeholder="fax">
                                            <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="facebook">
                                            <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}" placeholder="instagram">
                                            <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="twitter">

                                        </td>
                                        <td>
                                        <textarea class="textarea" id="aboutus" name="aboutus"  >{{$data->aboutus}}
                                        </textarea>
                                        </td>

                                        <td>
                                            <textarea class="textarea" id="contact" name="contact" >{{$data->contact}}
                                            </textarea>

                                        </td>

                                        <td>
                                            <textarea class="textarea" id="references" name="references"  >{{$data->references}}

                                            </textarea>

                                        </td>
                                    </tr>


                                    </tbody>

                                </table>
                                <button type="submit"  class="btn btn-primary">Update Settings </button>
                                </table>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection
        @section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#aboutus').summernote();
                    $('#contact').summernote();
                    $('#references').summernote();
                });
            </script>


@endsection

