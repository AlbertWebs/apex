 <!-- contact area -->
 <?php  $Content = DB::table('abouts')->get(); ?>
 @foreach ($Content as $item)
     

 <div class="content-block">
    <!-- Content Section -->
    <div class="section-full">
        <div class="row spno about-industry">
            
            <div class="col-lg-3 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="service-box style2">
                    <div>
                        <h2 class="title">Vision</h2>
                        <p> {!! html_entity_decode($item->vision, ENT_QUOTES, 'UTF-8') !!}</p>
                        {{-- <a href="services-2.html" class="site-button outline white outline-2 btnhover11">ABOUT US</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-secondr  text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
                <div class="service-box style2">
                    <div>
                        <h2 class="title">Core Values.</h2>
                        <div class="et_pb_toggle_content clearfix" style="display: block;">
                            We are committed to the sustainability of the communities, our clients businesses and the environments in which we live and work:<p></p>
                            {!! html_entity_decode($item->values, ENT_QUOTES, 'UTF-8') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="service-box style2">
                    <div style="padding-bottom:80px;">
                        <h2 class="title">Mission.</h2>
                        <p> {!! html_entity_decode($item->mission, ENT_QUOTES, 'UTF-8') !!}</p>
                        <a href="services-2.html" class="site-button outline white outline-2 btnhover11">ABOUT US</a>
                    </div>
                </div>
            </div>
       
            
            {{-- <div class="col-lg-4 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="service-box style2">
                    <div>
                        <h2 class="title text-black"><span>Automative  </span> <br/>Manufacturing.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="services-2.html" class="site-button outline outline-2 btnhover11">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="dlab-post-media dlab-img-effect zoom"> 
                    <img src="{{asset('theme/images/our-work/oilgas/pic5.jpg')}}" alt="" class="img-cover">
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Content Section End -->
</div>
<!-- contact area END -->
@endforeach