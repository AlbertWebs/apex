@extends('front.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Terms and Conditions</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Terms and Conditions</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-block">
            <!-- Privacy Policy -->
			<div class="section-full content-inner inner-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							@foreach ($Copyright as $Copy)
							<h4 class="title">{{$Copy->title}}</h4>
							<p class="font-18"> {!! html_entity_decode($Copy->content, ENT_QUOTES, 'UTF-8') !!}</p>
							@endforeach
							
							<div class="dlab-divider bg-gray-dark"></div>
							
						</div>
					</div>
				</div>
			</div>
            <!-- Privacy Policy END -->
		</div>
    </div>
    <!-- Content END-->
    @include('front.home.pretty')

@endsection