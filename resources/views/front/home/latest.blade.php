<?php $Portfolio = DB::table('cases')->where('show','1')->limit(1)->get(); ?>
@foreach ($Portfolio as $item)
<div class="section-full bg-white content-inner-2 project-slider" style="background-image:url({{asset('theme/images/background/bg11.jpg')}}); background-repeat:no-repeat; background-position:right bottom;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 p-lr0">
                <div class="project-carousel-2 owl-carousel owl-btn-center-lr owl-btn-1 black  wow fadeInLeft" data-wow-delay="0.2s"  data-wow-duration="2s">
                    <div class="item">
                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                            <img src="{{url('/')}}/uploads/casestudies/{{$item->image_one}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                            <img src="{{url('/')}}/uploads/casestudies/{{$item->image_two}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                            <img src="{{url('/')}}/uploads/casestudies/{{$item->image_three}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom">
                            <img src="{{url('/')}}/uploads/casestudies/{{$item->image_four}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="about-content wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                    <div class="section-head style2">
                        <h2 class="title">{{$item->title}}</h2>
                        <p>{!! html_entity_decode($item->scope, ENT_QUOTES, 'UTF-8') !!}</p>
                    </div>
                    <div class="m-b30">
                        <ul class="list-details">
                            <li>
                                <strong>Clients:</strong>
                                <span> &nbsp; {{$item->client}}</span>
                            </li>
                            <li>
                                <strong>Status:</strong>
                                <span>{{$item->Status}}</span>
                            </li>
                            <li>
                                <strong>Completion:</strong>
                                <span>February 5th, 2020</span>
                            </li>
                            <li>
                                <strong>Location:</strong>
                                <span>&nbsp; {{$item->location}}</span>
                            </li>
                            <li>
                                <strong>Project Type:</strong>
                                <span>{{$item->Consultant}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <a href="{{url('/')}}/portfolios/{{$item->slung}}" class="site-button btnhover20"> <span class="fa fa-suitcase"></span>  &nbsp; Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
