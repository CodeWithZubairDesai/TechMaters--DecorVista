@extends('users.layout')

@section('title')

Product-Archieve

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
								<h2 class="fw-extra-bold heading-title separator lh-1">Design Elegance Emporium</h2>
								<div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
									<p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">Discover Unparalleled Luxury for Your Space</p>
								</div>
							</div>
						</div>
					</div>
					<!-- section-title-wrapper -->
				</div>
				<!-- section-full-width -->								
			</section>
			<!--Banner Section ======================-->



			<!--Shop Section ======================-->
			<section class="section-shop position-relative">
				<div class="container">
					<div class="row gx-4 gy-5 gy-lg-70 section-padding-lg">
						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-1.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Memento 2.0</h5>
											<span class="product-price fs-5">$134.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-2.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">SX Bathtubs</h5>
											<span class="product-price fs-5">$499.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>																				
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->	

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-3.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">NOKEN - TONO</h5>
											<span class="product-price fs-5">$249.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 90%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
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
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-5.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Collaro</h5>
											<span class="product-price fs-5">$134.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-6.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Pendant Lamp</h5>
											<span class="product-price fs-5">$499.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-7.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Pendant Lamp</h5>
											<span class="product-price fs-5">$249.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-8.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Scandal Wall Sconce</h5>
											<span class="product-price fs-5">$134.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-9.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Soft Facet</h5>
											<span class="product-price fs-5">$499.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-10.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Delírios Armchair</h5>
											<span class="product-price fs-5">$249.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-11.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Panthella Portable</h5>
											<span class="product-price fs-5">$134.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

						<div class="col-md-6 col-lg-4">
							<div class="shop-details">
								<div class="shop-image-wrapper position-relative">
									<div class="shop-image">
										<img src="assets/images/shop-image-12.jpg" class="w-100 h-100 object-fit-cover" alt="img">
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
											<h5 class="fw-semibold product-title">Ralik Modular System</h5>
											<span class="product-price fs-5">$249.99</span>
										</div>
										<div class="star-rating-wrap pt-1">
											<span class="star-rating" >										
												<span class="star-fill" style="width: 80%;"></span>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!-- col-4 -->

					</div>
					<!-- row -->

					<nav  aria-label="Page navigation">
						<ul class="pagination justify-content-center align-items-end position-relative">	
							<li class="page-item me-md-10">
								<a class="btn prev-btn prev-btn-sm me-10" href="#">
									<svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
									</svg>	
								</a>
							</li>
							<li class="page-item"><a class="page-link active fw-semibold next-btn next-btn-sm" href="#">01</a></li>
							<li class="page-item"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">02</a></li>
							<li class="page-item me-2 me-md-3"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">03</a></li>
							<li class="page-item mx-md-1">
								<svg width="29" height="5" viewBox="0 0 29 5" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="2.5" cy="2.5" r="2.5" fill="#253B2F"/>
									<circle cx="14.5" cy="2.5" r="2.5" fill="#253B2F"/>
									<circle cx="26.5" cy="2.5" r="2.5" fill="#253B2F"/>
								</svg> 
							</li>							
							<li class="page-item mx-2 mx-md-3"><a class="page-link fw-semibold next-btn next-btn-sm" href="#">37</a></li>							
							<li class="page-item">
								<a class="btn btn-primary btn-lg d-inline-flex gap-10" href="#">Next
									<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
									</svg>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>			
			<!--Shop Section ======================-->
			
			

			<!--Feedback Section ======================-->
			<section class="section-feedback feedback-1 text-secondary">
				<div class="container">
					<div class="feedback-wrapper position-relative">
						<div class="feedback-content d-flex flex-column gap-4 flex-lg-row align-items-lg-end justify-content-lg-around">
							<h2 class="fw-extra-bold feedback-title">Drop Us a Line</h2>
							<div class="architronix-button">
								<a href="contact-2.html" class="btn btn-secondary gap-10"> 
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