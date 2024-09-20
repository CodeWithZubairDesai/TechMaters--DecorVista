@extends('users.layout')
@section('title')
Portfolio Detail
@endsection
@section('main')


			<!--Hero Section ======================-->
			<div class="section-hero hero-2 section-padding-xxl position-relative max-width">				
				<img src="assets/images/project-hero-image.jpg" class="img-fluid" alt="hero-image">
			</div>
			<!--Hero Section ======================-->


			<!--Section ======================-->
			<section class="section-full-width position-relative">

			<div class="container">	
        <div class="section-padding-xxl">
            <div class="position-relative">
                <div class="row g-40">
                    <div class="col-lg-7 col-xxl-8">
                        <div class="section-title section-separator">
                            <h2 class="fw-extra-bold heading-title separator lh-1">{{ $portfolio->title }}</h2>
                            <p class="fs-4 mb-0 subtitle">{{ $portfolio->description }}</p>	
                        </div>
                    </div>
                    <div class="col-lg-5 col-xxl-4">									
                        <div class="project-details-wrapper project-details-style bg-primary text-secondary">
                            <h4 class="project-details-title fw-semibold">{{ $portfolio->project_name }}</h4>
                            <ul class="project-details-list list-unstyled mb-0 d-flex flex-row flex-lg-column flex-wrap flex-lg-nowrap">
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Clients:</span>
                                    <span>{{ $portfolio->client_name }}</span>
                                </li>
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Area:</span>
                                    <span>{{ $portfolio->area }}</span>
                                </li>									
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Project year:</span>
                                    <span>{{ $portfolio->year }}</span>
                                </li>
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Project type:</span>
                                    <span>{{ $portfolio->project_type }}</span>
                                </li>
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Location:</span>
                                    <span>{{ $portfolio->location }}</span>
                                </li>
                                <li class="d-flex flex-column gap-2 gap-xxl-10">
                                    <span class="fs-5 fw-bold">Team:</span>
                                    <span>{{ $portfolio->team }}</span>
                                </li>		
                                <li class="architronix-button">
                                    <a href="#" class="btn btn-outline-secondary gap-10" data-bs-toggle="modal" data-bs-target="#technicalSheetModal">Technical Sheet
                                        <span class="arrow-down">
                                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"></path>
                                            </svg>
                                        </span> 
                                    </a>
                                </li>
                            </ul>
                        </div>																		
                    </div>
                </div>
            </div>						
        </div>											
    	</div>		
    	<!-- container -->

				<div class="image-contents d-flex flex-column flex-xl-row align-items-xl-center gap-4 section-padding-md position-relative px-10 px-lg-0">
					<img src="{{ asset('user_assets/assets/images/project-image-1.jpg')}}" class="img-fluid wow fadeIn" alt="img" data-wow-delay=".3s">
					<img src="{{ asset('user_assets/assets/images/project-image-2.jpg')}}" class="img-fluid wow fadeIn" alt="img" data-wow-delay=".4s">
				</div>
				
				<div class="section-padding-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title section-separator">						
                        <p class="mb-0 subtitle py-2 py-lg-4">{{ $portfolio->details }}</p>	
                    </div>
                </div>
            </div>					
        </div>
    </div>


				<div class="project-gallery-1 section-padding-lg">
					<div class="swiper-custom-progress position-relative">
						<div class="swiper project-gallery-swiper">
							<div class="swiper-wrapper"> 
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-3.jpg" class="image-link"><img src="assets/images/project-image-3.jpg" alt="img"></a>
									</div>
								</div>
								<!-- swiper-slide-->	
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-4.jpg" class="image-link"><img src="assets/images/project-image-4.jpg" alt="img"></a>	
									</div>
								</div>
								<!-- swiper-slide-->			
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-5.jpg" class="image-link"><img src="assets/images/project-image-5.jpg" alt="img"></a>	
									</div>
								</div>
								<!-- swiper-slide-->								
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-3.jpg" class="image-link"><img src="assets/images/project-image-3.jpg" alt="img"></a>
									</div>
								</div>
								<!-- swiper-slide-->	
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-4.jpg" class="image-link"><img src="assets/images/project-image-4.jpg" alt="img"></a>	
									</div>
								</div>
								<!-- swiper-slide-->			
								<div class="swiper-slide">
									<div>
										<a href="assets/images/project-image-5.jpg" class="image-link"><img src="assets/images/project-image-5.jpg" alt="img"></a>	
									</div>
								</div>
								<!-- swiper-slide-->
										
							</div>
							<!-- swiper-wrapper -->
						</div>
						<!-- swiper -->
						<div class="container">
							<div class="project-swiper-pagination-wrapper mt-xl-3">
								<div class="project-swiper-pagination"></div>						
								<div class="swiper-button-progress">	
									<div class="project-progress-button-prev">
										<svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
										</svg>
									</div>							
									<div class="project-progress-button-next">
										<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
										</svg> 
									</div>																
								</div>
							</div>							
						</div>
					</div>
				</div>

				    <!-- Project Gallery -->
						<div class="project-gallery-1 section-padding-lg">
        <div class="swiper-custom-progress position-relative">
            <div class="swiper project-gallery-swiper">
                <div class="swiper-wrapper"> 
                    @foreach($portfolio->gallery_images as $image)
                        <div class="swiper-slide">
                            <div>
                                <a href="{{ asset('user_assets/' . $image) }}" class="image-link"><img src="{{ asset('user_assets/' . $image) }}" alt="Gallery Image"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- swiper-wrapper -->
            </div>
            <!-- swiper -->
            <div class="container">
                <div class="project-swiper-pagination-wrapper mt-xl-3">
                    <div class="project-swiper-pagination"></div>						
                    <div class="swiper-button-progress">	
                        <div class="project-progress-button-prev">
                            <svg class="arrow-reverse" width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
                            </svg>
                        </div>							
                        <div class="project-progress-button-next">
                            <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
                            </svg> 
                        </div>																
                    </div>
                </div>							
            </div>
        </div>
    </div>


				

				<div class="credits">
					<div class="section-title-wrapper position-relative">
						<div class="scroll-move">
							<span class="scrolling-text display-1 fw-extra-bold stroke-title text-stroke stroke-opacity-20 stroke-width-1 stroke-primary lh-1">Credits</span>
						</div>					
						
						<div class="container">	
							<div class="section-title section-separator">
								<h2 class="fw-extra-bold heading-title separator lh-1">Creative Collaborators</h2>
								<div class="d-flex flex-column flex-lg-row gap-4 align-items-lg-end justify-content-lg-between">
									<p class="fs-4 fw-semibold mb-0 subtitle subtitle-width">The Talented Team Behind 'Elegant Urban Oasis</p>
								</div>
							</div>
						</div>
					</div>
					<!-- section-title-wrapper -->
					<div class="container">
						<div class="section-padding-xxl">
							<div class="row align-items-lg-center gx-30 gx-md-40 gy-5 gy-lg-90">
								<div class="col-md-6">
									<div class="author-wrapper d-flex flex-column flex-lg-row align-items-lg-center">
										<div class="author-image">
											<div class="overflow-hidden">
												<img src="assets/images/team-13.jpg" class="wow slideInLeft" alt="img">
											</div>											
										</div>
										<div class="author-info">
											<h5>Michael Johnson</h5>
											<span class="fw-bold">Lead Designer</span>
											<p class="mb-0 author-descriptions">As the lead designer, Michael brought creativity and innovation to the project. His visionary approach guided the entire design process.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="author-wrapper d-flex flex-column flex-lg-row align-items-lg-center">
										<div class="author-image">
											<div class="overflow-hidden">
												<img src="assets/images/team-14.jpg" class="wow slideInLeft" alt="img">
											</div>											
										</div>
										<div class="author-info">
											<h5>Emily Scott</h5>
											<span class="fw-bold">Interior Stylist</span>
											<p class="mb-0 author-descriptions">Emily added the finishing touches, selecting furnishings, colors, and accessories to infuse the space with elegance.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="author-wrapper d-flex flex-column flex-lg-row align-items-lg-center">
										<div class="author-image">
											<div class="overflow-hidden">
												<img src="assets/images/team-15.jpg" class="wow slideInLeft" alt="img">
											</div>											
										</div>
										<div class="author-info">
											<h5>Mark Anderson</h5>
											<span class="fw-bold">Project Manager</span>
											<p class="mb-0 author-descriptions">Anderson managed the project's execution, ensuring that it stayed on schedule and within budget, while maintaining quality and design integrity.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="author-wrapper d-flex flex-column flex-lg-row align-items-lg-center">
										<div class="author-image">
											<div class="overflow-hidden">
												<img src="assets/images/team-16.jpg" class="wow slideInLeft" alt="img">
											</div>											
										</div>
										<div class="author-info">
											<h5>Sarah Roberts</h5>
											<span class="fw-bold">Architect</span>
											<p class="mb-0 author-descriptions">Sarah was responsible for architectural planning and ensuring the project's structural integrity, harmonizing the design with functionality.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- row -->
						</div>
					</div>
				</div>						
			</section>
			<!--Section ======================-->



			
			

@endsection
