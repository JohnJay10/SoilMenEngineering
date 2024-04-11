@extends('layouts.master')
  @section('content')
    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>About us</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><span>About Us</span></li>
        </ul>
      </div>
    </section>

    <section class="core-projects sectpad">
      <div class="container clearfix">
        <h1>ABOUT OUR COMPANY</h1>
        <p style="font-size: 18px";>Soilmen Engineering Services (Nig.) Limited (SESNL) is an indigenous COREN certified geotechnical engineering firm established in 2002 and incorporated in 2006.</p>
        <p style="font-size: 18px";>Our major areas of specialization are:</p>
        <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse in">
                      <div class="panel-body faq-content">
                        <p><span>A. Sub-soil Geotechnical Investigation for Buildings, Roads, Bridges and Dams.</span></p>
                        <p><span>B.	Structural Integrity Tests.</span></p>
                        <p><span>C. Concrete Mix Design QC/QA</span></p>
                        <p><span>D.	Asphalt Mix Design QC/QA</span></p>
                        <p><span>E.	Laboratory Test Services (this include all test for soil, concrete and asphalt)</span></p>
                        <p><span>F.	Calibration of Engineering Equipment.</span></p>
                      </div>
                    </div>

      </div>
    </section>

  
    <!-- features Section-->
    <div class="features-section">
      <div class="features-image"><img src="images/features/pr1.jpg" alt=""></div>
      <div class="features-area">
        <div class="features">
          <div class="features-content">
            <div class="media">
              
              <div class="media-body">
                <h4 class="media-heading">INNOVATION</h4>
                <p>We grow through creativity, invention <br>and innovation.</p>
                
              </div>
            </div>
            <div class="media">
              
              <div class="media-body">
                <h4 class="media-heading">PASSION FOR CLIENTS</h4>
                <p>We treat our client with respect <br> in good faith.</p>
              </div>
            </div>
          </div>
          <div class="features-content">
            <div class="media">
              
              <div class="media-body">
                <h4 class="media-heading">INTEGRITY</h4>
                <p>We integrate honesty, deligence, professionalism in all our dealings.</p>
              </div>
            </div>
            <div class="media">
              
              <div class="media-body">
                <h4 class="media-heading">LEADERSHIP</h4>
                <p>We possess the courage to rise above challenges and work through diversity and help others.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="about-tab-box sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <div class="tab-title-box">
              <ul role="tablist" class="clearfix">
                <li data-tab-name="history"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">Our VISION</a></li>
                <li data-tab-name="mission" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Our VALUES</a></li>
                <li data-tab-name="vision"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Our MISSION</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8 col-lg-9">
            <div class="tab-content-box tab-content about-tab">
              <div id="history" class="single-tab-content tab-pane fade">
                <h2>Our VISION</h2>
                <p style="font-size: 18px";>To Provide quality and standard engineering services that exceed the expectations of our esteemed clients on any form of civil engineering work.</p>
                
                <!-- <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/mission.jpeg" alt="" class="img-responsive"><img src="images/about/vision.jpeg" alt="" class="img-responsive"></div>
                </div> -->
              </div>
              <div id="mission" class="single-tab-content tab-pane fade in active">
                <h2>Our PURPOSE</h2>
                <p style="font-size: 18px";>To be a leader in the core engineering values by providing enhanced services, relationship and profitability.</p>
                <!-- <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-img1.jpg" alt="" class="img-responsive"><img src="images/about/abt-img2.jpg" alt="" class="img-responsive"></div>
                </div> -->
              </div>
              <div id="vision" class="single-tab-content tab-pane fade">
                <h2>Our MISSION</h2>
                <p style="font-size: 18px";>To boost the local content of engineering company in Nigeria through quality performance via the use of modern equipment and globally accepted standard with prompt and quality delivery services.</p>
                <p style="font-size: 18px";>To grow a dynamic work force and develop a mutually rewarding partnership with our client regulations and people of the community where we operate.</p>
                <!-- <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-img1.jpg" alt=""><img src="images/about/abt-img2.jpg" alt=""></div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team-->
   
  
  
    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href="{{ route('contact-us') }}" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->
    @endsection