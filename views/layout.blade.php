<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'LaravelMysqlCrud')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">LaravelMysqlCrud</h2>
        <h3 class="text-center" style="margin-top: 5px; padding-top: 0;">Part 10: Final tweaks</h3>
    </div>

    <div class="container">
        @yield('mainContent')
    </div>

    <div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Hans Donner
        </strong>
    </div>
</body>
</html>