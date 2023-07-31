@extends('layouts.main')

@section('carousel')
	@include('includes.carousel', ['pageTitle' => 'Cart'])
@endsection

@section('content')
	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					@if (count($cartItems) === 0)
						<p class="text-center">Your cart is empty</p>
					@else
						<div class="cart-list">
							<table class="table">
								<thead class="thead-primary">
									<tr class="text-center">
										<th>&nbsp;</th>
										<th>&nbsp;</th>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($cartItems as $item)
										<tr class="text-center">
											<td class="product-remove">
												<a href="#" onclick="event.preventDefault(); document.getElementById('remove-cart-{{$item->product_id}}').submit();""><span class="icon-close"></span></a>
												<form id="remove-cart-{{$item->product_id}}" action="{{route('cart.remove', $item->product_id)}}" method="POST" style="display: none;">
													@csrf
													@method('DELETE')
												</form>
											</td>

											<td class="image-prod"><div class="img" style="background-image: url({{asset($item->image)}});"></div></td>

											<td class="product-name">
												<h3>{{$item->name}}</h3>
												<p>{{$item->description}}</p>
											</td>

											<td class="price">${{$item->price}}</td>

											<td>
												<div class="input-group mb-3">
													<input disabled type="text" name="quantity" class="quantity form-control input-number" value={{$item->quantity}} min="1" max="100" />
												</div>
											</td>

											<td class="total">${{$item->price * $item->quantity}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					@endif
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span>$20.60</span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span>$0.00</span>
						</p>
						<p class="d-flex">
							<span>Discount</span>
							<span>$3.00</span>
						</p>
						<hr />
						<p class="d-flex total-price">
							<span>Total</span>
							<span>$17.60</span>
						</p>
					</div>
					<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
				</div>
			</div>
		</div>
	</section>
@endsection