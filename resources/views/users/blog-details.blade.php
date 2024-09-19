@extends('users.layout')

@section('title')

Blog Details

@endsection
@section('main')

			<!--Banner Section ======================-->			
			<div class="blog-single-image position-relative max-width">
				<div class="overlay">					
					<picture>						
						<source media="(max-width:530px)" srcset="assets/images/blog-single-image-sm.jpg')}}">
						<img src="{{ asset('user_assets/assets/images/blog-single-image.jpg')}}" class="w-100 h-100 object-fit-cover" alt="hero-image">
					</picture> 
				</div>
				<div class="container">
					<div class="blog-single-text position-absolute">
						<h5 class="display-3 fw-extra-bold mb-0">{{$blog->title}}</h5>
						<ul class="contact-lists list-unstyled mb-0 d-flex">
                            <li>{{ \Carbon\Carbon::parse($blog->date)->format('d F \'y') }} / {{ $blog->created_by }}</li>
							<li>Interior</li>
							<li>5 min read</li>
						</ul>
					</div>
				</div>
			</div>			
			<!--Banner Section ======================-->


			<!--Blog-single Section ======================-->
			<section class="section-blog-single position-relative">
				<div class="container">
					<div class="row gy-5 justify-content-between">
						<div class="col-lg-7">
							<div class="blog-inner">

								<div class="wp-block-tag-cloud d-flex pt-30 pt-lg-70 flex-wrap mb-30">
									<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Art and Decor</a>
									<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Modern Living</a>
									<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Renovations</a>
									<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Vintage Style</a>									
								</div>

								<div class="d-flex gap-30 align-items-center">

									<h6 class="mb-0">Share on:</h6>
									<a href="#" class="text-decoration-none link-hover-animation-1 text-uppercase fw-semibold">fb</a>
									<a href="#" class="text-decoration-none link-hover-animation-1 text-uppercase fw-semibold">be</a>
									<a href="#" class="text-decoration-none link-hover-animation-1 text-uppercase fw-semibold">tw</a>
									<a href="#" class="text-decoration-none link-hover-animation-1 text-uppercase fw-semibold">li</a>

								</div>
								
							</div>
							<!-- blog-inner -->
						</div>
						<!-- col-7 -->
						<div class="col-lg-4">
							<div class="d-flex flex-column gap-5 gap-lg-70 sticky-elements pb-lg-4">

								<div class="widget">
									<h5 class="display-5 fw-semibold mb-30 lh-1">Search</h5>
									<form action="#" class="contact-form">
										<div>
											<input type="text" class="form-control" id="formInput" placeholder="Type & Hit Enter">
										</div>										  
									</form>
								</div>
								<!-- widget -->

								<div class="widget">
									<h5 class="display-5 fw-semibold mb-30 lh-1">Categories</h5>
									<ul class="category-lists list-unstyled mb-0 d-flex flex-column gap-20">
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Design Inspiration<span class="fw-bold"> (15)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Room Makeovers<span class="fw-bold"> (7)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Color and Decor<span class="fw-bold"> (8)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Home Improvement<span class="fw-bold"> (20)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Sustainable Design<span class="fw-bold"> (4)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Art and Decor<span class="fw-bold"> (9)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Space Planning<span class="fw-bold"> (15)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Client Success Stories<span class="fw-bold"> (25)</span></a> 
										</li>
										<li class="d-flex align-items-center gap-4">
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>	
											<a href="#" class="text-decoration-none link-hover-animation-1">Design Trends<span class="fw-bold"> (3)</span></a> 
										</li>
									</ul>
								</div>
								<!-- widget -->

								<div class="widget">
									<h5 class="display-5 fw-semibold mb-30 lh-1">Tags</h5>
									<div class="wp-block-tag-cloud d-flex flex-wrap">
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Color Schemes</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Furniture Design</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">DIY Projects</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Space Planning</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Styling Tips</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Art and Decor</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Modern Living</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Renovations</a>
										<a href="#" class="text-decoration-none tag-cloud-link btn-hover-animation-3">Vintage Style</a>
									</div>
								</div>
								<!-- widget -->

								<div class="widget">
									<h5 class="display-5 fw-semibold mb-5 lh-1">Recent Posts</h5>
									<div class="row g-30">
										<div class="col-6 col-lg-12">
											<div class="d-flex flex-column flex-lg-row gap-3 gap-lg-4 align-items-lg-center">
												<div class="post-image">
													<img src="{{ asset('user_assets/assets/images/recent-post-image-1.png')}}" alt="img">
												</div>
												<div class="post-heading">
													<h5 class="fw-semibold"><a href="#" class="text-decoration-none link-hover-animation-1">The Modern Home Office: Designing...</a></h5>
													<span>23 November '23</span>
												</div>
											</div>
										</div>
										<div class="col-6 col-lg-12">
											<div class="d-flex flex-column flex-lg-row gap-3 gap-lg-4 align-items-lg-center">
												<div class="post-image">
													<img src="{{ asset('user_assets/assets/images/recent-post-image-2.png')}}" alt="img">
												</div>
												<div class="post-heading">
													<h5 class="fw-semibold"><a href="#" class="text-decoration-none link-hover-animation-1">Lighting the Way: Illuminating ...</a></h5>
													<span>23 November '23</span>
												</div>
											</div>
										</div>
										<div class="col-6 col-lg-12">
											<div class="d-flex flex-column flex-lg-row gap-3 gap-lg-4 align-items-lg-center">
												<div class="post-image">
													<img src="{{ asset('user_assets/assets/images/recent-post-image-3.png')}}" alt="img">
												</div>
												<div class="post-heading">
													<h5 class="fw-semibold"><a href="#" class="text-decoration-none link-hover-animation-1">The Modern Home Office: Designing...</a></h5>
													<span>23 November '23</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- widget -->
							</div>
						</div>
						<!-- col-4 -->
					</div>
				</div>
			</section>
			<!--Blog-single Section ======================-->



			<!--Next-Prev Post Section ======================-->
			<section class="section-next-prev-post position-relative py-5 z-1">
				<div class="container">
					<div class="post-wrapper">
						<div class="row justify-content-lg-between align-items-lg-center gy-4 gy-lg-0">
							<div class="col-lg-6 col-xl-7 col-xxl-8">
								<div class="d-flex align-items-center gap-20 post-left-content">
									<a href="blog-left-sidebar.html" class="text-decoration-none">
										<svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
										</svg>
									</a>							
									<h5 class="mb-0 fw-semibold post-title">
										<a href="blog-left-sidebar.html" class="text-decoration-none link-hover-animation-1">Sustainable Living: Eco-Friendly Design Choices for Your Home</a>
									</h5>													
								</div>
							</div>

							<div class="col-lg-6 col-xl-5 col-xxl-4">
								<div class="d-flex align-items-center gap-20  text-end justify-content-end">		
									<h5 class="mb-0 fw-semibold post-title">
										<a href="blog-right-sidebar.html" class="text-decoration-none link-hover-animation-1">Art in Design: Incorporating Master pieces into Your Space</a>
									</h5>	
									<a href="blog-right-sidebar.html" class="text-decoration-none">
										<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
										</svg>	
									</a>																		
								</div>
							</div>			
						</div>
					</div>					
				</div>				
			</section>
			<!--Next-Prev Post Section ======================-->


			<!--Comment Section ======================-->
			<section class="section-comment position-relative pb-4 pb-lg-40">
				<div class="container">
					<div class="row gy-40 gy-lg-70">
						<div class="col-lg-7">
							<div class="section-comment-inner">
								<h4 class="display-5 mb-4 mb-lg-30 pt-lg-70">Comments (32)</h4>
								<div class="d-flex gap-10 gap-md-3 gap-lg-4">
									<div class="author-image-wrapper">
										<img src="{{ asset('user_assets/assets/images/author-1.png')}}" alt="image">
									</div>
									<div>
										<h5 class="mb-2"><a href="#" class="text-decoration-none link-hover-animation-1">Philip Reyes</a></h5>
										<p class="mb-10">
											Small apartments can be a canvas for creativity and innovation. By following these tips and making thoughtful design choices, you can transform your compact living space into a int functional, inviting home that combines style and comfort.
										</p>
										<h6 class="mb-30"><a href="#" class="text-decoration-none link-hover-animation-1">Reply</a></h6>
										<div class="d-flex gap-10 gap-md-3 gap-lg-4">
											<div class="author-image-wrapper">
												<img src="{{ asset('user_assets/assets/images/author-2.png')}}" alt="image">
											</div>
											<div>
												<h5 class="mb-2"><a href="#" class="text-decoration-none link-hover-animation-1">Melissa McClone</a></h5>
												<p class="mb-10">
													By following these tips and making thoughtful design choices, you can transform your compact living space into a int functiona.
												</p>
												<h6 class="mb-2"><a href="#" class="text-decoration-none link-hover-animation-1">Reply</a></h6>												
											</div>
										</div>										
									</div>
								</div>
							</div>
							
						</div>
						<!-- col-8 -->

						<div class="col-lg-7">
							<h4 class="display-5 mb-4 mb-lg-30">Leave a comment</h4>

							<form id="contactForm" class="contact-form row g-4">										
								<div class="col-12">
									<textarea class="form-control" id="InputMessage" name="InputMessage" rows="5" placeholder="Write your comment"></textarea>
								</div>		
								<div class="col-md-6">
									<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Your email*" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name*" required>
								</div>
								<div class="col-12">
									<div class="text-lg-end">
										<button type="submit" class="btn btn-primary gap-10">Submit 							
											<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
											</svg>							
										</button>
									</div>									
								</div>	
								<div class="response py-3"></div>											  
							</form>
						</div>
					</div>
					<!-- row -->
				</div>
				<!-- container -->			
			</section>
			<!--Comment Section ======================-->


			
			<!--Blog-swiper ======================-->
			<div class="container">				
				<h4 class="mb-4 mb-lg-30 position-relative">Related Post</h4>
				<div class="swiper blog-swiper">
					<div class="swiper-wrapper"> 
						<div class="swiper-slide">
							<div class="blog-wrapper">
								<div class="blog-image">
									<img src="{{ asset('user_assets/assets/images/blog-image-1.jpg')}}" class="img-fluid" alt="img">
								</div>
								<div class="blog-details">
									<p>14 December '23 / Interior</p>
									<h5 class="blog-title fs-5 fw-semibold"><a href="blog-single.html" class="link-hover-animation-1 stretched-link text-decoration-none">The Art of Harmonious Color Schemes in Interior Design</a></h5>
								</div>
							</div>									
						</div>
						<!-- swiper-slide-->
						<div class="swiper-slide">
							<div class="blog-wrapper">
								<div class="blog-image">
									<img src="{{ asset('user_assets/assets/images/blog-image-2.jpg')}}" class="img-fluid" alt="img">
								</div>
								<div class="blog-details">
									<p>23 November '23 / Interior</p>
									<h5 class="blog-title fs-5 fw-semibold"><a href="blog-single.html" class="link-hover-animation-1 stretched-link text-decoration-none">Creating Timeless Elegance: Classic vs. Contemporary Styles</a></h5>
								</div>
							</div>									
						</div>
						<!-- swiper-slide-->
						<div class="swiper-slide">
							<div class="blog-wrapper">
								<div class="blog-image">
									<img src="{{ asset('user_assets/assets/images/blog-image-3.jpg')}}" class="img-fluid" alt="img">
								</div>
								<div class="blog-details">
									<p>15 November '23 / Interior</p>
									<h5 class="blog-title fs-5 fw-semibold"><a href="blog-single.html" class="link-hover-animation-1 stretched-link text-decoration-none">Maximizing Small Spaces: Tips for Cozy Apartment Living</a></h5>
								</div>
							</div>									
						</div>
						<!-- swiper-slide-->	
						<div class="swiper-slide">
							<div class="blog-wrapper">
								<div class="blog-image">
									<img src="{{ asset('user_assets/assets/images/blog-image-2.jpg')}}" class="img-fluid" alt="img">
								</div>
								<div class="blog-details">
									<p>23 November '23 / Interior</p>
									<h5 class="blog-title fs-5 fw-semibold"><a href="blog-single.html" class="link-hover-animation-1 stretched-link text-decoration-none">Creating Timeless Elegance: Classic vs. Contemporary Styles</a></h5>
								</div>
							</div>									
						</div>
						<!-- swiper-slide-->		
					</div>
					<!-- swiper-wrapper -->
				</div>
				<!-- swiper -->	
			</div>
			<!--Blog-swiper ======================-->
			

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