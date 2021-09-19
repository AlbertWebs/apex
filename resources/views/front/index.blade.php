@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
    <!-- Slider -->
    @include('front.home.slider')     

    {{-- Welcome Section --}}
    @include('front.home.welcome')
    
    {{-- Mision vision & Values --}}
    @include('front.home.vision-mission-values')

    {{-- Latest News --}}
    @include('front.home.latest')

    {{-- Pretty Counter --}}
    @include('front.home.pretty')

    {{-- Testimonials --}}
    @include('front.home.testimonials')
   
    {{-- Call To Action --}}
    @include('front.home.call-to-action-one')

    {{-- Projects Summary --}}
    @include('front.home.summary')
   
    {{-- Milestones --}}
    @include('front.home.milestones')

	<!-- Partners -->
    @include('front.home.partners')

    <!-- Latest Blog -->
    @include('front.home.latest-blog')

	<!-- Clients -->
    @include('front.home.clients')
  
</div>
<!-- Content END -->



@endsection