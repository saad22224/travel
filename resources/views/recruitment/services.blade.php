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
                        <p>Visa IN is a strategic talent partner, not just a recruitment agency. We work closely with
                            organizations to understand their needs and connect them with top professionals. Our experienced
                            recruiters provide personalized guidance and support throughout the process, ensuring successful
                            placements and building long-term relationships for both clients and candidates.
                        </p>
                        <div class="space30"></div>
                        {{-- <a class="theme-btn15" href="{{ route('contact') }}">Schedule a Consultation <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-images">
                        <div class="image1" data-aos="zoom-out" data-aos-duration="800">
                            <img src="assets/img/hero/hero9-image1.png" alt="">
                        </div>
                        <div class="image2" data-aos="flip-right" data-aos-duration="800">
                            <img src="assets/img/hero/hero9-image2.png" alt="">
                        </div>
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

        <div class="about9 sp" id="about">
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
                            {{-- <h2 class="text-anime-style-3">Building Bridges and Expanding Horizons.</h2> --}}
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
                                {{-- <a class="theme-btn15" href="{{ route('about') }}">More About Us<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <div class="service9 sp" id="service">
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
        </div>


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
            .industries-box {
    min-height: 450px  !important; /* أو أي قيمة تناسب تصميمك */
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
}

        </style>

    
                <!--=====INDUSTRIS AREA START=======-->

                <div class="industries7 sp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 m-auto text-center">
                                <div class="heading7">
                               
                                    <h2 class="text-anime-style-3">Our Recruitment
                                        Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="row">
                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="800">
                                <div class="industries-box">
                                    <h3 style="line-height: 1.7">Permanent Recruitment</h3>
                                    <div class="bottom">
                                        {{-- <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div> --}}
                                        <div class="pera">
                                            <p style="line-height: 1.7">Providing recruitment and executive search solutions is one of our major
                                                specializations. We offer quality and value by shortlisting professionals with
                                                exceptional abilities that not only fit the client's business needs but are mindful
                                                of the social and cultural environment of the country.
        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="1000">
                                <div class="industries-box">
                                    <h3 style="line-height: 1.7">Temporary recruitment</h3>
                                    <div class="bottom">
                                        {{-- <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div> --}}
                                        <div class="pera">
                                            <p style="line-height: 1.7">With our extensive knowledge, market data and candidate network, we can support you
                                                with temporarily filling a gap requirement, staff going for their annual leaves or
                                                maternity, or even facilitating additional staff required for
                                                major projects.
        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="1200">
                                <div class="industries-box">
                                    <h3 style="line-height: 1.7">Individual Hiring</h3>
                                    <div class="bottom">
                                        {{-- <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div> --}}
                                        <div class="pera">
                                            <p style="line-height: 1.7">We are providing tailored recruitment solutions to fill specific, individual job
                                                openings for our clients.
        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="1400">
                                <div class="industries-box">
                                    <h3 style="line-height: 1.7">Bulk Hiring</h3>
                                    <div class="bottom">
                                        {{-- <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div> --}}
                                        <div class="pera">
                                            <p style="line-height: 1.7">We can assist you to hire a mass number of candidates in the shortest possible
                                                time taking into consideration the quality of talent needed in a cost-effective
                                                manner.
        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="1600">
                                <div class="industries-box">
                                    <h3 style="line-height: 1.7">Outsourcing Services</h3>
                                    <div class="bottom">
                                        {{-- <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div> --}}
                                        <div class="pera">
                                            <p style="line-height: 1.7">Whether you are a multinational or a local company, we can support you with
                                                hiring of staff on a contract basis. We cater to all types of industry requirements
                                                by understanding your company’s environment and required business skills to place
                                                the right talent in your firm.
        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="800">
                                <div class="industries-box">
                                    <h3>labor</h3>
                                    <div class="bottom">
                                        <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div>
                                        <div class="pera">
                                            <p>2344 Staffs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="1000">
                                <div class="industries-box">
                                    <h3>driving</h3>
                                    <div class="bottom">
                                        <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div>
                                        <div class="pera">
                                            <p>5432 Staffs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3" data-aos="zoom-out" data-aos-duration="900">
                                <div class="industries-box">
                                    <h3>caretaker</h3>
                                    <div class="bottom">
                                        <div class="icons">
                                            <img src="assets/img/icons/industries-icon.svg" alt="">
                                        </div>
                                        <div class="pera">
                                            <p>2344 Staffs</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>

                <!--=====INDUSTRIS AREA END=======-->



        <!--=====SERVICE AREA START=======-->

        <div class="service3 sp" id="service" style="background-image: url(assets/img/bg/service3-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading3">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Why Visa IN for
                                Recruitment </span>
                            {{-- <h2 class="text-anime-style-3">Temporary Staffing Services</h2> --}}
                            <div class="space16"></div>
                            {{-- <p data-aos="fade-up" data-aos-duration="700">With our proven track record and commitment to excellence, we're here to support your organization's growth and help you achieve</p> --}}
                        </div>
                    </div>
                </div>

                <div class="space30"></div>
                <div class="row">
                    <div class="col-lg-7" data-aos="zoom-in-up" data-aos-duration="700">
                        <div class="service3-box">
                            <div class="icon">
                                <i class="fa-solid fa-briefcase" style="color: #007bff; font-size: 40px;"></i>
                            </div>
                            <div class="heading3">
                                <h4>Expertise</h4>
                                <div class="space16"></div>
                                <p>Our recruitment consultants have the qualifications to search and shortlist a pool
                                    of candidates using time-tested methodologies <br> to help you find the best talent.
                                </p>
                                <div class="space16"></div>
                                {{-- <a href="#" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="zoom-in-up" data-aos-duration="800">
                        <div class="service3-box">
                            <div class="icon">
                                <i class="fa-solid fa-users" style="color: #007bff; font-size: 40px;"></i>
                            </div>
                            <div class="heading3">
                                <h4>Quality of Candidate</h4>
                                <div class="space16"></div>
                                <p>With our large database of candidates, we have the capability to provide you with the
                                    right talent who will fit in with both your organization and culture.
                                </p>
                                <div class="space16"></div>
                                {{-- <a href="service-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="service3-box" data-aos="zoom-in-up" data-aos-duration="1100">
                            <div class="icon">
                                <i class="fa-solid fa-clock" style="color: #007bff; font-size: 40px;"></i>
                            </div>
                            <div class="heading3">
                                <h4>Time Saving
                                </h4>
                                <div class="space16"></div>
                                <p>Our team of recruitment consultants use their network, access to a vast pool of
                                    talent database, business and market intelligence to
                                    source qualified candidates that enables an efficient and effective hiring
                                    experience.
                                </p>
                                <div class="space16"></div>
                                {{-- <a href="service-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-7" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="service3-box">
                            <div class="icon">
                                <i class="fa-solid fa-handshake" style="color: #007bff; font-size: 40px;"></i>
                            </div>
                            <div class="heading3">
                                <h4>Culture Driven
                                </h4>
                                <div class="space16"></div>
                                <p>We build long lasting relationships with our customers, we understand how you work
                                    and what is important to you. We use this information to save time in the hiring
                                    process, ensure that you hire the right talent that fits culture, community, and the
                                    needs of your organization.

                                </p>
                                <div class="space16"></div>
                                {{-- <a href="service-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="zoom-in-up" data-aos-duration="900">
                        <div class="service3-box">
                            <div class="icon">
                                <i class="fa-solid fa-building" style="color: #007bff; font-size: 40px;"></i>
                            </div>
                            <div class="heading3">
                                <h4>Broad Industry Coverage

                                </h4>
                                <div class="space16"></div>
                                <p>We work across a range of industry verticals and job levels from PA to C-Suite.



                                </p>
                                <div class="space16"></div>
                                {{-- <a href="service-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <img class="shape1" src="assets/img/shapes/sec3-shape.png" alt="">
        </div>


        <!--=====WORK AREA START=======-->

        <div class="work7 sp" style="background-color: #5957E5;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="heading6-w">
                            <span class="span" data-aos="zoom-in-left" data-aos-duration="700"> How we work</span>
                            <h2 class="text-anime-style-3">Phases of Recruitment
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="space30"></div>
                <div class="row _relative">
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="800">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon1.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Client Relationship <br> Management.
                                </h4>
                                {{-- <p>The applicant review process is  vital step in ensuring that only.</p> --}}
                            </div>
                            <img src="assets/img/shapes/work7-arrow1.png" alt="" class="shape1">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon2.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Needs Analysis <br> Phase.
                                </h4>
                                {{-- <p>Job analysis is a critical process understanding defining specific.</p> --}}
                            </div>
                            <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon2.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Candidate Sourcing and Screening Phase.
                                </h4>
                                {{-- <p>Job analysis is a critical process understanding defining specific.</p> --}}
                            </div>
                            {{-- <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2"> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon2.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4><a href="service-details.html">Job Analysis</a></h4>
                                <p>Job analysis is a critical process understanding defining specific.</p>
                            </div>
                            <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2">
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon3.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Shortlisting Candidate Presentation.
                                </h4>
                                {{-- <p>Job Place Check is an essential component our best Recrute. </p> --}}
                            </div>
                            <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon3.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Client interviews and <br> selection.

                                </h4>
                                {{-- <p>Job Place Check is an essential component our best Recrute. </p> --}}
                            </div>
                            <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work87-box" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <img src="assets/img/icons/work7-icon3.svg" alt="">
                            </div>
                            <div class="heading">
                                <h4 style="color: #fff">Offer and Placement


                                </h4>
                                {{-- <p>Job Place Check is an essential component our best Recrute. </p> --}}
                            </div>
                            {{-- <img src="assets/img/shapes/work7-arrow2.png" alt="" class="shape2"> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====WORK AREA END=======-->

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
                            <blockquote class="custom-quote" data-aos="zoom-in-left" data-aos-duration="700">
                                <p>Leave it to us to handle your recruitment needs while you focus on achieving your daily
                                    goals. We can support you with distinctive talents from around the world to add value to
                                    your organization.</p>
                            </blockquote>

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
