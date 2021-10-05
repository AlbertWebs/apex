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
                        <?php
                            $order = 1; 
                        ?>
                        @foreach ($Content as $content)
                        @if ($order % 2 == 0)
                        <div class="col-lg-6">
                            <img src="{{url('/')}}/uploads/categories/{{$content->image}}" alt="" class="img-cover">
                        </div>
                        <div class="col-lg-6 bg-white">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black">{!! html_entity_decode($content->title, ENT_QUOTES, 'UTF-8') !!}</h2>
                                    <p> {!! html_entity_decode($content->meta, ENT_QUOTES, 'UTF-8') !!}</p>
                                    <a href="{{url('/')}}/services/{{$content->slung}}" class="site-button outline outline-2">Read More</a>
                                    @if($content->profile == null)

                                    @else 
                                    <a download href="{{url('/')}}/uploads/categories/{{$content->profile}}" class="site-button radius-no btnhover11">Download Profile</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-6 bg-gray">
                            <div class="service-box style2">
                                <div>
                                    <h2 class="title text-black">	 {!! html_entity_decode($content->title, ENT_QUOTES, 'UTF-8') !!}</h2>
                                    <p> {!! html_entity_decode($content->meta, ENT_QUOTES, 'UTF-8') !!}</p>
                                    <a href="{{url('/')}}/services/{{$content->slung}}" class="site-button outline outline-2">Read More</a>
                                    @if($content->profile == null)

                                    @else 
                                    <a download href="{{url('/')}}/uploads/categories/{{$content->profile}}" class="site-button radius-no btnhover11"><i class="ti-download"></i> Download Profile</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{url('/')}}/uploads/categories/{{$content->image}}" alt="" class="img-cover">
                        </div>
                        @endif
                        <?php $order =  $order+1; ?>
                        @endforeach
                       


                      

                       
                    
                       
                    </div>
                </div>
                <!-- Services END -->
                {{--  --}}
                @include('front.home.pretty')
                {{--  --}}
            </div>
            <!-- contact area END -->

@endsection