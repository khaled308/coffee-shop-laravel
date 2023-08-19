<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>Admin Panel</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('admin-styles/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin-styles/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('admin-styles/toastify.min.css')}}">
    </head>
    <body>
        <div id="wrapper">
            @include('admin.includes.nav')
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>
        <script src="{{asset('admin-styles/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('admin-styles/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin-styles/toastify.js')}}"></script>
      <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                Toastify({
                text:'{{ $error }}',
                duration: 5000,
                gravity: 'top',
                position: 'center',
                backgroundColor: 'red',
                close: true
                }).showToast();
            @endforeach
        @endif
    
        @if (session('success'))
            Toastify({
                    text:'{{ session('success') }}',
                    duration: 5000,
                    gravity: 'top',
                    position: 'center',
                    backgroundColor: 'green',
                    close: true
                    }).showToast();
        @endif
      </script>
    </body>
</html>
