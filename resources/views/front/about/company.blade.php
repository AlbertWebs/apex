<div class="content-block">
    <div class="section-full content-inner bg-white">
        <div class="container">
            <div class="row align-items-center" style="text-align: center !important; padding-bottom:100px;">
                <div class="col-lg-11 col-md-12 m-b30 wow fadeIn" data-wow-duration="3s" data-wow-delay="0.3s" style="margin: 0 auto !important">
                    <div class="our-story">
                        <span> The Company</span>
                        <h2 class="title">Apex Engineering Limited<br/><span class="text-primary">since 2013</span></h2>
                        {{-- <h4 class="title">Welcome To Apex Engineering</h4> --}}
                        {{--  --}}
                        @foreach ($Content as $item)
                        {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
                        @endforeach
                        {{--  --}}
                        <br><br>
                        <a href="#" class="site-button black btnhover20 theProfile"><i class="ti-download"></i> Company Profile</a>
                                    
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>