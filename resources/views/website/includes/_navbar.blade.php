
   <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">
            <ul class="social-media">
             
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-left">
              <span class="mr-3"><a href="tel://#"> <span class="d-none d-lg-inline-block text-black">(+1) 234 5678 9101</span><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span></a></span>
              <span><a href="#"><span class="d-none d-lg-inline-block text-black">shop@yourdomain.com </span><span class="icon-phone mr-2" style="position: relative; top: 2px;"></span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" >

      <div class="container"  style="background-color:SKYBLUE;width:100%">
        <div class="row align-items-center"  style="background-color:DARKSLATEBLUE">
          
          <div class="col-6 col-xl-2" style="background-color:DARKSLATEBLUE">
              <a class="navbar-brand float-left" data-wow-duration="1s" data-wow-delay="1s" href="/">
                  <img src="{{asset('website/images/lodaam.png')}}" class="m-2" alt="mk n" width="50%" sizes="" srcset="" style="margin:auto"> </a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block" style="background-color:DARKSLATEBLUE">
            <nav class="site-navigation position-relative text-left" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li ><a href="#home-section" class="nav-link" style="color:white">{{ __('Home') }}</a></li>
                {{-- <li><a href="#blog-section" class="nav-link" style="color:white">{{ __('Blog') }}</a></li> --}}
                  <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                   {{ __('Products') }} 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $category)   
                     <a class="dropdown-item" href="{{route('products',$category)}}"> {{app()->getLocale() == 'ar' ? $category->ar_name : $category->name}} </a>
                  @endforeach
              </div>
            </li>

                <li><a href="#about-section" class="nav-link" style="color:white">{{ __('About') }} </a></li>
                <li><a href="#contact-section" class="nav-link" style="color:white">{{ __('Contact Us ') }}</a></li>
                <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="ourproduct.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                   {{ __('Language') }} 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="locale/ar"> Arabic </a>
                  <a class="dropdown-item" href="locale/en"> English </a>
              </div>
            </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>