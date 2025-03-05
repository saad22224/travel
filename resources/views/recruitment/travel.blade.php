@extends('layout.recruitment_layout')
@section('content')
    <!--=====HERO AREA START =======-->

    <div class="hero9" style="background-image: url(assets/img/bg/hero9-bg.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-heading">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Where Talent Meets
                            Opportunity</span>
                        <h1 class="text-anime-style-3">Visa In: Your Passport to Opportunity</h1>
                        <div class="space16"></div>
                        <p>In Visa IN we are dedicated to facilitating your global explorations. We offer a full suite of travel solutions, backed by expert guidance and unwavering commitment to service, to craft truly unforgettable travel moments.

                        </p>
                        <div class="space30"></div>
                        {{-- <a class="theme-btn15" href="{{ route('contact') }}">Schedule a Consultation <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-images">
                        <div class="image1" data-aos="zoom-out" data-aos-duration="800">
                            <img src="assets\img\bg\alexey-starki-91ykdj2WQeg-unsplash.jpg" style="border-radius: 10%" alt="">
                        </div>
                        {{-- <div class="image2" data-aos="flip-right" data-aos-duration="800">
                            <img src="assets/img/hero/hero9-image2.png" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====HERO AREA END=======-->

    <!--=====HERO SLIDER AREA END=======-->

    <div class="hero9-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-slider">
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo1.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo2.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo3.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo4.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo5.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo6.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo1.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo2.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo3.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo4.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo5.png" alt="">
                        </div>
                        <div class="single-slider">
                            <img src="assets/img/logo/hero9-logo6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====HERO SLIDER AREA END=======-->

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

        <!--=====ABOUT AREA START=======-->

        {{-- <div class="about9 sp" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="images-all">
                            <div class="row align-items-center">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="image reveal overlay-anim">
                                        <img src="assets/img/team/business-concept-with-team-close-up.jpg" alt=""
                                            class="img-fluid fixed-size">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image reveal overlay-anim">
                                        <img src="assets/img/team/krakenimages-Y5bvRlcCx8k-unsplash.jpg" style=""
                                            alt="" class="img-fluid fixed-size">
                                    </div>
                                    <div class="mt-3"></div>
                                    <div class="image reveal overlay-anim">
                                        <img src="assets/img/about/about9-image3.png" alt=""
                                            class="img-fluid fixed-size">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .fixed-size {
                                width: 100%;
                                height: 250px;
                                /* تعديل الارتفاع حسب الحاجة */
                                object-fit: cover;
                                border-radius: 10px;
                                /* اختيارية لمظهر أكثر احترافية */
                            }
                        </style>

                    </div>
                    <div class="col-lg-6">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Our team</span>
                            <h2 class="text-anime-style-3">Building Bridges and Expanding Horizons.</h2>
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="700">
                                Our team comes with HR expertise, Hence, our clients benefit from an unmatched source of
                                mastery, market knowledge, and an in-depth understanding of their organizational needs.
                                We work across a range of industry verticals and job levels, from PA to C-Suite, to deliver
                                the best possible services that help our clients overcome their recruitment challenges.

                            </p>
                            <div class="space10"></div>
                            <div class="row" data-aos="fade-left" data-aos-duration="1000">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Tailored
                                            Staffing Solutions</li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Streamlined
                                            Hiring Process</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Ongoing Support
                                        </li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Experience Team
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="" data-aos="fade-left" data-aos-duration="1200">
                                <a class="theme-btn15" href="{{ route('about') }}">More About Us<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====about AREA END=======-->
        <style>
            @media(max-width:767px) {
                .image_mission {
                    display: none !important;
                }

                .image_why {
                    display: none !important;
                }
            }
        </style>
        <!--=====why AREA START=======-->
        {{-- 
        <div class="about9 sp" id="about" style="margin-bottom: 0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="images-all">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div>
                                        <div class="image_why reveal overlay-anim"
                                            style="width: 50vw; height: 100vh; overflow: hidden; display:flex; align-items: center;">
                                            <img src="assets/img/why/silhouette-confident-businesspeople.jpg"
                                                style="width: 80%; height: 70%; object-fit: cover; display: block;"
                                                alt="Image">
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> why VisaIN</span>
                            <h2 class="text-anime-style-3">Building Bridges and Expanding Horizons.</h2>
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="700">
                                Visa In is about building bridges and expanding horizons. We build bridges between talented
                                individuals and exceptional companies, and we open doors to new cultures and experiences
                                through our curated travel offerings. Both are about connecting people with opportunities
                                that will broaden their perspectives and enrich their lives, both professionally and
                                personally.

                            </p>
                            <div class="space10"></div>
                            <div class="row" data-aos="fade-left" data-aos-duration="1000">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Tailored
                                            Staffing Solutions</li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Streamlined
                                            Hiring Process</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Ongoing Support
                                        </li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Experience Team
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space30"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====why AREA END=======-->
        <!--=====mission AREA START=======-->

        {{-- <div class="about9 sp" id="about" style="margin:0; padding: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="images-all">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div>
                                        <div class="image_mission reveal overlay-anim"
                                            style="width: 50vw; height: 100vh; overflow: hidden; display:flex; align-items: center;">
                                            <img src="assets\img\why\group-people-working-out-business-plan-office.jpg"
                                                style="width: 80%; height: 70%; object-fit: cover; display: block;"
                                                alt="Image">
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Our Mission </span>
                            <h2 class="text-anime-style-3">Building Bridges and Expanding Horizons.</h2>
                            <div class="space16"></div>
                            <p data-aos="fade-left" data-aos-duration="700">
                                To empower organizations and individuals to thrive by connecting them with transformative
                                opportunities, both professionally and personally, through personalized recruitment
                                solutions and curated travel experiences.


                            </p>
                            <div class="space10"></div>
                            <div class="row" data-aos="fade-left" data-aos-duration="1000">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Tailored
                                            Staffing Solutions</li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Streamlined
                                            Hiring Process</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Ongoing Support
                                        </li>
                                        <li><span class="check"><i class="fa-solid fa-check"></i></span> Experience Team
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space30"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====mission AREA END=======-->
        <!--=====vision AREA START=======-->
        {{-- 
        <div class="about9 sp" id="about" style="margin:0; padding: 0;">
            <div class="container">
                <div class="row align-items-center">

                    <div class="">
                        <div class="heading9" style="width: 100%; display: flex; flex-direction:column">
                            <span class="span" data-aos="zoom-in-left" style="text-align: center !important; "
                                data-aos-duration="700"> Our Vision </span>

                            <div class="space16"></div>
                            <p data-aos="fade-left" style="text-align: center !important" data-aos-duration="700">

                                To be the leading global platform for enriching lives through meaningful connections,
                                fostering a world where individuals achieve their full potential and embrace diverse
                                cultures.



                            </p>
                            <div class="space10"></div>

                            <div class="space30"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====vision AREA END=======-->
        <!--=====values AREA START=======-->

        {{-- <div class="about9 sp d-flex align-items-center justify-content-center text-center"
      id="about" style="">
      <div class="container">
          <div class="row justify-content-center align-items-center">
              <div class="col-lg-8">
                  <div class="heading9">
                      <span class="span d-block" data-aos="zoom-in-left" data-aos-duration="700">Our Values</span>
                      <div class="space16"></div>
                      <div class="space10"></div>
                      <div class="row justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                          <div class="col-md-6">
                              <ul class="list list-unstyled">
                                  <li><span class="check"><i class="fa-solid fa-check"></i></span> Tailored Staffing Solutions</li>
                                  <li><span class="check"><i class="fa-solid fa-check"></i></span> Streamlined Hiring Process</li>
                              </ul>
                          </div>
                          <div class="col-md-6">
                              <ul class="list list-unstyled">
                                  <li><span class="check"><i class="fa-solid fa-check"></i></span> Ongoing Support</li>
                                  <li><span class="check"><i class="fa-solid fa-check"></i></span> Experience Team</li>
                              </ul>
                          </div>
                      </div>
                      <div class="space30"></div>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}

        <!--=====values AREA END=======-->
        <!--=====SERVICE AREA START=======-->

        {{-- <div class="service9 sp" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Our Categories </span>
                            <h2 class="text-anime-style-3">
                                Our expertise allows us to cater to our clients with Blue or/and White Collar,
                                in a variety of industries including but not limited to:
                            </h2>
                            <div class="space20"></div>
                            <p>
                                Healthcare, Manufacturing, Information Technology, Oil and Gas,
                                Engineering, Accounting, Banking and Finance, Construction, Consumer Products,
                                E-commerce, Education, Insurance, Legal, Travel, Retail, Professional Services,
                                Shipping and Logistics, and Hospitality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>

                <div class="row">
                    <!-- باقي العناصر كما هي -->
                </div>
            </div>
        </div> --}}


        <!--=====SERVICE AREA END=======-->

        <!--=====Target Audience START=======-->
        <style>
            .row:not(#recruitment-section .row) {
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
            }

            .work-box:not(#recruitment-section .work-box) {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
                padding: 20px;
                background: #fff;
                border-radius: 10px;
            }

            .heading-area:not(#recruitment-section .heading-area) {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
            }
            .large-image {
    width: 100%;
    max-width: 400px; /* حجم الصورة */
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}


        </style>

        <div class="work9 sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Our 
                                Services </span>
                            {{-- <h2 class="text-anime-style-3">Simple Staffing Procedures</h2> --}}
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg1.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img1.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3>  Flight Ticket Booking
                                    </h3>
                                    <p> We offer comprehensive and flexible flight ticket booking services,with a wide range of domestic and international airlines, ensuring the best available prices and options catering to the diverse needs of our clients.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg2.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img2.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3>Visas
                                    </h3>
                                    <p>We offer visa processing services for various countries worldwide. We assist our clients through every step of the application process, from document preparation to application submission and result tracking.
                                        Visa types: tourist visas, business visas, family visit visas, and more.
                                        
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3>Authorization of Work Visas for Individuals and Businesses
                                    </h3>
                                    <p>We assist companies in obtaining work visas for their foreign employees, providing necessary support in all legal procedures. In addition, we assist individuals in obtaining work visas.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3> Visits</h3>
                                    <p> Family, Personal, Tourist, Business, Commercial
                                        With comprehensive services for organizing all types of those visits, we assist clients with hotel bookings, tour arrangements, transportation services, and more.
                                        

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3>Tourist Programs

                                    </h3>
                                    <p>We offer a variety of tourist programs tailored to meet the interests of our clients.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3> Hajj and Umrah Services


                                    </h3>
                                    <p>We provide comprehensive services for organizing Hajj and Umrah pilgrimages, including flight bookings, hotel reservations, transportation services, and religious guidance.



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3> Booking Cruise Tickets



                                    </h3>
                                    <p>We offer cruise ticket booking services for various sea voyages worldwide.




                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                {{-- <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div> --}}
                                <div class="heading-area">
                                    <h3>  Issuing an International Driving Permit




                                    </h3>
                                    <p> We assist our clients in obtaining an International Driving Permit, enabling them to drive in various countries worldwide.






                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="work9 sp" id="recruitment-section" style="background: #f3f5f244 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                                Why Choose Visa IN for Travel & Tourism
                            </span>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                
                <!-- ✅ تقسيم الصفحة لصورة يمين وبوكسات يسار -->
                <div class="row align-items-center">
                    <!-- ✅ قسم البوكسات -->
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>24/7 support.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Competitive pricing.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Extensive flight options.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Exceptional customer service.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Convenient online and phone booking capabilities.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Expertise in labor and immigration laws.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Assistance in preparing all required documents.</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                                <div class="work-box">
                                    <div class="heading-area">
                                        <p>Precise tracking of authorization procedures.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- ✅ قسم الصورة -->
                    <div class="col-lg-4 col-md-12 text-center">
                        <img src="assets\img\service\kenny-eliason-n-YceUl10I0-unsplash.jpg" alt="Travel & Tourism" class="img-fluid large-image">
                    </div>
                </div>
            </div>
        </div>
        
        


{{-- 
        <div class="work9 sp" id="recruitment-section" style="background: #ffff !important; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Phases of Recruitment
                            </span>
                            <h2 class="text-anime-style-3">Simple Staffing Procedures</h2>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg1.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>Expertise</h3>
                                    <p> Client Relationship <br> Management.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg2.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>-Quality of Candidate</h3>
                                    <p>Needs Analysis <br> Phase.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>Time Saving
                                    </h3>
                                    <p>Candidate Sourcing and Screening Phase.


                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>Culture Driven
                                    </h3>
                                    <p>Shortlisting Candidate Presentation.



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>Broad Industry Coverage

                                    </h3>
                                    <p>Client interviews and <br> selection.



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                            <div class="work-box">
                                <div class="image-area">
                                    <div class="image1">
                                        <img src="assets/img/work/work9-bg3.png" alt="">
                                    </div>
                                    <div class="image2 overlay-anim">
                                        <img src="assets/img/work/work6-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="heading-area">
                                    <h3>Broad Industry Coverage

                                    </h3>
                                    <p> Offer and Placement




                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}


        {{-- 
        <div class="solutions9 sp" style="background: #F3F5F2;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Solutions We
                                Provide</span>
                            <h2 class="text-anime-style-3">Our Unique Selling Proposition </h2>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="solutions-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/others/solutions9-image1.png" alt="">
                            </div>
                            <div class="heading-area">
                                <div class="icon">
                                    <img src="assets/img/icons/solutions9-icon1.svg" alt="">
                                </div>
                                <div class="heading">
                                    <h4><a href="service-details.html">Highest Success Rates</a></h4>
                                    <p>Comprehensive Services: Visas, flights,hotels, tours, and employment opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="solutions-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/others/solutions9-image2.png" alt="">
                            </div>
                            <div class="heading-area">
                                <div class="icon">
                                    <img src="assets/img/icons/solutions9-icon2.svg" alt="">
                                </div>
                                <div class="heading">
                                    <h4><a href="service-details.html">Recruitment Solutions</a></h4>
                                    <p>Reliable Job Placements: Partnerships with accredited international <br> employers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in-up" data-aos-duration="1100">
                        <div class="solutions-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/others/solutions9-image3.png" alt="">
                            </div>
                            <div class="heading-area">
                                <div class="icon">
                                    <img src="assets/img/icons/solutions9-icon3.svg" alt="">
                                </div>
                                <div class="heading">
                                    <h4><a href="service-details.html">Business Planning</a></h4>
                                    <p>Personalized Support: Tailored solutions for seamless travel and employment experiences.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <!--=====SHOLUTIONS AREA END=======-->

        <!--=====CASE AREA START=======-->

        {{-- <div class="case9 sp" id="case">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> case studies</span>
                            <h2 class="text-anime-style-3">Our Success All Project</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arrows-button">
                            <button class="case7-next-arrow1"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="case7-prev-arrow1"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="case7-slider" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image1.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing solution</p>
                                <h4><a href="service-details.html">Real-World Staffing Solutions</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image2.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing success</p>
                                <h4><a href="service-details.html">Client Success Highlights</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image3.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing Challenge</p>
                                <h4><a href="service-details.html">Transforming Challenges Into</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image1.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing solution</p>
                                <h4><a href="service-details.html">Real-World Staffing Solutions</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image2.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing success</p>
                                <h4><a href="service-details.html">Client Success Highlights</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="image">
                                <img src="assets/img/service/service7-image3.png" alt="">
                            </div>
                            <div class="hover-area">
                                <p>staffing Challenge</p>
                                <h4><a href="service-details.html">Transforming Challenges Into</a></h4>
                                <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div> --}}

        <!--=====CASE AREA END=======-->

        <!--=====TESTIMONIAL AREA START=======-->

        {{-- <div class="tes9 sp" id="tes" style="background-color: #F3F5F2;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> our testimonials</span>
                            <h2 class="text-anime-style-3">Stories From Our Client</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arrows-button">
                            <button class="tes6-next-arrow"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="tes6-prev-arrow"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="space60"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tes6-all-slider" data-aos="fade-up" data-aos-duration="800">
                            <div class="tes6-slider">
                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>“At VisaIN, we pride ourselves on the positive impact we make for our clients and
                                        candidates. But don’t just take our word for it-hear from those who have experienced
                                        our staffing solutions.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img1.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Tina Wilkinson</a>
                                            <p class="text">CEO, Wingree Ltd</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>"Success stories from our clients and candidates are at the heart of what we do. Our
                                        testimonials provide insight to into how VisaIN has helped your own businesses find
                                        top talent individuals.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img2.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Alex Ferguson</a>
                                            <p class="text">CEO, Ranboz Ltd</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>"Our success is best told through the experiences of those we've had the on privilege
                                        to work with. At VisaIN best Company Name], our testimonials are a collection of
                                        real-life success stories.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img3.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Alzari Joseph</a>
                                            <p class="text">CEO, BIGS Ltd</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>“At VisaIN, we pride ourselves on the positive impact we make for our clients and
                                        candidates. But don’t just take our word for it-hear from those who have experienced
                                        our staffing solutions.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img1.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Tina Wilkinson</a>
                                            <p class="text">CEO, Wingree Ltd</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>"Success stories from our clients and candidates are at the heart of what we do. Our
                                        testimonials provide insight to into how VisaIN has helped your own businesses find
                                        top talent individuals.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img2.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Alex Ferguson</a>
                                            <p class="text">CEO, Ranboz Ltd</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-slider">
                                    <img src="assets/img/icons/qute9.png" alt="" class="qute">
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>"Our success is best told through the experiences of those we've had the on privilege
                                        to work with. At VisaIN best Company Name], our testimonials are a collection of
                                        real-life success stories.”</p>
                                    <div class="bottom-area">
                                        <div class="image">
                                            <img src="assets/img/testimonial/tes6-img3.png" alt="">
                                        </div>
                                        <div class="heading">
                                            <a href="#">Alzari Joseph</a>
                                            <p class="text">CEO, BIGS Ltd</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====TESTIMONIAL AREA END=======-->

        <!--=====TEAM AREA START=======-->

        {{-- <div class="team9" id="team" style="background-image: url(assets/img/bg/team7-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> team members</span>
                            <h2 class="text-anime-style-3">Introducing Our Team of Specialists</h2>
                        </div>
                    </div>
                </div>
                <div class="row _relative">
                    <div class="col-lg col-md-4 col-6">
                        <div class="team-box top">
                            <h5><a href="#">Alex Robertson</a></h5>
                            <p>Founder, Analysts</p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-6">
                        <div class="team-box">
                            <h5><a href="#">Alex Robertson</a></h5>
                            <p>Founder, Analysts</p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-6">
                        <div class="team-box top">
                            <h5><a href="#">Alex Robertson</a></h5>
                            <p>Founder, Analysts</p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-6">
                        <div class="team-box">
                            <h5><a href="#">Alex Robertson</a></h5>
                            <p>Founder, Analysts</p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-6">
                        <div class="team-box top">
                            <h5><a href="#">Alex Robertson</a></h5>
                            <p>Founder, Analysts</p>
                        </div>
                    </div>
                    <div class="main-image">
                        <img src="assets/img/team/team7-image.png" alt="">
                    </div>
                </div>
            </div>
        </div> --}}

        <!--=====TEAM AREA END=======-->

        <!--=====BLOG AREA START=======-->

        {{-- <div class="blog9 sp" id="blog" style="background-color: #F3F5F2;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> Our Blog</span>
                            <h2 class="text-anime-style-3">Latest News & Articles</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="blog-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/blog/blog9-img1.png" alt="">
                            </div>
                            <div class="heading">
                                <a href="#" class="date"><img src="assets/img/icons/date7.svg" alt=""> 8
                                    December 2024</a>
                                <h4><a href="blog-details.html">How To Create An Recruitment Strategy For Your Business</a>
                                </h4>
                                <a href="blog-details.html" class="learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="700">
                        <div class="blog-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/blog/blog9-img2.png" alt="">
                            </div>
                            <div class="heading">
                                <a href="#" class="date"><img src="assets/img/icons/date7.svg" alt=""> 6
                                    september 2024</a>
                                <h4><a href="blog-details.html">Navigating the Challenges of Remote Work Recruitment</a>
                                </h4>
                                <a href="blog-details.html" class="learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="blog-box">
                            <div class="image overlay-anim">
                                <img src="assets/img/blog/blog9-img3.png" alt="">
                            </div>
                            <div class="heading">
                                <a href="#" class="date"><img src="assets/img/icons/date7.svg" alt="">
                                    12 april 2024</a>
                                <h4><a href="blog-details.html">How Retain In Talent: Strategies for Employee
                                        Engagement</a></h4>
                                <a href="blog-details.html" class="learn">learn more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <!--=====BLOG AREA END=======-->

        <!--=====CONTACT AREA START=======-->
        <style>
            .custom-quote {
                font-style: italic;
                color: #333;
                background: #f9f9f9;
                border-left: 5px solid #007bff;
                padding: 15px 20px;
                margin: 20px 0;
                font-size: 18px;
                line-height: 1.6;
                text-align: center;
                border-radius: 8px;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
        <div class="contact9 sp" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading9">
                            {{-- <blockquote class="custom-quote" data-aos="zoom-in-left" data-aos-duration="700">
                                <p>Leave it to us to handle your recruitment needs while you focus on achieving your daily
                                    goals. We can support you with distinctive talents from around the world to add value to
                                    your organization.</p>
                            </blockquote> --}}

                            {{-- <h2 class="text-anime-style-3">Let's Start The Conversation</h2> --}}
                        </div>
                    </div>
                </div>

                <div class="contact9-content-area">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="form-area">
                                <h3>Send Us A Message</h3>
                                <div class="space16"></div>
                                <p>Our response time is within 30 minutes during business hours</p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="number" placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <input type="text" placeholder="Service Type">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <textarea rows="4" placeholder="Message"></textarea>
                                            </div>
                                            <div class="button-area">
                                                <button class="theme-btn15" type="submit">subscribe <span><i
                                                            class="fa-solid fa-arrow-right"></i></span></button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="" data-aos="fade-left" data-aos-duration="700">
                                <div class="contact9-box">
                                    <div class="icon">
                                        <img src="assets/img/icons/contact9-icon1.svg" alt="">
                                    </div>
                                    <div class="heading">
                                        <h5>Our Location</h5>
                                        <a href="#">8708 Technology Forest Pl Suite <br> 125 -G, The Woodlands, TX
                                            77381</a>
                                    </div>
                                </div>
                            </div>

                            <div class="" data-aos="fade-left" data-aos-duration="900">
                                <div class="contact9-box">
                                    <div class="icon">
                                        <img src="assets/img/icons/contact9-icon2.svg" alt="">
                                    </div>
                                    <div class="heading">
                                        <h5>Call Or Text</h5>
                                        <a href="tel:123-456-7890">123-456-7890</a>
                                    </div>
                                </div>
                            </div>

                            <div class="" data-aos="fade-left" data-aos-duration="1100">
                                <div class="contact9-box">
                                    <div class="icon">
                                        <img src="assets/img/icons/contact9-icon3.svg" alt="">
                                    </div>
                                    <div class="heading">
                                        <h5>Email Us Today</h5>
                                        <a href="mailto:info@taxvice.com">info@taxvice.com</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====CONTACT AREA END=======-->

    </div>

    <!--=====CTA AREA START=======-->

    {{-- <div class="cta9">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="heading6-w">
                        <h2>Ready To Power Up Your Savings And Reliability?</h2>
                        <div class="space16"></div>
                        <p>Feel free to customize this paragraph to better reflect the specific services offered by your IT
                            solution & the unique </p>

                        <div class="form-area">
                            <form action="#">
                                <input type="email" placeholder="Your Email Address">
                                <div class="button">
                                    <button class="theme-btn15" type="submit">subscribe <span><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="images">
                        <div class="img1">
                            <img src="assets/img/others/cta6-bg.png" alt="">
                        </div>
                        <div class="img2">
                            <img src="assets/img/others/cta6-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--=====CTA AREA END=======-->
@endsection
