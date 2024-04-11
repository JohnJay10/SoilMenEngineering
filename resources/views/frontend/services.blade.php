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
              @if($StandardPenetrationTests && $StandardPenetrationTests->count() > 0)
            @foreach($StandardPenetrationTests as $StandardPenetrationTest)
              <div class="project-post-image"><a href="{{ route('spt') }}"><img src="{{ asset($StandardPenetrationTest->image) }}" alt=""></a><a href="{{ route('spt') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('spt') }}">
                  <h4>Standard Penetration Test</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif

             <div class="col-sm-4 project-post-info">
              @if($DutchConePenetrations && $DutchConePenetrations->count() > 0)
              @foreach($DutchConePenetrations as $DutchConePenetration)
              <div class="project-post-image"><a href="{{ route('dcp') }}"><img src="{{ asset($DutchConePenetration->image) }}" alt=""></a><a href="{{ route('dcp') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('dcp') }}">
                  <h4>Dutch Cone Penetration</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif
            <div class="col-sm-4 project-post-info">
              @if($LabTestServices && $LabTestServices->count() > 0)
              @foreach($LabTestServices as $LabTestService)
              <div class="project-post-image"><a href="{{ route('lts') }}"><img src="{{ asset($LabTestService->image) }}" alt=""></a><a href="{{ route('lts') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('lts') }}">
                  <h4>Lab Test Service</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif
            <div class="col-sm-4 project-post-info">
              @if($CalibrationOfEquipments && $CalibrationOfEquipments->count() > 0)
              @foreach($CalibrationOfEquipments as $CalibrationOfEquipment)
              <div class="project-post-image"><a href="{{ route('coe') }}"><img src="{{ asset($CalibrationOfEquipment->image) }}" alt=""></a><a href="{{ route('coe') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('coe') }}">
                  <h4>Calibration Of Equipment</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif
            <div class="col-sm-4 project-post-info">
              @if($PavementEvaluationTests && $PavementEvaluationTests->count() > 0)
              @foreach($PavementEvaluationTests as $PavementEvaluationTest)
              <div class="project-post-image"><a href="{{ route('pet') }}"><img src="{{ asset($PavementEvaluationTest->image) }}" alt=""></a><a href="{{ route('pet') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('pet') }}">
                  <h4>Pavement Evaluation Test</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif

            <div class="col-sm-4 project-post-info">
              @if($QualityControls && $QualityControls->count() > 0)
              @foreach($QualityControls as $QualityControl)
              <div class="project-post-image"><a href="{{ route('qa') }}"><img src="{{ asset($QualityControl->image) }}" alt=""></a><a href="{{ route('qa') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('qa') }}">
                  <h4>Quality Control</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif

            <div class="col-sm-4 project-post-info">
              @if($StructuralIntegrityTests && $StructuralIntegrityTests->count() > 0)
              @foreach($StructuralIntegrityTests as $StructuralIntegrityTest)
              <div class="project-post-image"><a href="{{ route('sit') }}"><img src="{{ asset($StructuralIntegrityTest->image) }}" alt=""></a><a href="{{ route('sit') }}" class="four_arrow_hover_box"><span class="arrows"><span></span></span></a></div>
              <div class="info-text"><a href="{{ route('sit') }}">
                  <h4>Structural Integrity Test</h4></a>
                
              </div>
              @endforeach
            </div>
            @else
            @endif
           
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
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href="{{ route('contact-us') }}" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection