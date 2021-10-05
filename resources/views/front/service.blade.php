@extends('front.master')
@section('content')
@foreach($Categories as $Service)
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white"> {!! html_entity_decode($Service->title, ENT_QUOTES, 'UTF-8') !!} </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/services">Services</a></li>
                                <li>{!! html_entity_decode($Service->title, ENT_QUOTES, 'UTF-8') !!}</li>
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
                                <h3 class="title max-w700 m-auto text-black">{!! html_entity_decode($Service->meta, ENT_QUOTES, 'UTF-8') !!}.</h3>
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
                                            <?php $Services  = DB::table('categories')->get(); ?>
                                            <li><a href="{{url('/')}}/services">all services</a> </li>
                                            @foreach($Services as $Ser)
                                            @if($Ser->id == $Service->id)
                                            <li class="active"><a href="javascript:void(0);">{!! html_entity_decode($Ser->title, ENT_QUOTES, 'UTF-8') !!}</a>  </li>
                                            @else
                                            <li><a href="{{url('/')}}/services/{{$Ser->slung}}">{!! html_entity_decode($Ser->title, ENT_QUOTES, 'UTF-8') !!}</a>  </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <div class="download-file">
                                            <h4 class="title">Company Profile</h4>
                                            <ul>
                                              
                                                <li>
                                                    <a href="{{url('/')}}/uploads/APEXcompanyprofile.pdf" target="_blank">
                                                        <div class="text">Company Profile</div>
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </li>

                                                @if($Service->profile == null)

                                                @else 
                                                <li>
                                                   <a download href="{{url('/')}}/uploads/categories/{{$Service->profile}}" class="site-button radius-no btnhover11"><i class="ti-download"></i> Download Profile</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                               
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-7 m-b30">
                                    <div class="row">
                                  
                                        <div class="col-lg-12 col-md-12">
                                            <div class="dlab-box">
                                                <div class="dlab-media m-b30 p-b5"> <a href="javascript:void(0);"><img src="{{url('/')}}/uploads/categories/{{$Service->image}}" alt=""></a></div>
                                                {{-- <div class="dlab-media"> <a href="javascript:void(0);"><img src="{{asset('theme/images/our-services/pic3.jpg')}}" alt=""></a></div> --}}
                                                <div class="dlab-info m-t30 text-black">
                                                    <h4 class="dlab-title m-t0"><a href="javascript:void(0);">{!! html_entity_decode($Service->title, ENT_QUOTES, 'UTF-8') !!}</a></h4>
                                                    <p>
                                                       {!! html_entity_decode($Service->content, ENT_QUOTES, 'UTF-8') !!}
                                                    </p>
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
@endforeach
@endsection