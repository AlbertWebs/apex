	<!-- About Company -->
    <div class="section-full bg-gray content-inner about-carousel-ser">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Our Services <br/><span class="text-primary">Apex Engineering Limited</span></h2>
                <p>Founded in 2013 in Mogadishu Somalia, Apex Engineering has an established and respected reputation based on technical expertise, strong communication and personal and professional service.</p>
            </div>
            <?php  $Categories = DB::table('categories')->get(); ?>
            <div class="about-ser-carousel owl-carousel owl-theme owl-btn-center-lr owl-dots-primary-full owl-btn-3 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                @foreach ($Categories as $Service)
                <div class="item">
                    <div class="dlab-box service-media-bx">
                        <div class="dlab-media"> 
                            <a style="min-height:213px !important;" href="{{url('/')}}/services/{{$Service->slung}}"><img style="min-height:213px !important;" src="{{url('/')}}/uploads/categories/{{$Service->image}}" class="lazy" data-src="{{url('/')}}/uploads/categories/{{$Service->image}}" alt="{!! html_entity_decode($Service->title, ENT_QUOTES, 'UTF-8') !!}"></a> 
                        </div>
                        <div class="dlab-info text-center">
                            <h2 class="dlab-title"><a href="{{url('/')}}/services/{{$Service->slung}}">{!! html_entity_decode($Service->title, ENT_QUOTES, 'UTF-8') !!}</a></h2>
                            {{-- <p>{!! html_entity_decode($Service->meta, ENT_QUOTES, 'UTF-8') !!}</p> --}}
                            <a href="{{url('/')}}/services/{{$Service->slung}}" class="site-button btnhover13">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>	
    </div>
    <!-- About Company END -->