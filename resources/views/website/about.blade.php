@extends('website.master')

@section('content')
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
          <h3 class="section-sub-title">{{ __('Electronic company') }}</h3>
          <h2 class="section-title mb-3">{{ __('About Us') }}</h2>
          <p class="mb-4">{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!') }}</p>
          <p><a href="#" class="btn btn-black btn-black--hover rounded-0">{{ __('Learn More') }}</a></p>
        </div>
      </div>
    </div>
  </div>



  <div class="site-section border-bottom" id="team-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h3 class="section-sub-title">{{ __('Team') }}</h3>
          <h2 class="section-title mb-3">{{ __('Leadership') }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="person text-center">
            <img src="{{asset('website/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>John Rooster</h3>
            <p class="position text-muted">{{ __('Co-Founder, President') }}</p>
            <p class="mb-4">{{ __('Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="person text-center">
            <img src="{{asset('website/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>Tom Sharp</h3>
            <p class="position text-muted">{{ __('Co-Founder, COO') }}</p>
            <p class="mb-4">{{ __('Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="person text-center">
            <img src="{{asset('website/images/person_4.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>Winston Hodson</h3>
            <p class="position text-muted">{{ __('Marketing') }}</p>
            <p class="mb-4">{{ __('Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url({{asset('website/images/ctv.jpg')}}); background-attachment: fixed; background-position: top;" data-aos="fade">
    <div class="container">

      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <h3 class="section-sub-title">{{ __('Special Promo') }}</h3>
          <h3 class="section-title text-white mb-4">{{ __('Summer Sale') }}</h3>
          <p class="mb-5 lead">{{ __('Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.') }}</p>
          
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
          <h3 class="section-sub-title">{{ __('Our Services') }}</h3>
          <h2 class="section-title mb-3">{{ __('We Offer Services') }}</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
            <div>
              <h3>{{ __('Business Consulting') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
            <div>
              <h3>{{ __('Market Analysis') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
            <div>
              <h3>{{ __('User Monitoring') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-beenhere"></span></div>
            <div>
              <h3>{{ __('Seller Consulting') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-business_center"></span></div>
            <div>
              <h3>{{ __('Financial Investment') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary icon-cloud_done"></span></div>
            <div>
              <h3>{{ __('Financial Management') }}</h3>
              <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.') }}</p>
              <p><a href="#">{{ __('Learn More') }}</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection