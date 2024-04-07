@extends('layouts.master')
  @section('content') 
  <!-- Inner Header-->
  <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Contact Us</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><span>Contact Us</span></li>
        </ul>
      </div>
    </section>
    <!-- Contact us Page-->
    <section class="core-projects touch">
      <div class="sectpad touch_bg">
        <div class="container clearfix">
          <h1>Stat connected</h1>
          <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or<br>Fill up below instant messaging programs.</p>
          <h6>Please be patient, We will get back to you. Our 24/7 Support, <span>General Inquireies Phone: +234 80 607 174 90 | +234 70 103 497 64</span></h6>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">Plot 50 & 51 FCDA Owners , Occupier Kubwa Express way Fct – Abuja.</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="">Soilmen13@gmail.com</a></div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">+234 80 607 174 90  <br>                                       +234 70 103 497 64</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 input_form">
              <form id="contactForm" action="http://galaxyanalytics.net/demos/industrial/contact_process.php" method="post">
                <input id="name" type="text" name="name" placeholder="First" class="form-control">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
                <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control"></textarea>
                <div class="row m0">
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
          </div>
        </div>
      </div>
    </section>
    <section id="map-area">
      <div id="contact-google-map" data-map-lat="-37.812802" data-map-lng="144.956981" data-icon-path="images/map/map-marker.png" data-map-title="Envato HQ" data-map-zoom="12" class="google-map"></div>
    </section>
    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href="contact.html" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->
    @endsection