<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>Admin Panel</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('admin-styles/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin-styles/style.css')}}" rel="stylesheet">
        <script src="{{asset('admin-styles/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('admin-styles/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <div id="wrapper">
            @include('admin.includes.nav')
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>
    </body>
</html>
