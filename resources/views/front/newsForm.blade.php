 {{-- NewsLetter --}}
 <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
	<div class="row justify-content-center">
		<div class="col-10">
			<div class="row no-gutters bg-white newsletter-popup-content">
				<div class="col-xl-3-5col col-lg-7 banner-content-wrap">
					<div class="banner-content text-center">
						<img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" class="logo" alt="logo" width="200">
						
						<p>Your Download is Almost ready!</p>
						<form action="#" id="newsletter-popup">
							{{csrf_field()}}
							<div class="input-group input-group-round">
								<input type="email" name="user_email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Address" required>
								<div class="input-group-append">
									<button class="btn" type="submit"><span>go</span> <img class="loading-imagers" width="22" src="{{url('/')}}/uploads/preloaders/loading.gif" alt="Apex Loading Loading"></button>
								</div><!-- .End .input-group-append -->
								
							</div><!-- .End .input-group -->
							<span id="newsletter-span"></span><br>
							<div class="row">
								{{-- Capture --}}
								<div class="col-lg-12 col-md-12" id="TheCapcha">
									<div class="g-recaptcha" data-sitekey="6LcWh6McAAAAAI_oVHiM3bSfV06hbomYT47J2XUA" data-callback="correctCaptcha"></div>
									<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
								</div>
								{{-- Capture --}}
							</div>
						</form>
						<br>
						<div class="container" id="profiles">
							<div class="row">
								<div class="col-lg-6">
								
										<a download href="{{url('/')}}/uploads/APEXcompanyprofile.pdf" class="site-button btnhover11"><i class="ti-download"></i> &nbsp; <small>Company Profile</small></a>
									
								</div>
								<div class="col-lg-6">
									
										<a download href="{{url('/')}}/uploads/categories/Apex-Eng-Urban%20-Planning-Profile.pdf" class="site-button site-button btnhover20"><i class="ti-download"></i> &nbsp; <small>Urban Planning Profile</small></a>						
									
								</div>
							</div>
						</div>
						<br>
						
					</div>
				</div>
				<div class="col-xl-2-5col col-lg-5 ">
					<img src="{{url('/')}}/uploads/categories/surveying-equipment-2871066_1920.jpg" class="newsletter-img" alt="newsletter">
				</div>
			</div>
		</div>
	</div>
</div>
 {{-- NewsLetter --}}