@extends('front.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Latest News</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Latest News</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dlab-blog-grid-3">
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic1.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Jack</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">Seven Doubts You Should</a></h4>
                                    </div>
									<div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic2.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <strong>11 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Zachary</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">The Shocking Revelation</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
									</div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic3.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>12 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Charlotte</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">The Story Of Industry</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic4.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>13 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Lucinda</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">Seven Outrageous Ideas </a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic1.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>14 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Victoria</a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title">
                                        <h4 class="post-title"><a href="#">How Industry Can Increase</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media dlab-img-effect"> 
									<a href="#"><img src="{{asset('theme/images/blog/grid/pic2.jpg')}}" alt=""></a> 
								</div>
                                <div class="dlab-info p-a20 border-1">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <strong>15 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"> By <a href="javascript:void(0);">Winnie </a> </li>
                                        </ul>
                                    </div>
									<div class="dlab-post-title ">
                                        <h4 class="post-title"><a href="#">Here's What People</a></h4>
                                    </div>
                                    <div class="dlab-post-text">
                                       <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                                    </div>
									<div class="dlab-post-readmore"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button">READ MORE
											<i class="ti-arrow-right"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx clearfix col-md-12 text-center">
						<ul class="pagination">
							<li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
							<li class="active"><a href="javascript:void(0);">1</a></li>
							<li><a href="javascript:void(0);">2</a></li>
							<li><a href="javascript:void(0);">3</a></li>
							<li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
						</ul>
					</div>

                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
    @include('front.home.pretty')

@endsection