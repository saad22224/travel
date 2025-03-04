@extends('layout.app')

@section('content')

<!--=====HERO AREA START =======-->

{{-- <div class="hero7" style="background-image: url(assets/img/bg/hero7-bg.jpg);">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-5">
              <div class="main-heading">
                  <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Where Talent Meets Opportunity</span>
                  <h1 class="text-anime-style-3">A Bridge Between Your Business And Exceptional Talent</h1>
                  <div class="space16"></div>
                  <p>At Recrute, we specialize connecting top-tier talent with industry-leading companies. Whether you're a business.</p>
                  <div class="space30"></div>
                  <a class="theme-btn13" href="#contact7">Schedule a Consultation</a>
              </div>
          </div>
          <div class="col-lg-7">
              <div class="hero7-images">
                  <div class="cs_height_118 cs_height_lg_70"></div>
                  <div class="cs_case_study_1_list">
                    <div class="cs_case_study cs_style_1 cs_hover_active active">
                      <div class="cs_case_study_thumb cs_bg_filed" data-src="assets/img/hero/hero7-image1.png"></div>
                    </div>
                    <div class="cs_case_study cs_style_1 cs_hover_active">
                      <div class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed" data-src="assets/img/about/about1-img1.png"></div>
                    </div>
                    <div class="cs_case_study cs_style_1 cs_hover_active">
                      <div class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed" data-src="assets/img/about/about1-img1.png"></div>
                    </div>
                  </div>
                  <img src="assets/img/shapes/hero7-shape.png" alt="" class="shape shape-animaiton4">
              </div>
          </div>
      </div>
  </div>
</div> --}}

<!--=====HERO AREA END=======-->



<!--=====CTA AREA START=======-->

<div class="cta7" style="height: 100vh; background-image: url(assets/img/bg/cta7-bg.jpg);">
  <div class="container">
      <div class="row align-items-center">
        <div class="col-3"></div>
          <div class="col-lg-6">
              <div class="heading6-w">
                  <h2>Ready To Power Up Your Savings And Reliability?</h2>
                  <div class="space16"></div>
                  <p>Feel free to customize this paragraph to better reflect the specific services offered by your IT solution & the unique </p>

                  {{-- <div class="form-area">
                      <form action="#">
                          <input type="email" placeholder="Your Email Address">
                          <div class="button">
                              <button class="theme-btn12" type="submit">subscribe</button>
                          </div>
                      </form>
                  </div> --}}
                  <div class="space30"></div>
                    <div class="hero1-buttons" data-aos="fade-right" data-aos-duration="1200">
                        {{-- <a class="theme-btn1" href="service.html">Start Your Search <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                        <a class="theme-btn2" href="{{route('recruitment')}}">Recruitment <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        <a class="theme-btn2" href="{{route('travel')}}">Travel <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
              </div>
          </div>
          <div class="col-3"></div>
      </div>
  </div>
</div>

<!--=====CTA AREA END=======-->

@endsection

