@extends('layouts.main')

@section('carousel')
	@include('includes.carousel', ['pageTitle' => 'Register'])]])
@endsection

@section('content')
<section class="ftco-section">
  <div class="container">
     <div class="row">
        <div class="col-md-12 ftco-animate">
           <form action="{{route("register.store")}}" class="billing-form ftco-bg-dark p-3 p-md-5" method="POST">
              @csrf
              <h3 class="mb-4 billing-heading">Register</h3>
              <div class="row align-items-end">
                 <div class="col-md-12">
                    <div class="form-group">
                       <label for="Username">Name</label>
                       <input type="text" class="form-control" placeholder="name" name="name">
                       @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>    
                       @enderror
                    </div>
                 </div>
                 <div class="col-md-12">
                    <div class="form-group">
                       <label for="Email">Email</label>
                       <input type="text" class="form-control" placeholder="Email" name="email">
                       @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                 </div>
                 <div class="col-md-12">
                    <div class="form-group">
                       <label for="Password">Password</label>
                       <input type="password" class="form-control" placeholder="Password" name="password">
                        @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 </div>
                 <div class="col-md-12">
                    <div class="form-group mt-4">
                       <div class="radio">
                          <button class="btn btn-primary py-3 px-4">Register</button>
                       </div>
                    </div>
                 </div>
           </form>
           <!-- END -->
           </div> <!-- .col-md-8 -->
        </div>
     </div>
  </div>
</section>
@endsection
