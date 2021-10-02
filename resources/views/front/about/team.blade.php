<!-- Team Section -->
<div class="section-full text-center bg-gray content-inner">
    <div class="container">	
        <div class="section-head text-black text-center">
            <h2 class="title">Meet The Team</h2>
            <p>Our exceptional team skills and dynamic personalities have enabled us to thrive for nearly 6 years. Our team includes licensed Professional Engineers, Professional Land Surveyors, technicians, field crews, and support staff.</p>
        </div>
        <div class="row">
            <?php $User = DB::table('users')->where('is_admin','0')->get(); ?>
            @foreach ($User as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="dlab-box m-b30 dlab-team1">
                    <div class="dlab-media">
                        <a href="javascript:;">
                            <img width="358" height="460" alt="" src="{{url('/')}}/uploads/users/{{$item->image}}">
                        </a>
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title"><a href="javascript:;">{{$item->name}}</a></h4>
                        <span class="dlab-position">{{$item->position}}</span>
                        <ul class="dlab-social-icon dez-border">
                            <li><a class="fa fa-facebook" href="{{$item->facebook}}"></a></li>
                            <li><a class="fa fa-instagram" href="{{$item->instagram}}"></a></li>
                            <li><a class="fa fa-linkedin" href="{{$item->linkedin}}"></a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section END -->