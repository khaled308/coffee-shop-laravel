@extends('layouts.main')

@section('carousel')
	@include('includes.carousel', ['pageTitle' => 'Payment'])
@endsection

@section('content')
    <div class="container">
        <form id="payment-form" method="POST" action="{{route('payment.pay', $order->id)}}">
            @csrf
            <input type="hidden" id="paymentStatus" name="paymentStatus" value="">
            <input type="hidden" id="paymentOrderId" name="paymentOrderId" value="{{$order->id}}">
            <button type="submit" style="display: none;" id="submitPaymentForm"></button>
        </form>        
         <script src="https://www.paypal.com/sdk/js?client-id=AZDRCkHIVWIY1mLTCBiRZkQlpNAnBI5PsB1_rdFgBXTR8HgGMeZ_bXSAwZVspk8ZCGEsFV80t0UySkqg&currency=USD"></script>
         <!-- Set up a container element for the button -->
         <div id="paypal-button-container"></div>
         <script>
            paypal.Buttons({
            createOrder: (data, actions) => {
                return actions.order.create({
                purchase_units: [{
                    amount: {
                    value: {{$order->total}}
                    }
                }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    document.getElementById('paymentStatus').value = orderData.status;
                    document.getElementById('submitPaymentForm').click();
                });
            }
            }).render('#paypal-button-container');
         </script>
    </div>
@endsection