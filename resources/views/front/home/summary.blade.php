<div class="section-full bg-gray content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="container">
        <div class="section-head style2 text-center">
            <h2 class="title m-b10">Our Projects</h2>
            <p>At Apex Engineering LTD we commit the same attention and expertise to every project in our office. We have engineered a diverse range of projects including large master planned and mixed use communities, single and multi-family residential developments, commercial and retail shopping centers, office parks, industrial areas, schools, institutional centers, and government offices.

            </p>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="site-filters m-b20 filters2">
                    <ul class="filters" data-toggle="buttons">
                        <?php $Labels = DB::table('categories')->distinct()->get(['labels']); $Count = 1; ?>
                        @foreach ($Labels as $item)
                        @if($Count == 1)
                        <li data-filter="" class="btn active"><input type="radio"><a href="#"><i class="flaticon-worker"></i><span>{{$item->labels}}</span></a></li>
                        @else
                        <li data-filter="{{$item->labels}}" class="btn"><input type="radio"><a href="#"><i class="flaticon-crane"></i><span>{{$item->labels}}</span></a></li>
                        @endif
                        <?php $Count = $Count+1 ?>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row p-l0 sp10">
            <div class="col-lg-12">
                <ul id="masonry" class="dlab-gallery-listing gallery mfp-gallery text-center">
                    <?php $Cases = DB::table('cases')->limit(6)->get() ?>
                    @foreach ($Cases as $cases)
                    <li class="card-container col-lg-4 col-md-6 col-sm-6 {{$cases->service}}">
                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox3">
                            <img style="min-height:253px !important;" src="{{url('/')}}/uploads/casestudies/{{$cases->image_one}}" alt=""/>
                            <div class="overlay-bx">
                                <div class="portinner">
                                    <div class="port-up">
                                        <span class="text-primary">{{$cases->Consultant}}</span>
                                        <h6 class="port-title"><a href="{{url('/')}}/portfolios/{{$cases->slung}}">{{$cases->title}}</a></h6>
                                    </div>
                                    <div class="port-down">
                                        <a href="{{url('/')}}/portfolios/{{$cases->slung}}" class="btn-link">View Detail <i class="la la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{--  --}}
        <br><br>
        <center>
            <a  href="{{url('/')}}/portfolios" class="site-button
            btnhover20"><i class="fa fa-suitcase"></i> &nbsp; All Projects</a>
        </center>
        {{--  --}}
    </div>
</div>