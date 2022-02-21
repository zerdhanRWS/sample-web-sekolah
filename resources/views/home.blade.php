@extends('_layout.default')

@section('content')
  <div class="container">
    <div class="alert alert-info">Silahkan custom halaman ini, tidak ada batasan
    </div>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div>
  <!-- Spinner End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
      @if ($home->count())
      <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="img/carousel-1.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-sm-10 col-lg-8">
                              <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{ $home[0]->title1 }}</h5>
                              <h1 class="display-3 text-white animated slideInDown">{{ $home[0]->title2 }}</h1>
                              <p class="fs-5 text-white mb-4 pb-2">{{ $home[0]->title3 }}.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="img/carousel-2.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-sm-10 col-lg-8">
                              <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{ $home[1]->title1 }}</h5>
                              <h1 class="display-3 text-white animated slideInDown">{{ $home[1]->title2 }}</h1>
                              <p class="fs-5 text-white mb-4 pb-2">{{ $home[1]->title3 }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif
  <!-- Carousel End -->

  <!-- Service Start -->
  @if ($home->count())
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item text-center pt-3">
                      <div class="p-4">
                          <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                          <h5 class="mb-3">{{ $home[0]->title4 }}</h5>
                          <p>{{ $home[0]->title5 }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item text-center pt-3">
                      <div class="p-4">
                          <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                          <h5 class="mb-3">{{ $home[1]->title4 }}</h5>
                          <p>{{ $home[1]->title5 }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item text-center pt-3">
                      <div class="p-4">
                          <i class="fa fa-3x fa-home text-primary mb-4"></i>
                          <h5 class="mb-3">{{ $home[2]->title4 }}</h5>
                          <p>{{ $home[2]->title5 }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="service-item text-center pt-3">
                      <div class="p-4">
                          <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                          <h5 class="mb-3">{{ $home[3]->title4 }}</h5>
                          <p>{{ $home[3]->title5 }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif
  <!-- Service End -->

  <!-- About Start -->
  @if ($home->count())
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                  <h6 class="section-title bg-white text-start text-primary pe-3">{{ $el[0]->title1 }}</h6>
                  <h1 class="mb-4">{{ $el[0]->title2 }}</h1>
                  <p class="mb-4">{{ $el[0]->title3 }}</p>
                  <p class="mb-4">{{ $el[0]->title4 }}</p>
                  <div class="row gy-2 gx-4 mb-4">
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el[0]->title5 }}</p>
                      </div>
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el[0]->title6 }}</p>
                      </div>
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el[0]->title7 }}</p>
                      </div>
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el[0]->title8 }}</p>
                      </div>
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el[0]->title9 }}</p>
                      </div>
                      <div class="col-sm-6">
                          <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $el [0]->title10 }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif
  <!-- About End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          @if ($st->count())
          <div class="text-center">
              <h6 class="section-title bg-white text-center text-primary px-3">{{ $st[0]->title1 }}</h6>
              <h1 class="mb-5">{{ $st[0]->title2 }}</h1>
          </div>
          @endif
              
          
          <div class="owl-carousel testimonial-carousel position-relative"> 
            @foreach ($st as $st)      
              <div class="testimonial-item text-center">
                  <img class="border rounded-circle p-2 mx-auto mb-3" src="sample-image/{{ $st->gambar1 }}" style="width: 80px; height: 80px;">
                  <h5 class="mb-0">{{ $st->title3 }}</h5>
                  <p>{{ $st->title4 }}</p>
                  <div class="testimonial-text bg-light text-center p-4">
                  <p class="mb-0">{{ $st->title5 }}</p>
                  </div>
              </div>
              @endforeach
          </div>

      </div>
  </div>
  <!-- Testimonial End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
@endsection
