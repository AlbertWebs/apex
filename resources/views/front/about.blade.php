@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">About Us </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>About Us </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
     
    <!-- Slider END -->
    @foreach ($Content as $item)
        
   
      <!-- contact area -->
      <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row align-items-center" style="text-align: center !important; padding-bottom:100px;">
                    <div class="col-lg-11 col-md-12 m-b30 wow fadeIn" data-wow-duration="3s" data-wow-delay="0.3s" style="margin: 0 auto !important">
                        <div class="our-story">
                            <span>About Us</span>
                            <h2 class="title">Welcome To Apex Engineering<br/><span class="text-primary">since 2013</span></h2>
                            {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                            
                                           
                            <br><br>
                            <a  href="#" class="site-button black btnhover20 theProfile"><i class="ti-download"></i> Company Profile</a>
                                        <br><br>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @include('front.home.vision-mission-values')
    
 


</div>
<!-- Content END -->
@endsection