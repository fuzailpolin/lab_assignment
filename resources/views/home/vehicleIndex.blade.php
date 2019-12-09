@extends('home.mainLayout')
@section('content')

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
	
		
        <div class="swiper-wrapper">
		
			<div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Boats</h2>
                  <a href="{{route('home.gallary', 'boats')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_10.jpg')}}" alt="Image">
              </div>
			</div>
		
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Cars</h2>
                  <a href="{{route('home.gallary', 'cars')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_11.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Trucks</h2>
                  <a href="{{route('home.gallary', 'trucks')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_12.jpg')}}" alt="Image">
              </div>
            </div>
			
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>

  @endsection

@section('title')
	Home Page
@endsection