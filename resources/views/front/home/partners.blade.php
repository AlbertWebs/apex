<div class="section-full content-inner-2 bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url({{asset('theme/images/background/bg-video.png')}}); background-repeat:no-repeat; background-position:right bottom;">
    <div class="container">		
        <div class="section-head text-black text-center">
            <h2 class="title text-capitalize">We work with our partners to provide project to perfection,<br/><span class="text-primary">Our Partners</span></h2>
        </div>
        <div class="row">
            <?php $Clients = DB::table('clients')->where('type','partner')->get(); ?>
            @foreach ($Clients as $item)
            <div class="col-xs-6 col-lg-2 col-md-6 col-sm-6  p-b20">
                <div class="ow-client-logo">
                    <div class="client-logo border">
                        <a href="javascript:void(0);"><img src="{{url('/')}}/uploads/clients/{{$item->image}}" alt="Apex Engineering Limited"></a>
                    </div>
                </div>
            </div>
            @endforeach
           
            
        </div>
    </div>
</div>