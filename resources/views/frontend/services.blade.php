@extends('layouts.master')
  @section('content') 
 
 <!-- Inner Header-->
 <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Services</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{ route('index') }}">Home</a></li>
          <li><span>Services</span></li>
        </ul>
      </div>
    </section>
    <!-- Project  Page-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <h1>OUR SERVICES</h1>
        <p style="font-size: 18px";>So far our engineering team and their capabilities speak for themselves across the country with a proven track record of success on numerous project while maintaining global standard, code and ethics of engineering. Among the project we have successfully executed are;</p>
      </div>
    </section>
    <!-- Projects-->
    <section class="project-post-area sectpad">
      <div class="container clearfix">
        <div class="project-post">
          <div class="row">
            <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="{{ route('spt') }}"><img src="images/projects/pro1.jpg" alt=""></a><a href="{{ route('spt') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('spt') }}">
                  <h4>Standard Penetration Test</h4></a>
                
              </div>
            </div>
            <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="{{ route('lts') }}"><img src="images/projects/pro2.jpg" alt=""></a><a href="{{ route('lts') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('lts') }}">
                  <h4>Laboratory Test Services</h4></a>
                
              </div>
            </div>
            <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="{{ route('sit') }}"><img src="images/projects/pro3.jpg" alt=""></a><a href="{{ route('sit') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('sit') }}">
                  <h4>Structural Integrity Testing</h4></a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="project-post">
          <div class="row">
            <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="{{ route('coe') }}"><img src="images/projects/pro4.jpg" alt=""></a><a href="{{ route('coe') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('coe') }}">
                  <h4>Calibration of Equipments</h4></a>
                
              </div>
            </div>
            <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="{{ route('pet') }}"><img src="images/projects/pro5.jpg" alt=""></a><a href="{{ route('pet') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('pet') }}">
                  <h4>Pavement Evaluation Test</h4></a>
                
              </div>
            </div>
            {{-- <div class="col-sm-4 project-post-info">
              <div class="project-post-image"><a href="projects-details.html"><img src="images/projects/pro5.jpg" alt=""></a><a href="projects-details.html" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="projects-details.html">
                  <h4>Pavement Evaluation Test</h4></a>
                
              </div>
            </div> --}}
          </div>
        </div>
        
      </div>
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

    @endsection