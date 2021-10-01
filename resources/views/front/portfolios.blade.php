@extends('front.master')
@section('content')
  <!-- Content -->
  <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white"> Our Projects </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Our Projects </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            
            <div class="content-block">
                <!-- Services Info Head -->
                <div class="section-full content-inner-2 bg-white">
                    <div class="container bg-white">
                        <div class="row bg-white">
                            <div class="col-lg-12 service-main-title text-center bg-white">
                                <h3 class="title max-w700 m-auto text-black">What may appear the impossible, becomes very possible with Apex Engineering Limited.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Info Head END -->
           
                {{--  --}}
                <div class="content-block">
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
                        </div>
                        {{--  --}}
                        <br><br>
                        <center>
                            <a  href="{{url('/')}}/portfolios" class="site-button
                            btnhover20"><i class="fa fa-image"></i> &nbsp; Our Gallery </a>
                        </center>
                        {{--  --}}
                    </div>
                </div>
                {{-- Other Projects --}}
                <div class="bg-white">
                    <!-- Left & right section start -->
                
                    <div class="section-full bg-white content-inner bg-white" >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sort-title clearfix text-center text-black">
                                        <h4> SELECTED PAST EXPERIENCE IN TECHNICAL ENIGNEERING SUPERVISION in SOMALIA</h4>
                                    </div>
                                    <!-- Listing With Numbering & Alfha -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table check-tbl list-star reverse list-box ">
                                                        <tbody>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316"><strong>Project Data</strong></td>
                                                        <td width="116"><strong>Location</strong></td>
                                                        <td width="170"><strong>Organization</strong></td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Geotechnical Survey for the construction of 2.4 KM airport in Baraawe</td>
                                                        <td width="116">Baraawe</td>
                                                        <td width="170">Somali Stability Fund (SSF)</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision of the Construction of 3 Story Ministry Offices</td>
                                                        <td width="116">Kismayu</td>
                                                        <td width="170">Somali Stability Fund (SSF)</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision of the Construction of youth center</td>
                                                        <td width="116">Kismayu</td>
                                                        <td width="170">Somali Stability Fund (SSF)</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision for the Rehabilitation of 1.7KM airstrip</td>
                                                        <td width="116">Diinsoor</td>
                                                        <td width="170">TIS PLUS- AECOM</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision for the Rehabilitation of 2.4 KM Road</td>
                                                        <td width="116">Diinsoor</td>
                                                        <td width="170">TIS PLUS- AECOM</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision for the Construction of Women Center</td>
                                                        <td width="116">Diinsoor</td>
                                                        <td width="170">TIS PLUS- AECOM</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Engineering Supervision for the Construction of Football Stadium</td>
                                                        <td width="116">Diinsoor</td>
                                                        <td width="170">TIS PLUS- AECOM</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Geotechnical Survey and Designs for the proposed airstrip in Garbahareey</td>
                                                        <td width="116">Garbahareey</td>
                                                        <td width="170">Community Project</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">
                                                        <p>Technical Supervision for the Construction of highway road connecting Presidential Palace with various places in Garowe 7 KM</p>
                                                        <p>&nbsp;</p>
                                                        </td>
                                                        <td width="116">Garowe</td>
                                                        <td width="170">Puntland Highway Authority</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Supervision for the Design and Site supervision of the construction of 3 No. Floor Municipal offices</td>
                                                        <td width="116">Borama, Somaliland.</td>
                                                        <td width="170">UNDP</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Technical Supervision for the Design and site supervision of the 3 No floors Building</td>
                                                        <td width="116">Mogadishu, Somalia.</td>
                                                        <td width="170">Ibrahim Guled</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Feasibility Studies &amp; Design of construction for 15 classrooms and 4 offices.</td>
                                                        <td width="116">Garowe- Somalia</td>
                                                        <td width="170">UNICEF SOMALIA</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Structural design and drawings for proposed double volume Go-downs (14No)</td>
                                                        <td width="116">Dollow,</td>
                                                        <td width="170">
                                                        <p>WFP located&nbsp;</p>
                                                        <p>&nbsp;</p>
                                                        </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Conduct civil and roads designing and ensuring the works comply with relevant standards and guidelines</td>
                                                        <td width="116">Puntland Somalia</td>
                                                        <td width="170">Puntland Highway Authority</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316">Several Private and commercial Houses with Daryeel Construction Company</td>
                                                        <td width="116">Hargeisa, Somaliland</td>
                                                        <td width="170">Daryeel Construction Company</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316"><span>Technical Feasibility Studies and Designs development for the proposed construction of Hirshabelle Parliament, Ministry of Finance Offices and State Offices</span></td>
                                                        <td width="116"><span>Jowhar, Somalia</span></td>
                                                        <td width="170"><span>Somali Stability Fund</span></td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="316"><span>Project Level Environmental and Institutional Capacity Assessment for the Somali Urban Resilience Project</span><span></span></td>
                                                        <td width="116">Baidoa &amp; Kisamyu<span></span></td>
                                                        <td width="170"><span>The World Bank</span><span></span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    {{--  --}}
                                                    <div class="dlab-divider divider-4px  bg-black"><i class="icon-dot c-square"></i></div>
                                                    <div class="sort-title clearfix text-center text-black">
                                                        <h4> SELECTED PAST EXPERIENCE IN TECHNICAL ENIGNEERING SUPERVISION in SOMALIA</h4>
                                                    </div>
                                                    <table  class="table check-tbl list-star reverse list-box ">
                                                        <tbody>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37"><strong>No</strong></td>
                                                        <td width="246"><strong>Description of Service</strong></td>
                                                        <td width="151"><strong>Location</strong></td>
                                                        <td width="189"><strong>Start &amp; End Date</strong></td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">1</td>
                                                        <td width="246">Geotechnical Survey and Designs for the proposed airstrip in Garbahareey</td>
                                                        <td width="151">Garbahareey Somalia</td>
                                                        <td width="189">Nov 2016-Dec 2016</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">2</td>
                                                        <td width="246">Geotechnical Survey Construction of highway road connecting Presidential Palace with various places in Garowe 7 KM<p></p>
                                                        <p>&nbsp;</p></td>
                                                        <td width="151">Garowe, Somalia</td>
                                                        <td width="189">Feb 2016-May 2016</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">3</td>
                                                        <td width="246">Technical engineering supervision for the construction of 3 storeys building offices to house several ministry offices for Jubbaland Administration</td>
                                                        <td width="151">Kismayu, Somalia</td>
                                                        <td width="189">May 2017- May 2018</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">4</td>
                                                        <td width="246">Technical engineering supervision for the construction of youth complex and resource center</td>
                                                        <td width="151">Kismayu, Somalia</td>
                                                        <td width="189">May 2017- Dec 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">5</td>
                                                        <td width="246">Technical Engineering Supervision for the Rehabilitation of 1.7KM airstrip</td>
                                                        <td width="151">Diinsoor Somalia</td>
                                                        <td width="189">May 2017-Dec 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">6</td>
                                                        <td width="246">Technical Engineering Supervision for the Rehabilitation of 2.4 KM Road</td>
                                                        <td width="151">Diinsoor Somalia</td>
                                                        <td width="189">May 2017-Dec 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">7</td>
                                                        <td width="246">Technical Supervision for the construction of football stadium</td>
                                                        <td width="151">Diinsoor Somalia</td>
                                                        <td width="189">May 2017-Dec 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">8</td>
                                                        <td width="246">Technical Supervision for the construction of Women Center</td>
                                                        <td width="151">Diinsoor Somalia</td>
                                                        <td width="189">May 2017-Dec 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">9</td>
                                                        <td width="246">Geotechnical Survey for the construction of airport in Baraawe</td>
                                                        <td width="151">Baraawe, Somalia</td>
                                                        <td width="189">Aug-Sept 2017</td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                        <td width="37">10</td>
                                                        <td width="246">Design and Site supervision of the construction of 3 No. Floor Municipal offices in</td>
                                                        <td width="151">Borama,<p></p>
                                                        <p>Somaliland</p></td>
                                                        <td width="189">Jan 2016-May 2017</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    {{--  --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Listing With Numbering & Alfha END -->
                    </div>
                   
                    <!-- Left & right section  END -->
                </div>
                {{--  --}}
                @include('front.home.pretty')

            </div>
            <!-- contact area END -->

@endsection