<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets')}}/admin/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/main-style.css" rel="stylesheet" />
    @yield("head")
</head>
<body>

    @include("admin.sidebar")
@show
@yield("content")

@yield("foot")

</body>
</html>
