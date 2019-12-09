<!DOCTYPE html>


<html lang="en">
  <head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('home_asset/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('home_asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('home_asset/css/lightgallery.min.css')}}">    
    
    <link rel="stylesheet" href="{{asset('home_asset/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('home_asset/fonts/flaticon/font/flaticon.css')}}">
    
    <link rel="stylesheet" href="{{asset('home_asset/css/swiper.css')}}">

    <link rel="stylesheet" href="{{asset('home_asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('home_asset/css/style.css')}}">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3" role="banner">

		<div class="container-fluid">
			<div class="row align-items-center">
				 <div class="col-6 col-xl-2" data-aos="fade-down">
					<h1 class="mb-0"><a href="{{route('home.index')}}" class="text-black h2 mb-0">   Dorpon</a></h1>
				 </div>
				 <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
					<nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

					  <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
						<li class="active"><a href="{{route('home.index')}}">Home</a></li>
						<li class="has-children">
						  <a href="{{route('home.vehicle')}}">Gallery</a>
						  <ul class="dropdown">
							<li class="has-children">
								<a href="{{route('home.vehicle')}}">Vehicle</a>
								<ul class="dropdown">
									<li><a href="{{route('home.gallary', 'boats')}}">Boats</a></li>
									<li><a href="{{route('home.gallary', 'cars')}}">Cars</a></li>
									<li><a href="{{route('home.gallary', 'trucks')}}">Trucks</a></li>
								</ul>
							</li>
							<li><a href="{{route('home.gallary', 'nature')}}">Nature</a></li>
							<li><a href="{{route('home.gallary', 'portrait')}}">Portrait</a></li>
							<li><a href="{{route('home.gallary', 'people')}}">People</a></li>
							<li><a href="{{route('home.gallary', 'architecture')}}">Architecture</a></li>
							<li><a href="{{route('home.gallary', 'animal')}}">Animals</a></li>
							<li><a href="{{route('home.gallary', 'sports')}}">Sports</a></li>
							<li><a href="{{route('home.gallary', 'travel')}}">Travel</a></li>
							<li class="has-children">
							  <a href="{{route('home.gallary', 'nature')}}">Sub Menu</a>
							  <ul class="dropdown">
								<li><a href="{{route('home.gallary', 'nature')}}">Menu One</a></li>
								<li><a href="{{route('home.gallary', 'nature')}}">Menu Two</a></li>
								<li><a href="{{route('home.gallary', 'nature')}}">Menu Three</a></li>
							  </ul>
							</li>
						  </ul>
						</li>
						<li><a href="{{route('image.upload')}}"> Upload Photo</a></li>
						<li><a href="{{route('home.about')}}">About</a></li>
						<li><a href="#">Contact</a></li>
					  </ul>
					</nav>
				 </div>
				  
				<div class="col-6 col-xl-2 text-right" data-aos="fade-down">
				<nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
					<div class="d-none d-xl-inline-block">
					  <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
						@if (Session::get('user')->type == 'admin')
							<li class="has-children">
								<a href="{{route('admin.index')}}"><i class="fa fa-user" aria-hidden="true"></i> {{Session::get('name')}}</a>
								<ul class="dropdown">
								<li class="has-children"> 
										<a href=""> Choose Layout </a>
										<ul class="dropdown">
											<li> 
												<a href="{{route('layout.index', 'standard')}}"> Standard</a>
											</li>
											
											<li>
												<a href="{{route('layout.index', 'mosaic')}}"> Mosaic</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="{{route('registration.index')}}">Register</a>
									</li>
									
								</ul>
							</li>
						@else
							<li class="has-children">
								<a href="{{route('home.index')}}"><i class="fa fa-user" aria-hidden="true"></i> {{Session::get('name')}}</a>
								<ul class="dropdown">
									<li class="has-children"> 
										<a href=""> Choose Layout </a>
										<ul class="dropdown">
											<li> 
												<a href="{{route('layout.index', 'standard')}}"> Standard</a>
											</li>
											
											<li>
												<a href="{{route('layout.index', 'mosaic')}}"> Mosaic</a>
											</li>
										</ul>
									</li>
									<li> 
										<a href="{{route('image.upload')}}"> Upload Photo</a>
									</li>
									<!--<li>
										<a href="{{route('imgMan.index', 'image')}}">Edit Image</a>
									</li>-->
									
						
									
									<li>
										<a href="#">Other Option</a>
									</li>
								</ul>
							</li>
						@endif
						<li>
						  <a href="/logout" class="pl-0 pr-3"><span class="iconify" data-icon="oi-account-logout" data-inline="false"></span> logout</a>
						</li>
						
						
						
						
					  </ul>
					</div>

					<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
				</nav>
				</div>
				
			</div>
		</div>
      
    </header>
	
	<hr style="width:100%;">

	 @yield('content')

   <div class="footer py-4">
    <div class="container-fluid">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <!--Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    
	
    
    
  </div>
	<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
  <script src="{{asset('home_asset/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery-ui.js')}}"></script>
  <script src="{{asset('home_asset/js/popper.min.js')}}"></script>
  <script src="{{asset('home_asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('home_asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('home_asset/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('home_asset/js/swiper.min.js')}}"></script>
  <script src="{{asset('home_asset/js/aos.js')}}"></script>
  
	<script src="{{asset('home_asset/js/fileuplad.js')}}"></script>
  
  <script src="{{asset('home_asset/js/picturefill.min.js')}}"></script>
  <script src="{{asset('home_asset/js/lightgallery-all.min.js')}}"></script>
  <script src="{{asset('home_asset/js/jquery.mousewheel.min.js')}}"></script>

  <script src="{{asset('home_asset/js/main.js')}}"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>