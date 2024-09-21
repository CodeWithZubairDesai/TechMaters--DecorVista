@extends('users.layout')

@section('title')

CheckOut

@endsection
@section('main')


			<!--Banner Section ======================-->
			<section class="section-banner position-relative pt-60">
				<div class="section-full-width">
					<div class="section-title-wrapper position-relative">	
						<div class="scroll-move">
							<span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Shop</span>
						</div>				
						
						<div class="container">	
							<div class="section-title section-separator">
								<h2 class="fw-extra-bold heading-title separator lh-1">Checkout</h2>								
							</div>
						</div>
					</div>
					<!-- section-title-wrapper -->	
				</div>
				<!-- section-full-width -->	
			</section>
			<!--Banner Section ======================-->


			<!--checkout Section ======================-->
			<section class="section-checkout pb-3 pb-xl-4 position-relative">
				<div class="container">
					<div class="checkout-wrapper">
						<div class="row gy-40 gy-lg-0 gx-40 justify-content-between">
							<div class="col-lg-7 col-xxl-8">
								<div class="d-flex flex-column gap-30">
									<h4 class="mb-0">Checkout</h4>
									<div class="d-flex flex-column gap-10 mb-3">
										<p class="mb-0 d-flex flex-wrap gap-1">Returning customer? <a href="{{route('users.login')}}">Click Here To login</a></p>
										<p class="mb-0 d-flex flex-wrap gap-1">Have a coupon? <span class="show-coupon" >Click here to enter your code</span></p>
										<div class="checkout-form">
											<form class="row g-30 gy-md-0 needs-validation">
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputCoupon" placeholder="Add a Coupon Code" required>
												</div>
												<div class="col-md-5">
													<button class="btn btn-primary btn-md" type="submit">Apply Now</button>
												</div>	
											</form>
										</div>
										<!-- checkout-form -->										
									</div>
									<form id="OrderForm" method="POST" class="contact-form row g-30">
										@csrf
										<div class="col-md-6">
											<input type="text" class="form-control" id="InputName" name="name" placeholder="Name *" required="">
										</div>			
										<div class="col-md-6">
											<input type="email" class="form-control" id="InputEmail" name="enail" placeholder="Email Address *" required="">
										</div>		
										<div class="col-md-6">
											<input type="number" class="form-control" id="InputNumber" name="phone" placeholder="Phone *" required="">
										</div>
										<div class="col-12">
											<input type="text" class="form-control" id="InputHouse" name="housenumberandstreet" placeholder="House Number & Street">
										</div>
										<div class="col-12">
											<input type="text" class="form-control" id="InputApartment" name="apartment" placeholder="Apartment, suit, unit, etc (optional)">
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" id="InputTown" name="city" placeholder="City *" required="">
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" id="InputPostCode" name="postalcode" placeholder="Postcode *" required="">
										</div>									
										
										<div class="col-12">
											<textarea class="form-control" id="InputMessage" name="notes" placeholder="Order Notes (Optional)" rows="4"></textarea>
										</div>	
																					  
									
									<!-- checkOutForm -->
								</div>
								
							</div>
							<!-- col-8 -->
							<div class="col-lg-5 col-xxl-4">
    <div class="sticky-elements order-details p-3">
        <h4 class="mb-20">Your Order</h4>

        <!-- Order Items -->
        <ul class="list-unstyled fw-bold headings-color mb-0 d-flex justify-content-between pb-10 border-bottom border-1">
            <li>Products</li>
            <li>Subtotal</li>
        </ul>

        @php
            $subTotal = 0;
            $shippingCharges = 0;
        @endphp

        @foreach(session('cart', []) as $item)
            @php
                $subTotal += $item['price'] * $item['quantity'];
            @endphp
            <ul class="list-unstyled fw-bold headings-color mb-0 d-flex justify-content-between py-10 border-bottom border-1">
                <li>{{ $item['name'] }}</li>
                <li>${{ number_format($item['price'] * $item['quantity'], 2) }}</li>
            </ul>
        @endforeach

        <!-- Shipping Options -->
        <ul class="list-unstyled mb-0 d-flex flex-wrap flex-sm-nowrap gap-3 gap-md-4">
            <li>Shipping</li>
            <li>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-10">
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="check-input-shipping" id="check-input1" value="0" checked>
                            <label class="form-check-label" for="check-input1">
                                Free Shipping
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="check-input-shipping" id="check-input3" value="20" 
                            @if($shippingCharges == 125) checked @endif>
                            <label class="form-check-label" for="check-input3">
                                Flat Rate: <span class="fw-semibold">$20.00</span>
                            </label>
                        </div>
                    </li>
                    <li>Shipping Options will be updated during checkout</li>
                </ul>
            </li>
        </ul>

        <!-- Total Calculation -->
        @php
            $grandTotal = $subTotal + $shippingCharges;
        @endphp
        <ul class="list-unstyled fw-bold headings-color mb-0 d-flex justify-content-between py-10 border-top border-bottom border-1">
            <li>Total</li>
            <li>${{ number_format($grandTotal, 2) }}</li>
        </ul>

        <!-- Payment Methods -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="check-input-payments" id="check-input4" checked>
            <label class="form-check-label" for="check-input4">
                Check Payments
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="check-input-payments" id="check-input5">
            <label class="form-check-label" for="check-input5">
                <span class="d-inline-flex gap-3">
                    <span>Paypal</span>
                    <span class="mt-n1"><img src="{{ asset('assets/images/payment-card.png') }}" alt="payment-card"></span>
                </span>
            </label>
        </div>

        <!-- Place Order Button -->
        <div>
            <button type="submit" id="orderbtn" class="btn btn-primary w-100">Place Order</button>
        </div>
    </div>
</div>

								</div>
								
							</div>
							<!-- col-4 -->
						</div>
						<!-- row -->
					</div>
					
				</div>
				<!-- container -->
			</section>
			<!--checkout Section ======================-->


			<!--Feedback Section ======================-->
			<section class="section-feedback feedback-1 text-secondary">
				<div class="container">
					<div class="feedback-wrapper position-relative">
						<div class="feedback-content d-flex flex-column gap-4 flex-lg-row align-items-lg-end justify-content-lg-around">
							<h2 class="fw-extra-bold feedback-title">Drop Us a Line</h2>
							<div class="architronix-button">
								<a href="{{route('users.contact.index')}}" class="btn btn-secondary gap-10"> 
									Lets Talk
									<svg class="arrow" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"></path>
									</svg>
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!--Feedback Section ======================-->

			@endsection
			<script>

    $("#orderbtn").click(()=>{
      
        $("#OrderForm").submit();
    });
</script>