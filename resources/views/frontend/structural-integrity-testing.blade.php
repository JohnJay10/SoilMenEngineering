@extends('layouts.master')
  @section('content')

   <!-- Inner Header-->
   <section class="inner-banner2 clearfix">
    <div class="container clearfix">
      <h2>Structural Integrity Test</h2>
    </div>
  </section>
  <section class="breadcumb-wrapper">
    <div class="container clearfix">
      <ul class="breadcumb">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><span>sit</span></li>
      </ul>
    </div>
  </section>
  <!-- Project  Page-->
  <section class="core-projects sectpad">
    <div class="container clearfix">
      <h1>STRUCTURAL INTEGRITY TEST</h1>
      {{-- <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p> --}}
    </div>
  </section>
  <!-- Projects-->
  <section class="project-post-area sectpad">
    <div class="container clearfix">
      <div class="project-post">
          <div class="row">
            @if($StructuralIntegrityTests && $StructuralIntegrityTests->count() > 0)
            <div class="row">
                @foreach($StructuralIntegrityTests->chunk(3) as $chunk)
                    <div class="row">
                        @foreach($chunk as $index => $StructuralIntegrityTest)
                            <div class="col-md-4 project-post-info">
                                <div class="project-post-image image_hover">
                                    <img src="{{ asset($StructuralIntegrityTest->image) }}" alt="Image {{ $index + 1 }}" class="zoom_img_effect">
                                    <div class="info-text">
                                        <h4>{{ $StructuralIntegrityTest->title }}</h4>
                                        <!-- Add any additional information or links here -->
                                    </div>
                                </div>   
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-sm-12">
                <p>No images found.</p>
            </div>
        @endif
        
          </div>
          {{ $StructuralIntegrityTests->links('pagination::bootstrap-4') }}

      </div>
  </div>
  
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