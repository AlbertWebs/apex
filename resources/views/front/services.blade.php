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
            <!-- contact area -->
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
                <!-- Services -->
                <div class="section-full">
                    <div class="row spno about-industry">

                        <div class="col-lg-6">
                            <img src="{{asset('theme/images/our-work/oilgas/pic1.jpg')}}" alt="" class="img-cover">
                        </div>
                        <div class="col-lg-6 bg-white">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black"><span>Mechanical</span> <br/>Works</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="{{url('/')}}/services/single" class="site-button outline outline-2">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 bg-gray">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black"><span>Mechanical</span> <br/>Works</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="{{url('/')}}/services/single" class="site-button outline outline-2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('theme/images/our-work/oilgas/pic1.jpg')}}" alt="" class="img-cover">
                        </div>

                        <div class="col-lg-6">
                            <img src="{{asset('theme/images/our-work/oilgas/pic1.jpg')}}" alt="" class="img-cover">
                        </div>
                        <div class="col-lg-6 bg-white">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black"><span>Mechanical</span> <br/>Works</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="{{url('/')}}/services/single" class="site-button outline outline-2">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 bg-gray">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black"><span>Mechanical</span> <br/>Works</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="{{url('/')}}/services/single" class="site-button outline outline-2">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('theme/images/our-work/oilgas/pic1.jpg')}}" alt="" class="img-cover">
                        </div>
                        
                    
                       
                    </div>
                </div>
                <!-- Services END -->
                {{--  --}}
                @include('front.home.pretty')
                {{--  --}}
            </div>
            <!-- contact area END -->

@endsection