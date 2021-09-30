@extends('front.master')
@section('content')
@foreach ($Portfolio as $item)
	  <!-- Content -->
	  <div class="page-content bg-white">
		<!-- inner page banner -->
		<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('/')}}/uploads/casestudies/{{$item->image_one}});">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1 class="text-white"> {{$item->title}}  </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							{{-- <li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/')}}/portfolios">Home</a></li>
							<li>{{$item->title}} </li> --}}
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
						{{-- Content --}}
						{!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
						{{-- Content --}}
						<div class="row widget widget_getintuch widget_getintuch-pro-details m-lr0">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-lr0">
								<div class="pro-details">
									<i class="ti ti-info"></i>
									<strong>Project</strong>{{$item->title}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-user"></i>
									<strong>CLIENT</strong> {{$item->client}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-location-pin"></i>
									<strong>LOCATION</strong>{{$item->location}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa fa-calendar"></i>
									<strong>Date</strong>1st May 2020 -June 2021
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-home"></i>
									<strong>TYPE</strong>{{$item->Consultant}}
								</div>
							</div>
						</div>
						<h2 class="text-black font-weight-600 m-b15">Scope Of Work</h2>
						<p>{!! html_entity_decode($item->scope, ENT_QUOTES, 'UTF-8') !!}</p>
					</div>
					<div class="col-lg-6">
						<div class="row">
                            @if($item->video == null or $item->video == "0")

							@else
								{{-- Showreel --}}
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
										<a href="portfolio-details.html"> <img src="{{asset('theme/images/portfolio/image_6.jpg')}}" alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon">
												<div class="text-white">
													<a href="{{$item->video}}" class="popup-youtube video play-btn"><i class="fa fa-play icon-bx-xs"></i></a> 
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- Showreel --}}
							@endif

							@if($item->image_one == null or $item->image_one == 0)

							@else 
							<div class="col-lg-12 m-b30">
								<img alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_one}}">
							</div>
							@endif
							
							@if($item->image_two == null or $item->image_two == 0)

							@else 
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_two}}">
							</div>
							@endif
							@if($item->image_three == null or $item->image_three == 0)

							@else 
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_three}}">
							</div>
							@endif


							@if($item->image_four == null or $item->image_four == 0)

							@else 
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_four}}">
							</div>
							@endif

							@if($item->image_five == null or $item->image_five == 0)

							@else 
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_five}}">
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Portfolio Details End -->
			@include('front.home.pretty')

</div>
<!-- contact area END -->
@endforeach


@endsection