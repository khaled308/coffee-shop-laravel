@extends('layouts.main')

@section('carousel')
	@include('includes.carousel', ['pageTitle' => 'Checkout'])
@endsection

@section('content')
<section class="ftco-section">
	<div class="container">
	   <div class="row">
		  <div class="col-md-12 ftco-animate">
			 <form action="{{route('checkout.store')}}" class="billing-form ftco-bg-dark p-3 p-md-5" method="POST">
				@csrf
				<h3 class="mb-4 billing-heading">Billing Details</h3>
				<div class="row align-items-end">
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="firstname">Firt Name</label>
						 <input type="text" class="form-control" placeholder="" name="first_name">
					  </div>
				   </div>
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="lastname">Last Name</label>
						 <input type="text" class="form-control" placeholder="" name="last_name">
					  </div>
				   </div>
				   <div class="w-100"></div>
				   <div class="col-md-12">
					<div class="form-group">
						<label for="country">Country</label>
						<input type="text" class="form-control" placeholder="Country" name="country">
					 </div>
				   </div>
				   <div class="w-100"></div>
				   <div class="col-md-12">
					  <div class="form-group">
						 <label for="streetaddress">Street Address</label>
						 <input type="text" class="form-control" placeholder="House number and street name" name="address">
					  </div>
				   </div>
				   <div class="col-md-12">
					  <div class="form-group">
						 <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
					  </div>
				   </div>
				   <div class="w-100"></div>
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="towncity">Town / City</label>
						 <input type="text" class="form-control" placeholder="" name="city">
					  </div>
				   </div>
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="postcodezip">Postcode / ZIP *</label>
						 <input type="text" class="form-control" placeholder="" name="zip_code">
					  </div>
				   </div>
				   <div class="w-100"></div>
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="phone">Phone</label>
						 <input type="text" class="form-control" placeholder="" name="phone">
					  </div>
				   </div>
				   <div class="col-md-6">
					  <div class="form-group">
						 <label for="emailaddress">Email Address</label>
						 <input type="text" class="form-control" placeholder="" name="email">
					  </div>
				   </div>
				   <div class="w-100"></div>
				   <div class="col-md-12">
					  <div class="form-group mt-4">
						 <div class="radio">
							<p><button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
						 </div>
					  </div>
				   </div>
				</div>
			 </form>
			 <!-- END -->
			 
		  </div>
		  <!-- .col-md-8 -->
	   </div>
	</div>
	</div>
 </section>
 <!-- .section -->


    
  



  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

    
  </body>
</html>
@endsection