<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Admin Panel</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{asset('admin-styles/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('admin-styles/style.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('admin-styles/toastify.min.css')}}">
      <style>
        body {
           min-height: 100vh;
        }
     </style>
   </head>
   <body class="d-flex align-items-center justify-content-center">
      <div class="container">
        
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title mt-5">Login</h5>
                     <form method="POST" class="p-auto">
                        @csrf
                        <div class="form-outline mb-4">
                           <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-outline mb-4">
                           <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" name="password" />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>
                     </form>
                  </div>
               </div>
            </div>
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
