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
                    <div class="section-full bg-white content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="container">
                            <div class="section-head style2 text-center">
                                <h2 class="title m-b10">Design Projects</h2>
                                <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="site-filters m-b20 filters2">
                                        <ul class="filters" data-toggle="buttons">
                                            <li data-filter="" class="btn active"><input type="radio"><a href="#"><i class="flaticon-worker"></i><span>Construction</span></a></li>
                                            <li data-filter="penthouse" class="btn"><input type="radio"><a href="#"><i class="flaticon-crane"></i><span>Architecture</span></a></li>
                                            <li data-filter="royal" class="btn"><input type="radio"><a href="#"><i class="flaticon-analytics"></i><span>Consulting</span></a></li>
                                            <li data-filter="standard" class="btn"><input type="radio"><a href="#"><i class="flaticon-optimization"></i><span>Mechanical</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-l0 sp10">
                                <div class="col-lg-12">
                                    <ul id="masonry" class="dlab-gallery-listing gallery mfp-gallery text-center">
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 royal">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_2.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Building</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 standard penthouse">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_1.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Industry</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 royal">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_3.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Manufacturing</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 penthouse">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_4.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Building</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 standard">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_5.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Industry</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card-container col-lg-4 col-md-6 col-sm-6 standard penthouse">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                                                <img src="{{asset('theme/images/portfolio/construct/image_6.jpg')}}" alt=""/>
                                                <div class="overlay-bx">
                                                    <div class="portinner">
                                                        <div class="port-up">
                                                            <span class="text-primary">Manufacturing</span>
                                                            <h3 class="port-title"><a href="#">Westlands Sarit Center</a></h3>
                                                        </div>
                                                        <div class="port-down">
                                                            <a href="#" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
                @include('front.home.pretty')

            </div>
            <!-- contact area END -->

@endsection