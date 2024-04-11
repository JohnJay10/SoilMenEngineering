@extends('layouts.master')
  @section('content') 
<section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Request a Quote</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
          <li><span>REQUEST A QUOTE</span></li>
        </ul>
      </div>
    </section>
    <!-- Request a quote Page-->
    <section class="check-project testimonials sectpad touch">
      <div class="container clearfix touch_bg">
        <div class="section_header-r color">
          <h2>fill out below form</h2>
        </div>
        <div class="row m0 req-page-area touch_middle">
          <div class="col-md-8 col-sm-12 col-xs-12 pull-left input_form">
            <form id="requestForm" action="http://galaxyanalytics.net/demos/industrial/contact_process.php" method="post">
              <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Name</span>
                <input id="name" type="text" name="name" placeholder="First" class="form-control">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m0"><span>Your Email</span>
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Subject</span>
                <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Your Company Name</span>
                <input id="company" type="text" name="company" placeholder="Your Company Name" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Project Name</span>
                <input id="project" type="text" name="project" placeholder="Project Name" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Give Some Details </span>
                <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control"></textarea>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-default submit">Submit Now <i class="fa fa-angle-double-right"></i></button>
              </div>
            </form>
            <div id="success">
              <p>Your message sent successfully.</p>
            </div>
            <div id="error">
              <p>Something is wrong. Message cant be sent!</p>
            </div>
          </div>
          <div class="col-md-4 hidden-sm text-left pull-right">
            <div>
              <p>We will call you and give a cost estimate of your project upon your submission.</p>
              <p>We will keep your details 100% privacy</p>
            </div>
          </div>
          <!-- <div class="req-img"><img src="images/get-touch/1.jpg" alt="" class="img-responsive"></div> -->
        </div>
      </div>
    </section>
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
    @endsection