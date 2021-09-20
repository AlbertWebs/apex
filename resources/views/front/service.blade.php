@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white"> Services </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Services </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            
            <div class="content-block">
                <!-- Services Info Head -->
                <div class="section-full content-inner-2 bg-gray">
                    <div class="container bg-gray">
                        <div class="row bg-gray">
                            <div class="col-lg-12 service-main-title text-center bg-gray">
                                <h3 class="title max-w700 m-auto text-black">What may appear the impossible, becomes very possible with Apex Engineering Limited.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Info Head END -->
           
                {{--  --}}
                <div class="content-block">
                    <!-- About Us -->
                    <div class="section-full content-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-5">
                                    <div class="widget sidebar-widget ext-sidebar-menu widget_nav_menu">
                                        <ul class="menu">
                                            <li><a href="javascript:void(0);">all services</a> </li>
                                            <li class="active"><a href="javascript:void(0);">engine diagnostics</a>  </li>
                                            <li><a href="javascript:void(0);">lube oil and filters</a>  </li>
                                            <li><a href="javascript:void(0);">belts and hoses</a>  </li>
                                            <li><a href="javascript:void(0);">air conditioning</a> </li>
                                            <li><a href="javascript:void(0);">brake repair</a> </li>
                                            <li><a href="javascript:void(0);">tire and wheel services</a> </li>
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <div class="download-file">
                                            <h4 class="title">Get your brochures</h4>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);" target="_blank">
                                                        <div class="text">Company Brochures</div>
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" target="_blank">
                                                        <div class="text">Company Info</div>
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-7 m-b30">
                                    <div class="row">
                                  
                                        <div class="col-lg-12 col-md-12">
                                            <div class="dlab-box">
                                                <div class="dlab-media m-b30 p-b5"> <a href="javascript:void(0);"><img src="{{asset('theme/images/our-services/pic2.jpg')}}" alt=""></a></div>
                                                {{-- <div class="dlab-media"> <a href="javascript:void(0);"><img src="{{asset('theme/images/our-services/pic3.jpg')}}" alt=""></a></div> --}}
                                                <div class="dlab-info m-t30 text-black">
                                                    <h4 class="dlab-title m-t0"><a href="javascript:void(0);">From Start To finish</a></h4>
                                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
                                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Our Services -->
                </div>
                {{--  --}}
                @include('front.home.pretty')

            </div>
            <!-- contact area END -->

@endsection