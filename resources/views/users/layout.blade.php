
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
        <meta name="theme-color"  content="#253b2f">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Architronix description contents">
		<title>Tech Masters | @yield('title')</title>
		<link rel="shortcut icon" type="images/png" href="{{ asset('user_assets/assets/images/fav-icon/favicon.ico')}}">

		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/toastify.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/toastify.min.js"></script>

		<!-- Bootstrap Cdn -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- DataTables CSS -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

		<!-- Additional CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.21.1/tagify.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/swiper-bundle.min.css')}}">
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/odometer.css')}}">
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/leaflet.css')}}">		
		<link rel="stylesheet" href="{{ asset('user_assets/assets/css/style.css')}}">
		 <link rel="stylesheet" href="{{ asset('user_assets/assets/css/theme.css')}}"> 

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- Ensure this is the only jQuery inclusion -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

		     <!-- Additional Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.21.1/tagify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @stack('styles')     
		
	</head>



	<body>
		<div class="page">


			<div class="preloader">				
				<dotlottie-player src="https://lottie.host/f049e307-d4b6-40be-812e-2ac589351070/5JgAg32Se6.json" background="transparent" speed=".9" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
				<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
			</div>

			<div class="w-100 h-100 position-fixed top-0 start-0 page-lines">
				<div class="container position-relative h-100">
					<span class="page-line-start position-absolute h-100"></span>
					<span class="page-line-end position-absolute h-100"></span>	
					<span class="page-line-inner position-absolute h-100 d-none d-xl-block"></span>					
				</div>
			</div>		

			<!--Header Section ======================-->
			<header class="section-header header-1 architronix-nav sticky-navbar header-bg-2 header-shadow">	
				<nav class="navbar navbar-expand-xl navbar-light nav-border hover-menu" aria-label="Offcanvas navbar large">	
					<div class="container-fluid max-width">										
						<div class="d-flex align-items-end">
							<a class="navbar-brand py-0" href="index.html">
								<span class="logo">
													<img src="{{asset('user_assets/assets/admin_assets/assets/images/logo.png')}}" alt="logo">
									<svg width="219" height="31" viewBox="0 0 219 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M196.212 30.2799L203.852 19.3199L196.172 8.43994H203.132L208.892 16.9199H205.852L211.612 8.43994H218.572L210.892 19.3199L218.492 30.2799H211.572L205.932 21.7999H208.812L203.172 30.2799H196.212Z"/>
									<path d="M187.541 30.28V8.43998H193.541V30.28H187.541ZM187.541 6.47998V0.47998H193.541V6.47998H187.541Z"/>
									<path d="M163.596 30.28V8.43996H169.196V12.76L168.876 11.8C169.383 10.4933 170.196 9.5333 171.316 8.91996C172.463 8.27996 173.796 7.95996 175.316 7.95996C176.969 7.95996 178.409 8.30663 179.636 8.99996C180.889 9.69329 181.863 10.6666 182.556 11.92C183.249 13.1466 183.596 14.5866 183.596 16.24V30.28H177.596V17.52C177.596 16.6666 177.423 15.9333 177.076 15.32C176.756 14.7066 176.289 14.2266 175.676 13.88C175.089 13.5333 174.396 13.36 173.596 13.36C172.823 13.36 172.129 13.5333 171.516 13.88C170.903 14.2266 170.423 14.7066 170.076 15.32C169.756 15.9333 169.596 16.6666 169.596 17.52V30.28H163.596Z"/>
									<path d="M148.381 30.76C146.221 30.76 144.248 30.2666 142.461 29.28C140.701 28.2933 139.288 26.9466 138.221 25.24C137.181 23.5066 136.661 21.5466 136.661 19.36C136.661 17.1466 137.181 15.1866 138.221 13.48C139.288 11.7733 140.701 10.4266 142.461 9.43996C144.248 8.4533 146.221 7.95996 148.381 7.95996C150.541 7.95996 152.501 8.4533 154.261 9.43996C156.021 10.4266 157.421 11.7733 158.461 13.48C159.528 15.1866 160.061 17.1466 160.061 19.36C160.061 21.5466 159.528 23.5066 158.461 25.24C157.421 26.9466 156.021 28.2933 154.261 29.28C152.501 30.2666 150.541 30.76 148.381 30.76ZM148.381 25.36C149.474 25.36 150.421 25.1066 151.221 24.6C152.048 24.0933 152.688 23.3866 153.141 22.48C153.621 21.5733 153.861 20.5333 153.861 19.36C153.861 18.1866 153.621 17.16 153.141 16.28C152.688 15.3733 152.048 14.6666 151.221 14.16C150.421 13.6266 149.474 13.36 148.381 13.36C147.288 13.36 146.328 13.6266 145.501 14.16C144.674 14.6666 144.021 15.3733 143.541 16.28C143.088 17.16 142.861 18.1866 142.861 19.36C142.861 20.5333 143.088 21.5733 143.541 22.48C144.021 23.3866 144.674 24.0933 145.501 24.6C146.328 25.1066 147.288 25.36 148.381 25.36Z"/>
									<path d="M122.112 30.28V8.43995H127.712V13.68L127.312 12.92C127.792 11.08 128.578 9.83995 129.672 9.19995C130.792 8.53329 132.112 8.19995 133.632 8.19995H134.912V13.4H133.032C131.565 13.4 130.378 13.8533 129.472 14.76C128.565 15.64 128.112 16.8933 128.112 18.52V30.28H122.112Z"/>
									<path d="M115.796 30.52C113.156 30.52 111.102 29.8133 109.636 28.4C108.196 26.96 107.476 24.96 107.476 22.4V13.64H103.796V8.43998H103.996C105.116 8.43998 105.969 8.15998 106.556 7.59998C107.169 7.03998 107.476 6.19998 107.476 5.07998V3.47998H113.476V8.43998H118.596V13.64H113.476V22C113.476 22.7466 113.609 23.3733 113.876 23.88C114.142 24.36 114.556 24.72 115.116 24.96C115.676 25.2 116.369 25.32 117.196 25.32C117.382 25.32 117.596 25.3066 117.836 25.28C118.076 25.2533 118.329 25.2266 118.596 25.2V30.28C118.196 30.3333 117.742 30.3866 117.236 30.44C116.729 30.4933 116.249 30.52 115.796 30.52Z"/>
									<path d="M94.885 30.28V8.43998H100.885V30.28H94.885ZM94.885 6.47998V0.47998H100.885V6.47998H94.885Z"/>
									<path d="M70.9397 30.28V0H76.9397V12.76L76.2197 11.8C76.7264 10.4933 77.5397 9.53333 78.6597 8.92C79.8064 8.28 81.1397 7.96 82.6597 7.96C84.313 7.96 85.753 8.30667 86.9797 9C88.233 9.69333 89.2064 10.6667 89.8997 11.92C90.593 13.1467 90.9397 14.5867 90.9397 16.24V30.28H84.9397V17.52C84.9397 16.6667 84.7664 15.9333 84.4197 15.32C84.0997 14.7067 83.633 14.2267 83.0197 13.88C82.433 13.5333 81.7397 13.36 80.9397 13.36C80.1664 13.36 79.473 13.5333 78.8597 13.88C78.2464 14.2267 77.7664 14.7067 77.4197 15.32C77.0997 15.9333 76.9397 16.6667 76.9397 17.52V30.28H70.9397Z"/>
									<path d="M57.2064 30.76C55.0198 30.76 53.0464 30.2666 51.2864 29.28C49.5531 28.2666 48.1664 26.8933 47.1264 25.16C46.1131 23.4266 45.6064 21.48 45.6064 19.32C45.6064 17.16 46.1131 15.2266 47.1264 13.52C48.1398 11.7866 49.5264 10.4266 51.2864 9.43996C53.0464 8.4533 55.0198 7.95996 57.2064 7.95996C58.8331 7.95996 60.3398 8.23996 61.7264 8.79996C63.1131 9.35996 64.2998 10.1466 65.2864 11.16C66.2731 12.1466 66.9798 13.32 67.4064 14.68L62.2064 16.92C61.8331 15.8266 61.1931 14.96 60.2864 14.32C59.4064 13.68 58.3798 13.36 57.2064 13.36C56.1664 13.36 55.2331 13.6133 54.4064 14.12C53.6064 14.6266 52.9664 15.3333 52.4864 16.24C52.0331 17.1466 51.8064 18.1866 51.8064 19.36C51.8064 20.5333 52.0331 21.5733 52.4864 22.48C52.9664 23.3866 53.6064 24.0933 54.4064 24.6C55.2331 25.1066 56.1664 25.36 57.2064 25.36C58.4064 25.36 59.4464 25.04 60.3264 24.4C61.2064 23.76 61.8331 22.8933 62.2064 21.8L67.4064 24.08C67.0064 25.36 66.3131 26.5066 65.3264 27.52C64.3398 28.5333 63.1531 29.3333 61.7664 29.92C60.3798 30.48 58.8598 30.76 57.2064 30.76Z"/>
									<path d="M31.0569 30.28V8.43995H36.6569V13.68L36.2569 12.92C36.7369 11.08 37.5236 9.83995 38.6169 9.19995C39.7369 8.53329 41.0569 8.19995 42.5769 8.19995H43.8569V13.4H41.9769C40.5102 13.4 39.3236 13.8533 38.4169 14.76C37.5102 15.64 37.0569 16.8933 37.0569 18.52V30.28H31.0569Z"/>
									<path d="M0 30.28L10.08 0.47998H18.32L28.4 30.28H21.64L19.64 24.2H8.72L6.72 30.28H0ZM10.44 18.8H17.92L13.36 4.71998H15.04L10.44 18.8Z"/>
									</svg>
								</span>						
							</a>
							<div class="dropdown text-uppercase fw-semibold d-block d-xl-none" >
								<a href="#" class="text-decoration-none dropdown-language nav-link-icon d-flex align-items-center gap-1" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
									en 
									<!-- <span class="dropdown-icon-2">
										<svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.396 0.673999L2.484 0.673999L5.238 7.028L4.5 7.028L7.272 0.673999L9.36 0.673999L5.85 8.648L3.906 8.648L0.396 0.673999Z"/>
										</svg>
									</span> -->
									<span class="dropdown-icon">
										<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11 8L6 2L1 8"/>
										</svg> 
									</span>
								</a>
								
								<ul class="dropdown-menu dropdown-menu-style-2">
									<li >
										<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="admin_admin_assets/assets/admin_assets/assets/images/flag-us.png')}}" alt="flag-us">
											<span class="text-uppercase">en</span>
										</a>											
									</li>	
									<li >
										<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="admin_admin_assets/assets/admin_assets/assets/images/flag-de.png')}}" alt="flag-de">
											<span class="text-uppercase">de</span>
										</a>											
									</li>
									<li >
										<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="admin_admin_assets/assets/admin_assets/assets/images/flag-fr.png')}}" alt="flag-fr">
											<span class="text-uppercase">fr</span>
										</a>											
									</li>
									<li >
										<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="{{ asset('user_assets/assets/images/flag-ar.png')}}" alt="flag-ar">
											<span class="text-uppercase">ar</span>
										</a>											
									</li>										
								</ul>
							</div>
						</div>
						<a href="javascript:void(0)" class="toggler-icon text-decoration-none d-block d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#architronixNavbar" aria-controls="architronixNavbar" aria-label="Toggle navigation">
							<svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="1.5" y1="1.5" x2="38.5" y2="1.5" stroke="#253B2F" stroke-width="3" stroke-linecap="round"/>
								<line x1="1.5" y1="11.5" x2="38.5" y2="11.5" stroke="#253B2F" stroke-width="3" stroke-linecap="round"/>
								<line x1="21.5" y1="21.5" x2="38.5" y2="21.5" stroke="#253B2F" stroke-width="3" stroke-linecap="round"/>
							</svg> 
						</a>
						<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="architronixNavbar" aria-labelledby="architronixNavbarLabel">
							<div class="offcanvas-header">
								<span class="offcanvas-title" id="architronixNavbarLabel">
									<span class="logo">
											<img src="{{ asset('user_assets/assets/images/logo.png')}}" alt="logo">										
										<svg width="219" height="31" viewBox="0 0 219 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M196.212 30.2799L203.852 19.3199L196.172 8.43994H203.132L208.892 16.9199H205.852L211.612 8.43994H218.572L210.892 19.3199L218.492 30.2799H211.572L205.932 21.7999H208.812L203.172 30.2799H196.212Z"/>
										<path d="M187.541 30.28V8.43998H193.541V30.28H187.541ZM187.541 6.47998V0.47998H193.541V6.47998H187.541Z"/>
										<path d="M163.596 30.28V8.43996H169.196V12.76L168.876 11.8C169.383 10.4933 170.196 9.5333 171.316 8.91996C172.463 8.27996 173.796 7.95996 175.316 7.95996C176.969 7.95996 178.409 8.30663 179.636 8.99996C180.889 9.69329 181.863 10.6666 182.556 11.92C183.249 13.1466 183.596 14.5866 183.596 16.24V30.28H177.596V17.52C177.596 16.6666 177.423 15.9333 177.076 15.32C176.756 14.7066 176.289 14.2266 175.676 13.88C175.089 13.5333 174.396 13.36 173.596 13.36C172.823 13.36 172.129 13.5333 171.516 13.88C170.903 14.2266 170.423 14.7066 170.076 15.32C169.756 15.9333 169.596 16.6666 169.596 17.52V30.28H163.596Z"/>
										<path d="M148.381 30.76C146.221 30.76 144.248 30.2666 142.461 29.28C140.701 28.2933 139.288 26.9466 138.221 25.24C137.181 23.5066 136.661 21.5466 136.661 19.36C136.661 17.1466 137.181 15.1866 138.221 13.48C139.288 11.7733 140.701 10.4266 142.461 9.43996C144.248 8.4533 146.221 7.95996 148.381 7.95996C150.541 7.95996 152.501 8.4533 154.261 9.43996C156.021 10.4266 157.421 11.7733 158.461 13.48C159.528 15.1866 160.061 17.1466 160.061 19.36C160.061 21.5466 159.528 23.5066 158.461 25.24C157.421 26.9466 156.021 28.2933 154.261 29.28C152.501 30.2666 150.541 30.76 148.381 30.76ZM148.381 25.36C149.474 25.36 150.421 25.1066 151.221 24.6C152.048 24.0933 152.688 23.3866 153.141 22.48C153.621 21.5733 153.861 20.5333 153.861 19.36C153.861 18.1866 153.621 17.16 153.141 16.28C152.688 15.3733 152.048 14.6666 151.221 14.16C150.421 13.6266 149.474 13.36 148.381 13.36C147.288 13.36 146.328 13.6266 145.501 14.16C144.674 14.6666 144.021 15.3733 143.541 16.28C143.088 17.16 142.861 18.1866 142.861 19.36C142.861 20.5333 143.088 21.5733 143.541 22.48C144.021 23.3866 144.674 24.0933 145.501 24.6C146.328 25.1066 147.288 25.36 148.381 25.36Z"/>
										<path d="M122.112 30.28V8.43995H127.712V13.68L127.312 12.92C127.792 11.08 128.578 9.83995 129.672 9.19995C130.792 8.53329 132.112 8.19995 133.632 8.19995H134.912V13.4H133.032C131.565 13.4 130.378 13.8533 129.472 14.76C128.565 15.64 128.112 16.8933 128.112 18.52V30.28H122.112Z"/>
										<path d="M115.796 30.52C113.156 30.52 111.102 29.8133 109.636 28.4C108.196 26.96 107.476 24.96 107.476 22.4V13.64H103.796V8.43998H103.996C105.116 8.43998 105.969 8.15998 106.556 7.59998C107.169 7.03998 107.476 6.19998 107.476 5.07998V3.47998H113.476V8.43998H118.596V13.64H113.476V22C113.476 22.7466 113.609 23.3733 113.876 23.88C114.142 24.36 114.556 24.72 115.116 24.96C115.676 25.2 116.369 25.32 117.196 25.32C117.382 25.32 117.596 25.3066 117.836 25.28C118.076 25.2533 118.329 25.2266 118.596 25.2V30.28C118.196 30.3333 117.742 30.3866 117.236 30.44C116.729 30.4933 116.249 30.52 115.796 30.52Z"/>
										<path d="M94.885 30.28V8.43998H100.885V30.28H94.885ZM94.885 6.47998V0.47998H100.885V6.47998H94.885Z"/>
										<path d="M70.9397 30.28V0H76.9397V12.76L76.2197 11.8C76.7264 10.4933 77.5397 9.53333 78.6597 8.92C79.8064 8.28 81.1397 7.96 82.6597 7.96C84.313 7.96 85.753 8.30667 86.9797 9C88.233 9.69333 89.2064 10.6667 89.8997 11.92C90.593 13.1467 90.9397 14.5867 90.9397 16.24V30.28H84.9397V17.52C84.9397 16.6667 84.7664 15.9333 84.4197 15.32C84.0997 14.7067 83.633 14.2267 83.0197 13.88C82.433 13.5333 81.7397 13.36 80.9397 13.36C80.1664 13.36 79.473 13.5333 78.8597 13.88C78.2464 14.2267 77.7664 14.7067 77.4197 15.32C77.0997 15.9333 76.9397 16.6667 76.9397 17.52V30.28H70.9397Z"/>
										<path d="M57.2064 30.76C55.0198 30.76 53.0464 30.2666 51.2864 29.28C49.5531 28.2666 48.1664 26.8933 47.1264 25.16C46.1131 23.4266 45.6064 21.48 45.6064 19.32C45.6064 17.16 46.1131 15.2266 47.1264 13.52C48.1398 11.7866 49.5264 10.4266 51.2864 9.43996C53.0464 8.4533 55.0198 7.95996 57.2064 7.95996C58.8331 7.95996 60.3398 8.23996 61.7264 8.79996C63.1131 9.35996 64.2998 10.1466 65.2864 11.16C66.2731 12.1466 66.9798 13.32 67.4064 14.68L62.2064 16.92C61.8331 15.8266 61.1931 14.96 60.2864 14.32C59.4064 13.68 58.3798 13.36 57.2064 13.36C56.1664 13.36 55.2331 13.6133 54.4064 14.12C53.6064 14.6266 52.9664 15.3333 52.4864 16.24C52.0331 17.1466 51.8064 18.1866 51.8064 19.36C51.8064 20.5333 52.0331 21.5733 52.4864 22.48C52.9664 23.3866 53.6064 24.0933 54.4064 24.6C55.2331 25.1066 56.1664 25.36 57.2064 25.36C58.4064 25.36 59.4464 25.04 60.3264 24.4C61.2064 23.76 61.8331 22.8933 62.2064 21.8L67.4064 24.08C67.0064 25.36 66.3131 26.5066 65.3264 27.52C64.3398 28.5333 63.1531 29.3333 61.7664 29.92C60.3798 30.48 58.8598 30.76 57.2064 30.76Z"/>
										<path d="M31.0569 30.28V8.43995H36.6569V13.68L36.2569 12.92C36.7369 11.08 37.5236 9.83995 38.6169 9.19995C39.7369 8.53329 41.0569 8.19995 42.5769 8.19995H43.8569V13.4H41.9769C40.5102 13.4 39.3236 13.8533 38.4169 14.76C37.5102 15.64 37.0569 16.8933 37.0569 18.52V30.28H31.0569Z"/>
										<path d="M0 30.28L10.08 0.47998H18.32L28.4 30.28H21.64L19.64 24.2H8.72L6.72 30.28H0ZM10.44 18.8H17.92L13.36 4.71998H15.04L10.44 18.8Z"/>
										</svg>
									</span>
								</span>
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 align-items-xl-center">

								<li class="nav-item dropdown ">
									<a class="nav-link d-flex gap-2 align-items-center" href="#" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
										Home
										<span class="dropdown-icon">
											<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 8L6 2L1 8"/>
											</svg> 
										</span> 
									</a>
									<ul class="dropdown-menu ">
										<li><a class="dropdown-item" href="home-1.html" aria-label="single-pages">
												<span class="link-hover-animation-1">Home 1</span>												
											</a>
										</li>										
										<li><a class="dropdown-item" href="home-2.html" aria-label="single-pages">
											<span class="link-hover-animation-1">Home 2</span>
											</a>
										</li>	
										<li><a class="dropdown-item" href="home-3.html" aria-label="single-pages">
											<span class="link-hover-animation-1">Home 3</span>
											</a>
										</li>	
										<li><a class="dropdown-item" href="home-4.html" aria-label="single-pages">
											<span class="link-hover-animation-1">Home 4</span>
											</a>
										</li>						
									</ul>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="project-archive.html">
										Projects										   
									</a>									
								</li>	


								<li class="nav-item dropdown has-megamenu">
									<a class="nav-link  d-flex gap-2 align-items-center" href="#" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
										Services
										<span class="dropdown-icon">
											<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 8L6 2L1 8"/>
											</svg> 
										</span> 
									</a>
									<div class="dropdown-menu  megamenu mb-3 mb-xl-0" role="menu">
										<div class="container">
											<div class="megamenu-contents">
												<div class="row g-0">
													<div class="col-xl-3">															
														<div class="d-flex gap-30 flex-column py-40 ps-30 pe-40">
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Residential Design</a>
																<p class="small mb-0 pt-10">Everything from concept to completion</p>
															</div>	
															<!-- menu-description -->
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Commercial Design</a>
																<p class="small mb-0 pt-10">Focuses on optimizing functionality and aesthetics</p>
															</div>	
															<!-- menu-description -->
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Space Planning</a>
																<p class="small mb-0 pt-10">Maximize the potential of your space</p>
															</div>	
															<!-- menu-description -->
														</div>															
													</div>
													<!-- col -->
													<div class="col-xl-3">															
														<div class="d-flex gap-30 flex-column py-40 ps-30 pe-40 separator h-100">
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Color Consultation</a>
																<p class="small mb-0 pt-10">We help you choose the perfect palette</p>
															</div>	
															<!-- menu-description -->
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Project Management</a>
																<p class="small mb-0 pt-10">We oversee every detail for a successful project</p>
															</div>	
															<!-- menu-description -->
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Custom Furnishings</a>
																<p class="small mb-0 pt-10">Elevate your space with unique furnishings</p>
															</div>	
															<!-- menu-description -->
														</div>															
													</div>
													<!-- col -->
													<div class="col-xl-3">															
														<div class="d-flex gap-30 flex-column py-40 ps-30 pe-40 separator h-100">
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Concept Development</a>
																<p class="small mb-0 pt-10">Develop a design concept</p>
															</div>	
															<!-- menu-description -->
															<div class="menu-description">
																<a href="service-single.html" class="menu-heading text-decoration-none link-hover-animation-1 pb-1">Revamps & Remodels</a>
																<p class="small mb-0 pt-10">Renovation and remodeling services that breathe new life</p>
															</div>	
															<!-- menu-description -->
														</div>															
													</div>
													<!-- col -->
													<div class="col-xl-3">
														<div class="menu-image-wrapper position-relative h-100">
															<img src="{{ asset('user_assets/assets/images/menu-image-1.png')}}" class="w-100 h-100" alt="img">
															<div class="menu-image-contents px-3">
																<h4 class="mb-90 px-0 px-xl-10 fw-extra-bold">Embark on a Design Journey with Us</h4>
																<div class="architronix-button">
																	<a href="contact-2.html" class="btn btn-secondary d-inline-flex gap-10 w-100" target="_blank">Lets Talk							
																		<svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
																		</svg>							
																	</a>
																</div>
															</div>																
														</div>
													</div>
												</div>	
												<!-- row -->
											</div>											
										</div>																													 
									</div>
								</li>
								

								<li class="nav-item dropdown ">
									<a class="nav-link d-flex gap-2 align-items-center" href="#" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
										<span class="dropdown-icon">
											<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 8L6 2L1 8"/>
											</svg> 
										</span> 
									</a>
									<div class="dropdown-menu dropdown-menu-lg">
										<div class="row">
											<div class="col-lg-6">
												<div class="d-flex flex-column">
													<a class="dropdown-item" href="about-us.html" aria-label="single-pages"><span class="link-hover-animation-1">About Us</span></a>										
													<a class="dropdown-item" href="services.html" aria-label="single-pages"><span class="link-hover-animation-1">Services</span></a>
													<a class="dropdown-item" href="service-single.html" aria-label="single-pages"><span class="link-hover-animation-1">Service Single</span></a>	
													<a class="dropdown-item" href="project-single.html" aria-label="single-pages"><span class="link-hover-animation-1">Project Single</span></a>
													<a class="dropdown-item" href="product-single.html" aria-label="single-pages"><span class="link-hover-animation-1">Product Single</span></a>
													<a class="dropdown-item" href="product-archive.html" aria-label="single-pages"><span class="link-hover-animation-1">Product Archive</span></a>
													<a class="dropdown-item" href="checkout.html" aria-label="single-pages"><span class="link-hover-animation-1">Checkout Page</span></a>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="d-flex flex-column dropdown-items-separator separator">
													<a class="dropdown-item" href="cart.html" aria-label="single-pages"><span class="link-hover-animation-1">Cart Page</span></a>							
													<a class="dropdown-item" href="career.html" aria-label="single-pages"><span class="link-hover-animation-1">Career</span></a>							
													<a class="dropdown-item" href="job-details.html" aria-label="single-pages"><span class="link-hover-animation-1">Job Details</span></a>							
													<a class="dropdown-item" href="team.html" aria-label="single-pages"><span class="link-hover-animation-1">Team</span></a>								
													<a class="dropdown-item" href="team-single.html" aria-label="single-pages"><span class="link-hover-animation-1">Team Single</span></a>
													<a class="dropdown-item" href="contact.html" aria-label="single-pages"><span class="link-hover-animation-1">Contact</span></a>
													<a class="dropdown-item" href="404-page.html" aria-label="single-pages"><span class="link-hover-animation-1">404 Page</span></a>
												</div>
											</div>
										</div>						
									</div>
								</li>							
								

								<li class="nav-item">
									<a class="nav-link" href="{{route('users.blogs.index')}}">
										Blog										   
									</a>									
								</li>	
								

								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="contact-2.html">
										Contact										   
									</a>									
								</li>
								
								<li class="nav-item">
									<div class="d-flex gap-4 align-items-center">
										<a class="nav-link nav-link-icon" href="#" data-bs-toggle="modal" data-bs-target="#FullScreenModal">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_142_460)">
												<path d="M23.7068 22.2938L17.7378 16.3248C19.3644 14.3354 20.1642 11.7969 19.9716 9.23432C19.7791 6.67179 18.609 4.28129 16.7034 2.55728C14.7977 0.833269 12.3024 -0.0923492 9.73342 -0.0281174C7.16447 0.0361144 4.71849 1.08528 2.9014 2.90237C1.08431 4.71946 0.0351379 7.16545 -0.029094 9.7344C-0.0933258 12.3034 0.832293 14.7987 2.5563 16.7043C4.28031 18.61 6.67081 19.7801 9.23334 19.9726C11.7959 20.1651 14.3344 19.3654 16.3238 17.7388L22.2928 23.7078C22.4814 23.8899 22.734 23.9907 22.9962 23.9884C23.2584 23.9862 23.5092 23.881 23.6946 23.6956C23.88 23.5102 23.9852 23.2594 23.9875 22.9972C23.9897 22.735 23.8889 22.4824 23.7068 22.2938ZM9.99978 18.0008C8.41753 18.0008 6.87081 17.5316 5.55522 16.6525C4.23963 15.7735 3.21425 14.524 2.60875 13.0622C2.00324 11.6004 1.84482 9.99189 2.1535 8.44004C2.46218 6.88819 3.22411 5.46272 4.34293 4.3439C5.46175 3.22508 6.88721 2.46316 8.43906 2.15448C9.99091 1.84579 11.5994 2.00422 13.0613 2.60972C14.5231 3.21522 15.7725 4.2406 16.6515 5.5562C17.5306 6.87179 17.9998 8.41851 17.9998 10.0008C17.9974 12.1218 17.1538 14.1552 15.654 15.655C14.1542 17.1548 12.1208 17.9984 9.99978 18.0008Z" />
												</g>
												<defs>
												<clipPath id="clip0_142_460">
												<rect width="24" height="24"/>
												</clipPath>
												</defs>
											</svg> 
										</a>
		
										<a class="nav-link nav-link-icon d-block d-xl-none" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" aria-expanded="false" aria-label="Toggle navigation">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_142_452)">
												<path d="M21 6H18C18 4.4087 17.3679 2.88258 16.2426 1.75736C15.1174 0.632141 13.5913 0 12 0C10.4087 0 8.88258 0.632141 7.75736 1.75736C6.63214 2.88258 6 4.4087 6 6H3C2.20435 6 1.44129 6.31607 0.87868 6.87868C0.31607 7.44129 0 8.20435 0 9L0 19C0.00158786 20.3256 0.528882 21.5964 1.46622 22.5338C2.40356 23.4711 3.67441 23.9984 5 24H19C20.3256 23.9984 21.5964 23.4711 22.5338 22.5338C23.4711 21.5964 23.9984 20.3256 24 19V9C24 8.20435 23.6839 7.44129 23.1213 6.87868C22.5587 6.31607 21.7956 6 21 6ZM12 2C13.0609 2 14.0783 2.42143 14.8284 3.17157C15.5786 3.92172 16 4.93913 16 6H8C8 4.93913 8.42143 3.92172 9.17157 3.17157C9.92172 2.42143 10.9391 2 12 2ZM22 19C22 19.7956 21.6839 20.5587 21.1213 21.1213C20.5587 21.6839 19.7956 22 19 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V9C2 8.73478 2.10536 8.48043 2.29289 8.29289C2.48043 8.10536 2.73478 8 3 8H6V10C6 10.2652 6.10536 10.5196 6.29289 10.7071C6.48043 10.8946 6.73478 11 7 11C7.26522 11 7.51957 10.8946 7.70711 10.7071C7.89464 10.5196 8 10.2652 8 10V8H16V10C16 10.2652 16.1054 10.5196 16.2929 10.7071C16.4804 10.8946 16.7348 11 17 11C17.2652 11 17.5196 10.8946 17.7071 10.7071C17.8946 10.5196 18 10.2652 18 10V8H21C21.2652 8 21.5196 8.10536 21.7071 8.29289C21.8946 8.48043 22 8.73478 22 9V19Z" />
												</g>
												<defs>
												<clipPath id="clip0_142_452">
												<rect width="24" height="24"/>
												</clipPath>
												</defs>
											</svg> 
										</a>
									</div>									
								</li>
								
								<li class="nav-item d-none d-xl-block">
									<a class="nav-link nav-link-icon" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" aria-expanded="false" aria-label="Toggle navigation">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_142_452)">
										<path d="M21 6H18C18 4.4087 17.3679 2.88258 16.2426 1.75736C15.1174 0.632141 13.5913 0 12 0C10.4087 0 8.88258 0.632141 7.75736 1.75736C6.63214 2.88258 6 4.4087 6 6H3C2.20435 6 1.44129 6.31607 0.87868 6.87868C0.31607 7.44129 0 8.20435 0 9L0 19C0.00158786 20.3256 0.528882 21.5964 1.46622 22.5338C2.40356 23.4711 3.67441 23.9984 5 24H19C20.3256 23.9984 21.5964 23.4711 22.5338 22.5338C23.4711 21.5964 23.9984 20.3256 24 19V9C24 8.20435 23.6839 7.44129 23.1213 6.87868C22.5587 6.31607 21.7956 6 21 6ZM12 2C13.0609 2 14.0783 2.42143 14.8284 3.17157C15.5786 3.92172 16 4.93913 16 6H8C8 4.93913 8.42143 3.92172 9.17157 3.17157C9.92172 2.42143 10.9391 2 12 2ZM22 19C22 19.7956 21.6839 20.5587 21.1213 21.1213C20.5587 21.6839 19.7956 22 19 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V9C2 8.73478 2.10536 8.48043 2.29289 8.29289C2.48043 8.10536 2.73478 8 3 8H6V10C6 10.2652 6.10536 10.5196 6.29289 10.7071C6.48043 10.8946 6.73478 11 7 11C7.26522 11 7.51957 10.8946 7.70711 10.7071C7.89464 10.5196 8 10.2652 8 10V8H16V10C16 10.2652 16.1054 10.5196 16.2929 10.7071C16.4804 10.8946 16.7348 11 17 11C17.2652 11 17.5196 10.8946 17.7071 10.7071C17.8946 10.5196 18 10.2652 18 10V8H21C21.2652 8 21.5196 8.10536 21.7071 8.29289C21.8946 8.48043 22 8.73478 22 9V19Z" />
										</g>
										<defs>
										<clipPath id="clip0_142_452">
										<rect width="24" height="24"/>
										</clipPath>
										</defs>
									</svg> 
									</a>
								</li>						

								<li class="nav-item dropdown text-uppercase fw-semibold d-none d-xl-block">
									<a href="#" class="nav-link nav-link-icon d-flex align-items-center gap-1" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">
										en 
										<span class="dropdown-icon">
											<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 8L6 2L1 8"/>
											</svg> 
										</span>
									</a>
									
									<ul class="dropdown-menu dropdown-menu-style-2">
										<li >
											<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="{{ asset('user_assets/assets/images/flag-us.png')}}" alt="flag-us">
												<span class="text-uppercase">en</span>
											</a>											
										</li>	
										<li >
											<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="{{ asset('user_assets/assets/images/flag-de.png')}}" alt="flag-de">
												<span class="text-uppercase">de</span>
											</a>											
										</li>
										<li >
											<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="{{ asset('user_assets/assets/images/flag-fr.png')}}" alt="flag-fr">
												<span class="text-uppercase">fr</span>
											</a>											
										</li>
										<li >
											<a href="#" class="dropdown-item d-flex gap-1 align-items-center"><img src="{{ asset('user_assets/assets/images/flag-ar.png')}}" alt="flag-ar">
												<span class="text-uppercase">ar</span>
											</a>											
										</li>										
									</ul>
								</li>
							</ul>						  
							</div>
						</div>
					</div>	
					<!-- container-fluid -->
				</nav>	
			</header>
			<!--Header Section ======================-->			



			<!--offcanvasCart ======================-->
			<div class="offcanvas offcanvas-end" id="offcanvasCart" tabindex="-1">
				<div class="offcanvas-header">

					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body px-3 py-40 py-xxl-100 px-lg-5">				
					<div class="cart-items">
						<span class="cart-items-heading">Your Cart (2)</span>
						<a href="#" class="cart-items-heading text-decoration-none">Remove All (X)</a>
					</div>		
					<div class="cart-items pt-40 pt-xxl-60">
						<div class="cart-items-inner d-flex align-items-center gap-3">
							<img src="{{ asset('user_assets/assets/images/shop-image-sm-1.png')}}" alt="img">
							<div class="d-flex flex-column gap-3">
								<h6 class="cart-items-heading">Pendant Lamp</h6>
								<span class="d-flex gap-3 align-items-center">
									<span>Qty</span>
									<span class="cart-items-heading">1</span>
								</span>
							</div>
						</div>
						<div class="d-flex flex-column gap-3 align-items-end">
							<a class="text-decoration-none" href="#">(X)</a>
							<h6 class="cart-items-heading">$499.99</h6>
						</div>
					</div>		
					<div class="cart-items pt-4">
						<div class="cart-items-inner d-flex align-items-center gap-3">
							<img src="{{ asset('user_assets/assets/images/shop-image-sm-2.png')}}" alt="img">
							<div class="d-flex flex-column gap-3">
								<h6 class="cart-items-heading">Scandal Wall Sconce</h6>
								<span class="d-flex gap-3 align-items-center">
									<span>Qty</span>
									<span class="cart-items-heading">1</span>
								</span>
							</div>
						</div>
						<div class="d-flex flex-column gap-3 align-items-end">
							<a class="text-decoration-none" href="#">(X)</a>
							<h6 class="cart-items-heading">$134.99</h6>
						</div>
					</div>	

					<div class="offcanvas-cart-btn cart-items justify-content-between">
						<div>
							<h6 class="cart-items-heading mb-4 mb-xxl-30">Subtotal:</h6>
							<a href="cart.html" class="btn btn-md btn-primary ">View Cart</a>
						</div>

						<div>
							<h6 class="cart-items-heading mb-4 mb-xxl-30 text-end">$634.99</h6>
							<a href="checkout.html" class="btn btn-md btn-secondary ">Checkout</a>
						</div>							
					</div>						
					
				</div>
			</div>
			<!--offcanvasCart ======================-->



			<!--Full-Screen-Modal (Search-Modal) ======================-->
			<div class="modal fade" id="FullScreenModal" aria-hidden="true"  tabindex="-1">
				<div class="modal-dialog modal-fullscreen">
				  <div class="modal-content">
					<div class="modal-header">					  
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 2L53 53" stroke="#D2E0D9" stroke-width="3"/>
							<line x1="1.93543" y1="53.4393" x2="52.9354" y2="2.43934" stroke="#D2E0D9" stroke-width="3"/>
						</svg> 
					  </button>
					</div>
					<div class="modal-body">
						<div class="container">
							<h2 class="display-2 fw-extra-bold mb-30">Search</h2>							
							<form action="#" class="modal-search-form">
								<div class="position-relative">
									<input type="text" class="form-control" id="formInput" placeholder="Type & Hit Enter" required>
									<button class="search-icon" type="submit">
										<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_865_1148)">
											<path d="M43.4629 40.8718L32.5198 29.9286C35.5019 26.2814 36.9681 21.6275 36.6151 16.9295C36.2622 12.2315 34.117 7.84895 30.6233 4.68826C27.1297 1.52758 22.5548 -0.169388 17.8451 -0.05163C13.1354 0.0661284 8.65104 1.9896 5.31971 5.32093C1.98838 8.65227 0.0649077 13.1366 -0.0528507 17.8463C-0.170609 22.5561 1.52636 27.1309 4.68704 30.6246C7.84773 34.1182 12.2303 36.2634 16.9283 36.6164C21.6263 36.9693 26.2802 35.5031 29.9274 32.521L40.8706 43.4642C41.2164 43.7981 41.6795 43.9829 42.1602 43.9787C42.6409 43.9745 43.1007 43.7817 43.4406 43.4418C43.7805 43.1019 43.9733 42.6421 43.9775 42.1614C43.9817 41.6807 43.7969 41.2176 43.4629 40.8718ZM18.3334 33.0013C15.4326 33.0013 12.597 32.1411 10.1851 30.5295C7.77314 28.9179 5.89327 26.6273 4.78319 23.9473C3.6731 21.2674 3.38265 18.3184 3.94857 15.4733C4.51449 12.6283 5.91135 10.0149 7.96252 7.96374C10.0137 5.91257 12.627 4.51571 15.4721 3.94979C18.3172 3.38388 21.2661 3.67432 23.9461 4.78441C26.6261 5.8945 28.9167 7.77436 30.5283 10.1863C32.1399 12.5982 33.0001 15.4339 33.0001 18.3346C32.9957 22.2231 31.4491 25.9511 28.6995 28.7007C25.9499 31.4503 22.2219 32.9969 18.3334 33.0013Z" fill="#D2E0D9"/>
											</g>
											<defs>
											<clipPath id="clip0_865_1148">
											<rect width="44" height="44" fill="white"/>
											</clipPath>
											</defs>
											</svg> 
									</button>
								</div>										  
							</form>							
						</div>
					</div>					
				  </div>
				</div>
			</div>
			<!--Full-Screen-Modal (Search-Modal) ======================-->



      @yield('main')
			<!--Footer Section ======================-->
			<footer class="section-footer section-full-width bg-secondary position-relative">
				<div class="container">
					<div class="footer-contents">
						<div class="row gy-5 gy-lg-0 align-items-center justify-content-between">
							<div class="col-lg-4">
								<div>
									<a class="navbar-brand py-0" href="index.html">
									<span class="logo">
											<img src="{{ asset('user_assets/assets/images/logo.png')}}" alt="logo">
										<svg width="219" height="31" viewBox="0 0 219 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M196.212 30.2799L203.852 19.3199L196.172 8.43994H203.132L208.892 16.9199H205.852L211.612 8.43994H218.572L210.892 19.3199L218.492 30.2799H211.572L205.932 21.7999H208.812L203.172 30.2799H196.212Z"/>
										<path d="M187.541 30.28V8.43998H193.541V30.28H187.541ZM187.541 6.47998V0.47998H193.541V6.47998H187.541Z"/>
										<path d="M163.596 30.28V8.43996H169.196V12.76L168.876 11.8C169.383 10.4933 170.196 9.5333 171.316 8.91996C172.463 8.27996 173.796 7.95996 175.316 7.95996C176.969 7.95996 178.409 8.30663 179.636 8.99996C180.889 9.69329 181.863 10.6666 182.556 11.92C183.249 13.1466 183.596 14.5866 183.596 16.24V30.28H177.596V17.52C177.596 16.6666 177.423 15.9333 177.076 15.32C176.756 14.7066 176.289 14.2266 175.676 13.88C175.089 13.5333 174.396 13.36 173.596 13.36C172.823 13.36 172.129 13.5333 171.516 13.88C170.903 14.2266 170.423 14.7066 170.076 15.32C169.756 15.9333 169.596 16.6666 169.596 17.52V30.28H163.596Z"/>
										<path d="M148.381 30.76C146.221 30.76 144.248 30.2666 142.461 29.28C140.701 28.2933 139.288 26.9466 138.221 25.24C137.181 23.5066 136.661 21.5466 136.661 19.36C136.661 17.1466 137.181 15.1866 138.221 13.48C139.288 11.7733 140.701 10.4266 142.461 9.43996C144.248 8.4533 146.221 7.95996 148.381 7.95996C150.541 7.95996 152.501 8.4533 154.261 9.43996C156.021 10.4266 157.421 11.7733 158.461 13.48C159.528 15.1866 160.061 17.1466 160.061 19.36C160.061 21.5466 159.528 23.5066 158.461 25.24C157.421 26.9466 156.021 28.2933 154.261 29.28C152.501 30.2666 150.541 30.76 148.381 30.76ZM148.381 25.36C149.474 25.36 150.421 25.1066 151.221 24.6C152.048 24.0933 152.688 23.3866 153.141 22.48C153.621 21.5733 153.861 20.5333 153.861 19.36C153.861 18.1866 153.621 17.16 153.141 16.28C152.688 15.3733 152.048 14.6666 151.221 14.16C150.421 13.6266 149.474 13.36 148.381 13.36C147.288 13.36 146.328 13.6266 145.501 14.16C144.674 14.6666 144.021 15.3733 143.541 16.28C143.088 17.16 142.861 18.1866 142.861 19.36C142.861 20.5333 143.088 21.5733 143.541 22.48C144.021 23.3866 144.674 24.0933 145.501 24.6C146.328 25.1066 147.288 25.36 148.381 25.36Z"/>
										<path d="M122.112 30.28V8.43995H127.712V13.68L127.312 12.92C127.792 11.08 128.578 9.83995 129.672 9.19995C130.792 8.53329 132.112 8.19995 133.632 8.19995H134.912V13.4H133.032C131.565 13.4 130.378 13.8533 129.472 14.76C128.565 15.64 128.112 16.8933 128.112 18.52V30.28H122.112Z"/>
										<path d="M115.796 30.52C113.156 30.52 111.102 29.8133 109.636 28.4C108.196 26.96 107.476 24.96 107.476 22.4V13.64H103.796V8.43998H103.996C105.116 8.43998 105.969 8.15998 106.556 7.59998C107.169 7.03998 107.476 6.19998 107.476 5.07998V3.47998H113.476V8.43998H118.596V13.64H113.476V22C113.476 22.7466 113.609 23.3733 113.876 23.88C114.142 24.36 114.556 24.72 115.116 24.96C115.676 25.2 116.369 25.32 117.196 25.32C117.382 25.32 117.596 25.3066 117.836 25.28C118.076 25.2533 118.329 25.2266 118.596 25.2V30.28C118.196 30.3333 117.742 30.3866 117.236 30.44C116.729 30.4933 116.249 30.52 115.796 30.52Z"/>
										<path d="M94.885 30.28V8.43998H100.885V30.28H94.885ZM94.885 6.47998V0.47998H100.885V6.47998H94.885Z"/>
										<path d="M70.9397 30.28V0H76.9397V12.76L76.2197 11.8C76.7264 10.4933 77.5397 9.53333 78.6597 8.92C79.8064 8.28 81.1397 7.96 82.6597 7.96C84.313 7.96 85.753 8.30667 86.9797 9C88.233 9.69333 89.2064 10.6667 89.8997 11.92C90.593 13.1467 90.9397 14.5867 90.9397 16.24V30.28H84.9397V17.52C84.9397 16.6667 84.7664 15.9333 84.4197 15.32C84.0997 14.7067 83.633 14.2267 83.0197 13.88C82.433 13.5333 81.7397 13.36 80.9397 13.36C80.1664 13.36 79.473 13.5333 78.8597 13.88C78.2464 14.2267 77.7664 14.7067 77.4197 15.32C77.0997 15.9333 76.9397 16.6667 76.9397 17.52V30.28H70.9397Z"/>
										<path d="M57.2064 30.76C55.0198 30.76 53.0464 30.2666 51.2864 29.28C49.5531 28.2666 48.1664 26.8933 47.1264 25.16C46.1131 23.4266 45.6064 21.48 45.6064 19.32C45.6064 17.16 46.1131 15.2266 47.1264 13.52C48.1398 11.7866 49.5264 10.4266 51.2864 9.43996C53.0464 8.4533 55.0198 7.95996 57.2064 7.95996C58.8331 7.95996 60.3398 8.23996 61.7264 8.79996C63.1131 9.35996 64.2998 10.1466 65.2864 11.16C66.2731 12.1466 66.9798 13.32 67.4064 14.68L62.2064 16.92C61.8331 15.8266 61.1931 14.96 60.2864 14.32C59.4064 13.68 58.3798 13.36 57.2064 13.36C56.1664 13.36 55.2331 13.6133 54.4064 14.12C53.6064 14.6266 52.9664 15.3333 52.4864 16.24C52.0331 17.1466 51.8064 18.1866 51.8064 19.36C51.8064 20.5333 52.0331 21.5733 52.4864 22.48C52.9664 23.3866 53.6064 24.0933 54.4064 24.6C55.2331 25.1066 56.1664 25.36 57.2064 25.36C58.4064 25.36 59.4464 25.04 60.3264 24.4C61.2064 23.76 61.8331 22.8933 62.2064 21.8L67.4064 24.08C67.0064 25.36 66.3131 26.5066 65.3264 27.52C64.3398 28.5333 63.1531 29.3333 61.7664 29.92C60.3798 30.48 58.8598 30.76 57.2064 30.76Z"/>
										<path d="M31.0569 30.28V8.43995H36.6569V13.68L36.2569 12.92C36.7369 11.08 37.5236 9.83995 38.6169 9.19995C39.7369 8.53329 41.0569 8.19995 42.5769 8.19995H43.8569V13.4H41.9769C40.5102 13.4 39.3236 13.8533 38.4169 14.76C37.5102 15.64 37.0569 16.8933 37.0569 18.52V30.28H31.0569Z"/>
										<path d="M0 30.28L10.08 0.47998H18.32L28.4 30.28H21.64L19.64 24.2H8.72L6.72 30.28H0ZM10.44 18.8H17.92L13.36 4.71998H15.04L10.44 18.8Z"/>
										</svg>
									</span>
									</a>
									<p class="py-10 py-lg-3 mb-0 fw-semibold">Shaping Interior Excellence</p>
									<ul class="contact-lists list-unstyled mb-0 d-flex">
										<li><a href="#" class="link-hover-animation-1 text-decoration-none text-uppercase" aria-label="top-bar-link">fb</a></li>
										<li><a href="#" class="link-hover-animation-1 text-decoration-none text-uppercase" aria-label="top-bar-link">in</a></li>
										<li><a href="#" class="link-hover-animation-1 text-decoration-none text-uppercase" aria-label="top-bar-link">tw</a></li>
										<li><a href="#" class="link-hover-animation-1 text-decoration-none text-uppercase" aria-label="top-bar-link">li</a></li>
									</ul>
								</div>
							</div>
							<!-- col-4 -->
							<div class="col-lg-4 col-xxl-3">
								<div class="address-details">
									<h5 class="fw-extra-bold separator">Address Spain:</h5>
									<div class="footer-address">
										<p class="fw-semibold mb-0">Architronix,</p>
										<p>Avda. Valencia, 3, 46891, Palomar (Valencia), SPAIN</p>
									</div>
									<div class="d-flex flex-column">
										<p class="mb-0 d-flex align-items-center gap-2">Phone: <a href="tel:34962398486" class="text-decoration-none link-hover-animation-1">34 96 239 84 86</a></p>
										<p class="mb-0 d-flex align-items-center gap-2">Email: <a href="mailto:hello@architronix.com" class="text-decoration-none link-hover-animation-1">hello@architronix.com</a></p>
									</div>									
								</div>
							</div>
							<!-- col-3 -->
							<div class="col-lg-4 col-xxl-3">
								<div class="address-details">
									<h5 class="fw-extra-bold separator">Address USA:</h5>
									<div class="footer-address">
										<p class="fw-semibold mb-0">Architronix Inc. ,</p>
										<p>208 English Road, High Point, NC 27262, USA</p>
									</div>
									<div class="d-flex flex-column">
										<p class="mb-0 d-flex align-items-center gap-2">Phone: <a href="tel:3368856670" class="text-decoration-none link-hover-animation-1">336 885 6670</a></p>
										<p class="mb-0 d-flex align-items-center gap-2">Email: <a href="mailto:hello@architronix.com" class="text-decoration-none link-hover-animation-1">hello@architronix.com</a></p>
									</div>									
								</div>
							</div>
							<!-- col-3 -->
						</div>
					</div>
					<div class="copyright d-flex flex-column gap-2 flex-lg-row justify-content-lg-between align-items-lg-center text-center text-sm-start">
						<p class="mb-0">Made with Love by <a href="https://themeperch.net/" class="text-decoration-none link-hover-animation-1" target="_blank">Themeperch</a></p>
						<p class="mb-0">&copy; <span class="dynamic-year"></span>, Architronix, All Rights Reserved</p>
					</div>
				</div>
				<!-- container -->
			</footer>
			<!--Footer Section ======================-->


			<!--Back-to-top ======================-->
			<div class="progressCounter progressScroll progress-scroll-opacity-0">
				<div class="progressScroll-border">
				  <div class="progressScroll-circle">
					<span class="progressScroll-text text-secondary">
						<svg width="24" height="24" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.1758 41.7882C11.4955 41.1079 11.4388 40.0401 12.0057 39.2953L12.1758 39.1007L39.0508 12.2256C39.7929 11.4835 40.9962 11.4835 41.7383 12.2256C42.4186 12.9059 42.4753 13.9737 41.9084 14.7185L41.7383 14.9131L14.8633 41.7882C14.1211 42.5303 12.9179 42.5303 12.1758 41.7882Z"/>
							<path d="M18.7659 15.5153C17.7163 15.5175 16.8637 14.6685 16.8614 13.619C16.8594 12.6649 17.5608 11.8735 18.4769 11.7358L18.7577 11.7146L40.3903 11.668C41.3473 11.6659 42.14 12.3714 42.2746 13.2906L42.2947 13.5723L42.25 35.2067C42.2478 36.2562 41.3952 37.1052 40.3457 37.1031C39.3916 37.1011 38.6031 36.3963 38.4693 35.4797L38.4493 35.1988L38.489 15.4727L18.7659 15.5153Z"/>	
						</svg>
					</span>
					</div>
				</div>
			</div>
			<!--Back-to-top ======================-->


		</div>
		<!-- pages -->
			
			<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script> 
			<script src="{{ asset('user_assets/assets/js/jquery-3.7.0.min.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/bootstrap.bundle.min.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/swiper-bundle.min.js')}}"></script>	
			<script src="{{ asset('user_assets//assets/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/anime.min.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/animate.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/wow.min.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/odometer.js')}}"></script>
			<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js')}}"></script>	
			<script src="{{ asset('user_assets/assets/js/jquery.progressScroll.min.js')}}"></script>				
			<script src="{{ asset('user_assets/assets/js/script.js')}}"></script>	


			<script src="{{ asset('customize/presets.js')}}"></script>


        <!-- Custom Scripts -->
  <script src="{{ URL::asset('admin_assets/assets/js/hummingbird-treeview.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/ajaxPost.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/status-update.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/form-upload.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/image-preview.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/pagination.js')}}"></script>
  <script src="{{ URL::asset('admin_assets/assets/js/custom/filemanager.js')}}"></script>

@stack('scripts')

		
	</body>

</html>