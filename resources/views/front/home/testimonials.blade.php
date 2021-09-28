<div class="section-full content-inner-2 bg-white wow fadeIn" style="background-image:url({{asset('theme/images/background/map-bg1.png')}})" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="container">
        <div class="section-head style2 text-center">
            <h2 class="title">Clients Say About Us</h2>
            <p>9+ years’ experience</p>
        </div>
        <div class="testimonial-num-count owl-num-count owl-carousel owl-btn-center-lr owl-btn-3 owl-theme">
            <?php $Testimonials = DB::table('testimonials')->get(); ?>
            @foreach($Testimonials as $Testimoni)
            <div class="item">
                <div class="testimonial-12 text-white">
                    <div class="testimonial-pic">
                        <img src="{{url('/')}}/uploads/testimonials/{{$Testimoni->image}}" alt="">
                    </div>
                    <div class="testimonial-detail">
                        <h4 class="testimonial-name m-t0 m-b5">{{$Testimoni->name}}</h4> 
                        <span class="testimonial-position">{{$Testimoni->position}}</span> 
                        <div class="testimonial-text">
                            <p>{!! html_entity_decode($Testimoni->content, ENT_QUOTES, 'UTF-8') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>