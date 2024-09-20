@extends('users.layout')

@section('title')

Cart

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
								<h2 class="fw-extra-bold heading-title separator lh-1">Cart page</h2>								
							</div>
						</div>
					</div>
					<!-- section-title-wrapper -->	
				</div>
				<!-- section-full-width -->	
			</section>
			<!--Banner Section ======================-->


			<!--cart Section ======================-->
			<section class="section-cart position-relative pb-60 pb-lg-100 pb-xxl-120">
				<div class="container">
					<div class="row gy-40 gy-xl-0">
						<div class="col-xl-8">
							<div class="d-flex flex-column gap-30 sticky-elements">
								<h4 class="mb-0">Cart</h4>
								<div class="table-responsive product-table">
									<table class="table">
										<thead>
										  <tr>
											<th scope="col">Product</th>
											<th scope="col">Quantity</th>
											<th scope="col">Price</th>
											<th scope="col">Subtotal</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td class="product-item-info d-flex flex-wrap flex-md-nowrap gap-10 gap-sm-20 align-items-center">
												<div class="product-table-image"><img src="assets/images/shop-image-1.jpg" alt="shop-image-1.jpg"></div>
												<div class="d-flex flex-column gap-1">
													<h6 class="mb-0 product-title"><a href="product-single.html" class="text-decoration-none">Memento 2.0</a></h6>
													<p class="mb-0 font-size-base">Size: XL / Color: Red & blue</p>
												</div>												
											</td>
											<td>
												<label for="product-input"></label>
												<input type="number" id="product-input" name="product-input" value="1" min="1" max="100">
											</td>
											<td>$10.00</td>
											<td>$10.00</td>
										  </tr>										 
										</tbody>
									</table>
								</div>
								<!-- table-responsive -->
								<form class="row gy-10 gx-3 needs-validation">
									<div class="col-md-7">
										<input type="text" class="form-control" id="inputCoupon" placeholder="Add a Coupon Code" required>
									</div>
									<div class="col-md-5">
										<button class="btn btn-md btn-outline-primary" type="submit">Apply Now</button>
									</div>	
								</form>
							</div>
							<!-- d-flex -->
						</div>
						<!-- col-8 -->
						<div class="col-xl-4">
							<div class="order-details d-flex flex-column gap-30 p-4">
								<h4 class="mb-0">Order Summary</h4>
								<ul class="product-description-list list-unstyled mb-0 d-flex flex-column gap-20">
									<li class="d-flex justify-content-between">
										<span>Total</span>
										<span>$10.00</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Shipping Fee</span>
										<span>$05.00</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Discount</span>
										<span>$03.00</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Others</span>
										<span>$00.00</span>
									</li>
									<li class="d-flex justify-content-between fw-semibold">
										<span>Total</span>
										<span>$18.00</span>
									</li>						
								</ul>
								<div>
									<a href="checkout.html" class="btn btn-primary w-100">Proceed To Checkout</a>
								</div>
							</div>
							<!-- d-flex -->
						</div>
						<!-- col-4 -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</section>
			<!--cart Section ======================-->


			<!--Product-Details Section ======================-->
			<section class="section-product-details bg-custom-light pb-60 pb-lg-100 pb-xxl-120">
				<div class="container">
					<div>
						<h4 class="mb-20 mb-lg-40">Related Products</h4>

						<div class="swiper-custom-progress position-relative">
							<div class="swiper shop-swiper">
								<div class="swiper-wrapper"> 
									<div class="swiper-slide">
										<div class="shop-details">
											<div class="shop-image-wrapper position-relative">
												<div class="shop-image">
													<img src="assets/images/shop-image-1.jpg" class="w-100 h-100 object-fit-cover" alt="img">
												</div>
												<div class="shop-image-hover">
													<a class="btn btn-sm btn-outline-secondary  gap-10" href="product-single.html"> 	
														Add to Cart													
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_381_163)">
															<path d="M21 6.5H18C18 4.9087 17.3679 3.38258 16.2426 2.25736C15.1174 1.13214 13.5913 0.5 12 0.5C10.4087 0.5 8.88258 1.13214 7.75736 2.25736C6.63214 3.38258 6 4.9087 6 6.5H3C2.20435 6.5 1.44129 6.81607 0.87868 7.37868C0.31607 7.94129 0 8.70435 0 9.5L0 19.5C0.00158786 20.8256 0.528882 22.0964 1.46622 23.0338C2.40356 23.9711 3.67441 24.4984 5 24.5H19C20.3256 24.4984 21.5964 23.9711 22.5338 23.0338C23.4711 22.0964 23.9984 20.8256 24 19.5V9.5C24 8.70435 23.6839 7.94129 23.1213 7.37868C22.5587 6.81607 21.7956 6.5 21 6.5ZM12 2.5C13.0609 2.5 14.0783 2.92143 14.8284 3.67157C15.5786 4.42172 16 5.43913 16 6.5H8C8 5.43913 8.42143 4.42172 9.17157 3.67157C9.92172 2.92143 10.9391 2.5 12 2.5ZM22 19.5C22 20.2956 21.6839 21.0587 21.1213 21.6213C20.5587 22.1839 19.7956 22.5 19 22.5H5C4.20435 22.5 3.44129 22.1839 2.87868 21.6213C2.31607 21.0587 2 20.2956 2 19.5V9.5C2 9.23478 2.10536 8.98043 2.29289 8.79289C2.48043 8.60536 2.73478 8.5 3 8.5H6V10.5C6 10.7652 6.10536 11.0196 6.29289 11.2071C6.48043 11.3946 6.73478 11.5 7 11.5C7.26522 11.5 7.51957 11.3946 7.70711 11.2071C7.89464 11.0196 8 10.7652 8 10.5V8.5H16V10.5C16 10.7652 16.1054 11.0196 16.2929 11.2071C16.4804 11.3946 16.7348 11.5 17 11.5C17.2652 11.5 17.5196 11.3946 17.7071 11.2071C17.8946 11.0196 18 10.7652 18 10.5V8.5H21C21.2652 8.5 21.5196 8.60536 21.7071 8.79289C21.8946 8.98043 22 9.23478 22 9.5V19.5Z"/>
															</g>
															<defs>
															<clipPath id="clip0_381_163">
															<rect width="24" height="24" transform="translate(0 0.5)"/>
															</clipPath>
															</defs>
														</svg> 		
													</a>
												</div>
											</div>
											<!-- shop-image-wrapper -->
											<a href="product-single.html" class="text-decoration-none">
												<div class="shopping-info-wrapper mt-3 mt-lg-4 d-flex justify-content-between">
													<div class="shopping-item-details">
														<h5 class="fw-semibold product-title">Memento 2.0</h5>
														<span class="product-price fs-5">$134.99</span>
													</div>
													<div>
													<span class="star-rating" >										
														<span class="star-fill" style="width: 80%;"></span>
													</span>
												</div>
												</div>
											</a>
										</div>									
									</div>
									<!-- swiper-slide-->	
									<div class="swiper-slide">
										<div class="shop-details">
											<div class="shop-image-wrapper position-relative">
												<div class="shop-image">
													<img src="assets/images/shop-image-2.jpg" class="w-100 h-100 object-fit-cover" alt="img">
												</div>
												<div class="shop-image-hover">
													<a class="btn btn-sm btn-outline-secondary  gap-10" href="product-single.html"> 	
														Add to Cart													
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_381_163)">
															<path d="M21 6.5H18C18 4.9087 17.3679 3.38258 16.2426 2.25736C15.1174 1.13214 13.5913 0.5 12 0.5C10.4087 0.5 8.88258 1.13214 7.75736 2.25736C6.63214 3.38258 6 4.9087 6 6.5H3C2.20435 6.5 1.44129 6.81607 0.87868 7.37868C0.31607 7.94129 0 8.70435 0 9.5L0 19.5C0.00158786 20.8256 0.528882 22.0964 1.46622 23.0338C2.40356 23.9711 3.67441 24.4984 5 24.5H19C20.3256 24.4984 21.5964 23.9711 22.5338 23.0338C23.4711 22.0964 23.9984 20.8256 24 19.5V9.5C24 8.70435 23.6839 7.94129 23.1213 7.37868C22.5587 6.81607 21.7956 6.5 21 6.5ZM12 2.5C13.0609 2.5 14.0783 2.92143 14.8284 3.67157C15.5786 4.42172 16 5.43913 16 6.5H8C8 5.43913 8.42143 4.42172 9.17157 3.67157C9.92172 2.92143 10.9391 2.5 12 2.5ZM22 19.5C22 20.2956 21.6839 21.0587 21.1213 21.6213C20.5587 22.1839 19.7956 22.5 19 22.5H5C4.20435 22.5 3.44129 22.1839 2.87868 21.6213C2.31607 21.0587 2 20.2956 2 19.5V9.5C2 9.23478 2.10536 8.98043 2.29289 8.79289C2.48043 8.60536 2.73478 8.5 3 8.5H6V10.5C6 10.7652 6.10536 11.0196 6.29289 11.2071C6.48043 11.3946 6.73478 11.5 7 11.5C7.26522 11.5 7.51957 11.3946 7.70711 11.2071C7.89464 11.0196 8 10.7652 8 10.5V8.5H16V10.5C16 10.7652 16.1054 11.0196 16.2929 11.2071C16.4804 11.3946 16.7348 11.5 17 11.5C17.2652 11.5 17.5196 11.3946 17.7071 11.2071C17.8946 11.0196 18 10.7652 18 10.5V8.5H21C21.2652 8.5 21.5196 8.60536 21.7071 8.79289C21.8946 8.98043 22 9.23478 22 9.5V19.5Z"/>
															</g>
															<defs>
															<clipPath id="clip0_381_163">
															<rect width="24" height="24" transform="translate(0 0.5)"/>
															</clipPath>
															</defs>
														</svg> 
													</a>
												</div>
											</div>
											<!-- shop-image-wrapper -->
											<a href="product-single.html" class="text-decoration-none">
												<div class="shopping-info-wrapper mt-3 mt-lg-4 d-flex justify-content-between">
													<div class="shopping-item-details">
														<h5 class="fw-semibold product-title">SX Bathtubs</h5>
														<span class="product-price fs-5">$499.99</span>
													</div>
													<div>
													<span class="star-rating" >										
														<span class="star-fill" style="width: 100%;"></span>
													</span>
												</div>
												</div>
											</a>
										</div>									
									</div>
									<!-- swiper-slide-->			
									<div class="swiper-slide">
										<div class="shop-details">
											<div class="shop-image-wrapper position-relative">
												<div class="shop-image">
													<img src="assets/images/shop-image-3.jpg" class="w-100 h-100 object-fit-cover" alt="img">
												</div>
												<div class="shop-image-hover">
													<a class="btn btn-sm btn-outline-secondary  gap-10" href="product-single.html"> 	
														Add to Cart													
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_381_163)">
															<path d="M21 6.5H18C18 4.9087 17.3679 3.38258 16.2426 2.25736C15.1174 1.13214 13.5913 0.5 12 0.5C10.4087 0.5 8.88258 1.13214 7.75736 2.25736C6.63214 3.38258 6 4.9087 6 6.5H3C2.20435 6.5 1.44129 6.81607 0.87868 7.37868C0.31607 7.94129 0 8.70435 0 9.5L0 19.5C0.00158786 20.8256 0.528882 22.0964 1.46622 23.0338C2.40356 23.9711 3.67441 24.4984 5 24.5H19C20.3256 24.4984 21.5964 23.9711 22.5338 23.0338C23.4711 22.0964 23.9984 20.8256 24 19.5V9.5C24 8.70435 23.6839 7.94129 23.1213 7.37868C22.5587 6.81607 21.7956 6.5 21 6.5ZM12 2.5C13.0609 2.5 14.0783 2.92143 14.8284 3.67157C15.5786 4.42172 16 5.43913 16 6.5H8C8 5.43913 8.42143 4.42172 9.17157 3.67157C9.92172 2.92143 10.9391 2.5 12 2.5ZM22 19.5C22 20.2956 21.6839 21.0587 21.1213 21.6213C20.5587 22.1839 19.7956 22.5 19 22.5H5C4.20435 22.5 3.44129 22.1839 2.87868 21.6213C2.31607 21.0587 2 20.2956 2 19.5V9.5C2 9.23478 2.10536 8.98043 2.29289 8.79289C2.48043 8.60536 2.73478 8.5 3 8.5H6V10.5C6 10.7652 6.10536 11.0196 6.29289 11.2071C6.48043 11.3946 6.73478 11.5 7 11.5C7.26522 11.5 7.51957 11.3946 7.70711 11.2071C7.89464 11.0196 8 10.7652 8 10.5V8.5H16V10.5C16 10.7652 16.1054 11.0196 16.2929 11.2071C16.4804 11.3946 16.7348 11.5 17 11.5C17.2652 11.5 17.5196 11.3946 17.7071 11.2071C17.8946 11.0196 18 10.7652 18 10.5V8.5H21C21.2652 8.5 21.5196 8.60536 21.7071 8.79289C21.8946 8.98043 22 9.23478 22 9.5V19.5Z"/>
															</g>
															<defs>
															<clipPath id="clip0_381_163">
															<rect width="24" height="24" transform="translate(0 0.5)"/>
															</clipPath>
															</defs>
														</svg> 
													</a>
												</div>
											</div>
											<!-- shop-image-wrapper -->
											<a href="product-single.html" class="text-decoration-none">
												<div class="shopping-info-wrapper mt-3 mt-lg-4 d-flex justify-content-between">
													<div class="shopping-item-details">
														<h5 class="fw-semibold product-title">NOKEN - TONO</h5>
														<span class="product-price fs-5">$249.99</span>
													</div>
													<div>
													<span class="star-rating" >										
														<span class="star-fill" style="width: 100%;"></span>
													</span>
												</div>
												</div>
											</a>
										</div>									
									</div>
									<!-- swiper-slide-->	
									<div class="swiper-slide">
										<div class="shop-details">
											<div class="shop-image-wrapper position-relative">
												<div class="shop-image">
													<img src="assets/images/shop-image-4.jpg" class="w-100 h-100 object-fit-cover" alt="img">
												</div>
												<div class="shop-image-hover">
													<a class="btn btn-sm btn-outline-secondary  gap-10" href="product-single.html"> 	
														Add to Cart													
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_381_163)">
														<path d="M21 6.5H18C18 4.9087 17.3679 3.38258 16.2426 2.25736C15.1174 1.13214 13.5913 0.5 12 0.5C10.4087 0.5 8.88258 1.13214 7.75736 2.25736C6.63214 3.38258 6 4.9087 6 6.5H3C2.20435 6.5 1.44129 6.81607 0.87868 7.37868C0.31607 7.94129 0 8.70435 0 9.5L0 19.5C0.00158786 20.8256 0.528882 22.0964 1.46622 23.0338C2.40356 23.9711 3.67441 24.4984 5 24.5H19C20.3256 24.4984 21.5964 23.9711 22.5338 23.0338C23.4711 22.0964 23.9984 20.8256 24 19.5V9.5C24 8.70435 23.6839 7.94129 23.1213 7.37868C22.5587 6.81607 21.7956 6.5 21 6.5ZM12 2.5C13.0609 2.5 14.0783 2.92143 14.8284 3.67157C15.5786 4.42172 16 5.43913 16 6.5H8C8 5.43913 8.42143 4.42172 9.17157 3.67157C9.92172 2.92143 10.9391 2.5 12 2.5ZM22 19.5C22 20.2956 21.6839 21.0587 21.1213 21.6213C20.5587 22.1839 19.7956 22.5 19 22.5H5C4.20435 22.5 3.44129 22.1839 2.87868 21.6213C2.31607 21.0587 2 20.2956 2 19.5V9.5C2 9.23478 2.10536 8.98043 2.29289 8.79289C2.48043 8.60536 2.73478 8.5 3 8.5H6V10.5C6 10.7652 6.10536 11.0196 6.29289 11.2071C6.48043 11.3946 6.73478 11.5 7 11.5C7.26522 11.5 7.51957 11.3946 7.70711 11.2071C7.89464 11.0196 8 10.7652 8 10.5V8.5H16V10.5C16 10.7652 16.1054 11.0196 16.2929 11.2071C16.4804 11.3946 16.7348 11.5 17 11.5C17.2652 11.5 17.5196 11.3946 17.7071 11.2071C17.8946 11.0196 18 10.7652 18 10.5V8.5H21C21.2652 8.5 21.5196 8.60536 21.7071 8.79289C21.8946 8.98043 22 9.23478 22 9.5V19.5Z"/>
														</g>
														<defs>
														<clipPath id="clip0_381_163">
														<rect width="24" height="24" transform="translate(0 0.5)"/>
														</clipPath>
														</defs>
														</svg>  		
													</a>
												</div>
											</div>
											<!-- shop-image-wrapper -->
											<a href="product-single.html" class="text-decoration-none">
												<div class="shopping-info-wrapper mt-3 mt-lg-4 d-flex justify-content-between">
													<div class="shopping-item-details">
														<h5 class="fw-semibold product-title">Washbasins</h5>
														<span class="product-price fs-5">$499.99</span>
													</div>
													<div>
													<span class="star-rating" >										
														<span class="star-fill" style="width: 80%;"></span>
													</span>
												</div>
												</div>
											</a>
										</div>									
									</div>
									<!-- swiper-slide-->
									<div class="swiper-slide">
										<div class="shop-details">
											<div class="shop-image-wrapper position-relative">
												<div class="shop-image">
													<img src="assets/images/shop-image-1.jpg" class="w-100 h-100 object-fit-cover" alt="img">
												</div>
												<div class="shop-image-hover">
													<a class="btn btn-sm btn-outline-secondary  gap-10" href="product-single.html"> 	
														Add to Cart													
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g clip-path="url(#clip0_381_163)">
															<path d="M21 6.5H18C18 4.9087 17.3679 3.38258 16.2426 2.25736C15.1174 1.13214 13.5913 0.5 12 0.5C10.4087 0.5 8.88258 1.13214 7.75736 2.25736C6.63214 3.38258 6 4.9087 6 6.5H3C2.20435 6.5 1.44129 6.81607 0.87868 7.37868C0.31607 7.94129 0 8.70435 0 9.5L0 19.5C0.00158786 20.8256 0.528882 22.0964 1.46622 23.0338C2.40356 23.9711 3.67441 24.4984 5 24.5H19C20.3256 24.4984 21.5964 23.9711 22.5338 23.0338C23.4711 22.0964 23.9984 20.8256 24 19.5V9.5C24 8.70435 23.6839 7.94129 23.1213 7.37868C22.5587 6.81607 21.7956 6.5 21 6.5ZM12 2.5C13.0609 2.5 14.0783 2.92143 14.8284 3.67157C15.5786 4.42172 16 5.43913 16 6.5H8C8 5.43913 8.42143 4.42172 9.17157 3.67157C9.92172 2.92143 10.9391 2.5 12 2.5ZM22 19.5C22 20.2956 21.6839 21.0587 21.1213 21.6213C20.5587 22.1839 19.7956 22.5 19 22.5H5C4.20435 22.5 3.44129 22.1839 2.87868 21.6213C2.31607 21.0587 2 20.2956 2 19.5V9.5C2 9.23478 2.10536 8.98043 2.29289 8.79289C2.48043 8.60536 2.73478 8.5 3 8.5H6V10.5C6 10.7652 6.10536 11.0196 6.29289 11.2071C6.48043 11.3946 6.73478 11.5 7 11.5C7.26522 11.5 7.51957 11.3946 7.70711 11.2071C7.89464 11.0196 8 10.7652 8 10.5V8.5H16V10.5C16 10.7652 16.1054 11.0196 16.2929 11.2071C16.4804 11.3946 16.7348 11.5 17 11.5C17.2652 11.5 17.5196 11.3946 17.7071 11.2071C17.8946 11.0196 18 10.7652 18 10.5V8.5H21C21.2652 8.5 21.5196 8.60536 21.7071 8.79289C21.8946 8.98043 22 9.23478 22 9.5V19.5Z"/>
															</g>
															<defs>
															<clipPath id="clip0_381_163">
															<rect width="24" height="24" transform="translate(0 0.5)"/>
															</clipPath>
															</defs>
														</svg> 		
													</a>
												</div>
											</div>
											<!-- shop-image-wrapper -->
											<a href="product-single.html" class="text-decoration-none">
												<div class="shopping-info-wrapper mt-3 mt-lg-4 d-flex justify-content-between">
													<div class="shopping-item-details">
														<h5 class="fw-semibold product-title">Memento 2.0</h5>
														<span class="product-price fs-5">$134.99</span>
													</div>
													<div>
													<span class="star-rating" >										
														<span class="star-fill" style="width: 80%;"></span>
													</span>
												</div>
												</div>
											</a>
										</div>									
									</div>
									<!-- swiper-slide-->			
								</div>
								<!-- swiper-wrapper -->
							</div>
							<!-- swiper -->		
							<div class="container">
								<div class="shop-swiper-pagination-wrapper">
									<div class="shop-swiper-pagination"></div>						
									<div class="swiper-button-progress">	
										<div class="shop-progress-button-prev">
											<svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>
										</div>							
										<div class="shop-progress-button-next">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg> 
										</div>																
									</div>
								</div>							
							</div>										
						</div>
					</div>			
				</div>
				<!-- container -->				
			</section>
			<!--Product-Details Section ======================-->
			@endsection