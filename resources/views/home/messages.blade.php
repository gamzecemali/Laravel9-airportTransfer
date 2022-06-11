@if($message =Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
    </div>
    @endif

@if($message =Session::get('error'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
    </div>
@endif


@if($message =Session::get('warning'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
    </div>
@endif


@if($message =Session::get('info'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">*</button>
        <strong>{{$message}}</strong>
        Check the following errors :(
    </div>
@endif
