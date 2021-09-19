@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">The Company </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li>The Company </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
     
    <!-- Slider END -->
      <!-- contact area -->
    @include('front.about.company')

    @include('front.home.pretty')

    @include('front.about.organization')

    @include('front.home.milestones')

    @include('front.about.team')
   

    
 


</div>
<!-- Content END -->
@endsection