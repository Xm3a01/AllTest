@extends('website.master')

@section('content')
     
<div class="site-blocks-cover overlay" style="background-image: url({{asset('website/images/h11.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                      
          <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
              <h1>{{ __('Shop With Us') }}</h1>
              <p class="mb-4 lead"> {{ __('With Daam we put the world in your hands') }} </p>
              <div>
                <a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">
                    {{ __('Shop Now') }}</a>
                <a href="#" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">{{ __('Club Membership') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  


  
  <div class="site-section" id="products-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="section-sub-title">{{ __('Popular Products') }}</h3>
          <h2 class="section-title mb-3">{{ __('Our Products') }}</h2>
          <p>{{ __('We provide you with the best offers and products shop with DAAM') }} </p>
        </div>
      </div>
      <div class="row">
      @foreach ($items as $item)  
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="{{Storage::url($item->image->url ?? '')}}" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3><a href="#">{{app()->getLocale() == 'ar' ? $item->ar_item_name : $item->item_name }}</a></h3>
              <div class="mb-3">
                <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> {{$item->price}}</span>
                <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> {{$item->price}}</span>
              </div>

              <p class="mb-4">{!! app()->getLocale() == 'ar' ? $item->ar_description : $item->description !!}</p>

              <div>
                {{__('price')}} : {{$item->price}}
              </div>
              <div>

                <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
              </div>
            </div>
          </div>
        </div>
       @endforeach
     
      </div>
    </div>
  </div>
  
  <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url({{asset('website/images/888.png')}}); background-attachment: fixed;" data-aos="fade">
    <div class="container">

      <div class="row align-items-center justify-content-center">
        <form class="col-md-7" method="post">
          <h2>  {{ __('We give you the best') }}  </h2>
          
         
            <div>
                   <a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">اتصل بنا</a>
            </div>
        </form>
          
      </div>
   
    </div>
  </div>

 
  <div class="site-section" id="about-section">
    <div class="container">
      <div class="row align-items-lg-center">
        <div class="col-md-8 mb-5 mb-lg-0 position-relative">
          <img src="{{asset('website/images/d8.jpg')}}" class="img-fluid" alt="Image">
          <div class="experience">
            <span class="year">Trusted Merchant</span>
            <span class="caption">for 50 years</span>
          </div>
        </div>
        <div class="col-md-3 ml-auto">
          <h3 class="section-sub-title">{{ __('Merchant Company') }}</h3>
          <h2 class="section-title mb-3">{{ __('About Us') }}</h2>
          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
          <p><a href="#" class="btn btn-black btn-black--hover rounded-0">{{ __('Learn More') }}</a></p>
        </div>
      </div>
    </div>
  </div>



 
  
  <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url({{asset('website/images/ctv.jpg')}}); background-attachment: fixed; background-position: top;" data-aos="fade">
    <div class="container">

      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <h3 class="section-sub-title">{{ __('Special Promo') }}</h3>
          <h3 class="section-title text-white mb-4">{{ __('Adverticment') }}</h3>
          <p class="mb-5 lead">Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          <div id="date-countdown" class="mb-5"></div>
          <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section bg-light" id="services-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h3 class="section-sub-title"> {{ __('Our Services') }}</h3>
          <h2 class="section-title mb-3">{{ __('We Offer Services') }}</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
            <div>
              <h3>{{ __('Business Consulting') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
            <div>
              <h3>{{ __('Market Analysis') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
            <div>
              <h3>{{ __('User Monitoring') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-beenhere"></span></div>
            <div>
              <h3>{{ __('Seller Consulting') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-business_center"></span></div>
            <div>
              <h3>{{ __('Financial Investment') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-cloud_done"></span></div>
            <div>
              <h3>{{ __('Financial Management') }}</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
@endsection