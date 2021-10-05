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
                                        {{-- <ul class="filters" data-toggle="buttons">
                                            <?php $Labels = DB::table('categories')->distinct()->get(['labels']); $Count = 1; ?>
                                            @foreach ($Labels as $item)
                                            @if($Count == 1)
                                            <li data-filter="" class="btn active"><input type="radio"><a href="#"><i class="flaticon-worker"></i><span>{{$item->labels}}</span></a></li>
                                            @else
                                            <li data-filter="{{$item->labels}}" class="btn"><input type="radio"><a href="#"><i class="flaticon-crane"></i><span>{{$item->labels}}</span></a></li>
                                            @endif
                                            <?php $Count = $Count+1 ?>
                                            @endforeach
                                        </ul> --}}
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
                                                        <h4> SELECTED PAST EXPERIENCE IN GEO-TECHNICAL ENIGNEERING SUPERVISION in SOMALIA</h4>
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
                                                    <div class="dlab-divider divider-4px  bg-black"><i class="icon-dot c-square"></i></div>
                                                    <div class="sort-title clearfix text-center text-black">
                                                        <h4> URBAN PLANNING & ENVIRONMENTAL  PROJECTS UNDERTAKEN</h4>
                                                    </div>
                                                    <table  class="table check-tbl list-star reverse list-box ">
                                                      
                                                
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="246">
                                                                Name
                                                                of project</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: none; border-left: none; border-right: none; padding: 0in"><p class="western" align="center">
                                                                Client</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                Period
                                                                of activity</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="33" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                Environmental
                                                                Safeguards and Institutional Capacity Assessment for the Somalia
                                                                Urban Resilience Project Phase 2 (SURP II) Project in Baidoa
                                                                Municipality and Kismayu Municipality, Somalia,</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                The
                                                                World Bank</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2019-2020</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="33" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                Galmudug State Offices and Ministerial Offices
                                                                in Dhusamareeb</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                <span lang="en-KE">Adam
                                                                Smith International (Somali Stability Fund)</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2019-2020</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="52" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                Conference
                                                                Hall &amp; State Offices Re</span><font color="#000000"><font face="Garamond, serif">ception
                                                                in Garowe, Puntland State Offices</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                <span lang="en-KE">Adam
                                                                Smith International (Somali Stability Fund)</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2019-2020</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="41" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                6 KM tarmacked road with 2 bridges in Beletweyne</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                <span lang="en-KE">Adam
                                                                Smith International (Somali Stability Fund)</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2019-2020</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the rehabilitation
                                                                of airstrip in Diinsoor</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                May
                                                                17-Apr 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                construction
                                                                of 2KM gravel road</span>
                                                                with 2 culvert bridges
                                                                in Diinsoor</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                May
                                                                17-Apr 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                of
                                                                Stadium</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                May
                                                                17-Apr 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the Installation
                                                                of Street lights in 8 Locations of Puntland State</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                Puntland
                                                                State and Somali Stability Fund</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                Jun
                                                                18- Aug 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                Women Center</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                May
                                                                17-Apr 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                of Beerta Banadir Park in Mogadishu</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                Gulgar
                                                                Group Ltd</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                Oct
                                                                17- June 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="59" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP, Geotechnical
                                                                &amp; Topographical Survey for the Baraawe Airport</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                <span lang="en-KE">Adam
                                                                Smith International (Somali Stability Fund)</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                Dec
                                                                17-Jan 18</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="59" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and development of EMMP for the construction of
                                                                Ministry Offices </span><font color="#000000"><font face="Garamond, serif">and
                                                                Youth Center in
                                                                Kismayu</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                <span lang="en-KE">Adam
                                                                Smith International (Somali Stability Fund)</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                <span lang="en-KE">2017-2018</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="54" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Environmental
                                                                Impact Assessment and the development of a Strategic
                                                                Municipal Solid Waste Management Plan for Belet Hawa Town</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                German
                                                                Humanitarian Support/ASEP/ARCHNOVA</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2016</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="54" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                Social
                                                                economic impact assessment forth construction of 6KM road in
                                                                Kismayu</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</span></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                Oct
                                                                2016</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="53" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" style="margin-bottom: 0in">
                                                                Development
                                                                of environmental and urban sector policies and strategies for
                                                                urban development in Mogadishu, Hargeisa and Garowe
                                                                Municipalities in consultation and in coordination with relevant
                                                                government agencies and donor organizations.</p>
                                                                <p class="western">Developed
                                                                Solid Waste Management Plan, Biomedical Waste Management Plans. 
                                                                </p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding: 0in"><p class="western" align="center">
                                                                UNHABITAT</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2015-2016</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    {{--  --}}
                                                    <div class="sort-title clearfix text-center text-black">
                                                        <h4> DISTRICTS/MUNICIPALITIES NEEDS ASSESSMENT PROJECTS UNDERTAKEN</h4>
                                                    </div>
                                                    {{--  --}}
                                                    <table  class="table check-tbl list-star reverse list-box ">
                                                      
                                                
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="3" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                               <b>Name
                                                                of project</b></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: none; border-left: none; border-right: none; padding: 0in"><p class="western" align="center">
                                                               <b>Client</b></p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: 1px solid #000000; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                               <b>Period
                                                                of activity</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="33" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in
                                                                Baardheere District , Gedo Region</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2016</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="33" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in Diinsoor
                                                                District, South West Region</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                                AECOM/ TIS+</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2016</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="52" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                <span lang="en-KE">Assessment
                                                                of institutional/policy frameworks onenvironmental
                                                                management practices for Bosaso District,Puntland.</span></p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                UNHABITAT</p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2016</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="41" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western" align="center">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in Matabaan
                                                                District, South West Region</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                               </p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in
                                                                Garbahareey District, Gedo Region. 
                                                                </p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                               </p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="37" style="background: transparent" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in Hudur
                                                                District, South West Region.</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                               </p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2015</p>
                                                            </td>
                                                        </tr>
                                                        <tr class="wow flipInY fly-box-ho" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                            <td width="476" height="36" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in"><p class="western">
                                                                District
                                                                Stabilization Needs Assessment and the Facilitation of Consensus
                                                                Building workshop to Prioritize USAID funded projects in Bardaale
                                                                District, South West Region.</p>
                                                            </td>
                                                            <td width="260" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding: 0in"><p class="western" align="center">
                                                                USAID/
                                                               </p>
                                                            </td>
                                                            <td width="155" style="background: transparent" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.08in"><p class="western" align="center">
                                                                2015</p>
                                                            </td>
                                                        </tr>
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