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
      <!-- contact area -->
      <div class="content-block">
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row align-items-center" style="text-align: center !important; padding-bottom:100px;">
                    <div class="col-lg-11 col-md-12 m-b30 wow fadeIn" data-wow-duration="3s" data-wow-delay="0.3s" style="margin: 0 auto !important">
                        <div class="our-story">
                            <span>About Us</span>
                            <h2 class="title">Welcome To Apex Engineering<br/><span class="text-primary">since 2013</span></h2>
                            {{-- <h4 class="title">Welcome To Apex Engineering</h4> --}}
                            {{--  --}}
                            <p><span style="color: #000000;">Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists, and technical specialists offering a broad range of professional services. At Apex Engineering LTD our work reflects our pride; we make it our number one goal to deliver practical, yet cost-efficient solutions tailored to meet your engineering needs and exceed your project expectations. We utilize the most modern communication and engineering technology to enhance our design methods, providing the most successful solutions to improve the overall value of your project.</span></p>
                            <p><span style="color: #000000;">At Apex Engineering LTD we commit the same attention and expertise to every project in our office. We have engineered a diverse range of projects including large master planned and mixed use communities, single and multi-family residential developments, commercial and retail shopping centers, office parks, industrial areas, schools, institutional centers, and government offices.</span></p>
                            <p><span style="color: #000000;">Founded in 2013 in Mogadishu Somalia, Apex Engineering has an established and respected reputation based on technical expertise, strong communication and personal and professional service. Our exceptional team skills and dynamic personalities have enabled us to thrive for nearly 6 years. Our team includes licensed Professional Engineers, Professional Land Surveyors, technicians, field crews, and support staff.</span>
                                            </p>
                            {{--  --}}
                           
                            <a download href="#" class="site-button black btnhover20"><i class="ti-download"></i> Company Profile</a>
                                        <br><br>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
   
    @include('front.home.vision-mission-values')
    
 


</div>
<!-- Content END -->
@endsection