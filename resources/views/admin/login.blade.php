@extends('layouts.adminbase')

@section('title', 'Admin')



@section('content')

       <div id="page-wrapper">

           <div class="row">
               <!-- Page Header -->
               <div class="col-lg-12">
                   <div class="col-lg-12">
                       <h1 class="page-header">LOGIN ADMIN</h1>
                   </div>

               </div>
               <!--End Page Header -->
               <div class="panel panel-default">
                   <div class="panel-heading">

                   </div>
                   <div class="panel-body">
                       <div class="row">
                           <div class="col-lg-6">
                               <div class="tab-content-inner active" data-content="login">

                                   <form action="{{route('loginadmincheck')}}" method="post">
                                       @csrf
                                       <div class="row">
                                           <div>
                                               <div class="row form-group">
                                                   <div class="col-md-12">
                                                       <label for="username">Email</label>
                                                       <input type="text" name="email" class="form-control" id="email">
                                                   </div>
                                               </div>
                                               <div class="row form-group">
                                                   <div class="col-md-12">
                                                       <label for="password">Password</label>
                                                       <input type="password" name="password" class="form-control" id="password">
                                                   </div>
                                               </div>
                                               <div class="row form-group">
                                                   <div class="col-md-12">
                                                       <input type="submit" class="btn btn-primary" value="Login">
                                                   </div>
                                               </div>
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



@endsection



