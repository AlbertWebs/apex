@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white"> Portfolio </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Portfolio </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            
            <div class="content-block">
              		<!-- Portfolio Details -->
			<div class="section-full content-inner bg-white">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-b30">
							<h2 class="text-black font-weight-600 m-b15">Project Information</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
							<div class="row widget widget_getintuch widget_getintuch-pro-details m-lr0">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
									<div class="pro-details">
										<i class="ti ti-user"></i>
										<strong>CLIENT</strong> Martin Stewart
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
									<div class="pro-details">
										<i class="ti ti-location-pin"></i>
										<strong>LOCATION</strong>London, UK
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
									<div class="pro-details">
										<i class="ti ti-ruler-alt-2"></i>
										<strong>SIZE</strong>1,200m<sup>2</sup>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
									<div class="pro-details">
										<i class="ti ti-home"></i>
										<strong>TYPE</strong>Residential Project
									</div>
								</div>
							</div>
							<h2 class="text-black font-weight-600 m-b15">Scoope Of Work</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>
							<div class="row">
								<div class="col-lg-12">
									<div class="icon-bx-wraper m-b30 left">
										<div class="icon-md"> 
											<a href="javascript:void(0);" class="icon-cell text-primary">
												<i class="flaticon-factory"></i>
											</a> 
										</div>
										<div class="icon-content">
											<h5 class="dlab-tilte">Material Engineering</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
										</div>
									</div>
									<div class="icon-bx-wraper m-b30 left">
										<div class="icon-md"> 
											<a href="javascript:void(0);" class="icon-cell text-primary">
												<i class="flaticon-settings"></i>
											</a> 
										</div>
										<div class="icon-content">
											<h5 class="dlab-tilte">Chemical Research</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
										</div>
									</div>
									<div class="icon-bx-wraper left">
										<div class="icon-md"> 
											<a href="javascript:void(0);" class="icon-cell text-primary">
												<i class="flaticon-worker"></i>
											</a> 
										</div>
										<div class="icon-content">
											<h5 class="dlab-tilte">Petroleum Engineering</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
                                {{-- Showreel --}}
                                <div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
										<a href="portfolio-details.html"> <img src="{{asset('theme/images/portfolio/image_6.jpg')}}" alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon">
												<div class="text-white">
													<a href="https://www.youtube.com/watch?v=_FRZVScwggM" class="popup-youtube video play-btn"><i class="fa fa-play icon-bx-xs"></i></a> 
												</div>
											</div>
										</div>
									</div>
								</div>
                
                                {{-- Showreel --}}
								<div class="col-lg-12 m-b30">
									<img alt="" src="{{asset('theme/images/about/pic3.jpg')}}">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<img alt="" src="{{asset('theme/images/our-services/pic2.jpg')}}">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<img alt="" src="{{asset('theme/images/our-services/pic3.jpg')}}">
								</div>
								<div class="col-lg-12 m-b30">
									<img alt="" src="{{asset('theme/images/about/about2.jpg')}}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Portfolio Details End -->
                @include('front.home.pretty')

            </div>
            <!-- contact area END -->

@endsection