@extends('home.mainLayout')
@section('content')

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
	
		
        <div class="swiper-wrapper">
		
			<div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Vehicles</h2>
                  <a href="{{route('home.vehicle')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_9.jpg')}}" alt="Image">
              </div>
			</div>
		
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Nature</h2>
                  <a href="{{route('home.gallary', 'nature')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_1.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Portrait</h2>
                  <a href="{{route('home.gallary', 'portrait')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_2.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">People</h2>
                  <a href="{{route('home.gallary', 'people')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_3.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Architecture</h2>
                  <a href="{{route('home.gallary', 'architecture')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_4.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Animals</h2>
                  <a href="{{route('home.gallary', 'animal')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_5.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Sports</h2>
                  <a href="{{route('home.gallary', 'sports')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_6.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Travel</h2>
                  <a href="{{route('home.gallary', 'travel')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="{{asset('home_asset/images/img_7.jpg')}}" alt="Image">
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