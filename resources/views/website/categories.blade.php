@extends('website.master')

@section('content')
<div class="site-section" id="products-section"  style="margin-top: 3rem!important;">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
         <h3 class="section-sub-title">{{ __(' Our Products') }}</h3>
          <h2 class="section-title mb-3">{{ __('categoriess') }}</h2>
          <p>{{ __('We provide you with the best offers and products shop with DAAM') }} </p>

        </div>
      </div>
      <div class="row">
      @foreach ($sub_categories as $sub_category)  
        <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="{{asset('website/images/Dahoa ip.jpg')}}" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">{{app()->getLocale() == 'ar' ? $sub_category->ar_name : $sub_category->ar_name }}</a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>
     @endforeach

        {{-- <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/4CH MultiVision.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">MultiVision</a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/Coaxial Power.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">Coaxial </a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/dvr.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">DVR</a></h3>
             <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/hdd.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">HDD</a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/Coaxial 1m.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">Coaxial 1m</a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>

         <div class="col-lg-2 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="images/Coaxial 1m.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">Coaxial 1m</a></h3>
              <div>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div> --}}
          
        
      </div>
    </div>
  </div>
@endsection