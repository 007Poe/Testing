@extends('layouts.master')

@section('content')

<!-- Page Main -->
<div role="main" class="main">

	<!-- Home Slider -->
	<div class="rs-container light rev_slider_wrapper">
		<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 500}'>
			<ul>
				<li data-transition="fade" class="typo-dark heavy">
					<img src="/images/banner/pic1.jpg"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">

					<div class="tp-caption sm-text"
					data-x="right" data-hoffset="30"
					data-y="135"
					data-start="600"
					data-transform_in="y:[-300%];opacity:0;s:500;">သင့္လုပ္ငန္းရဲ႕အနာဂတ္အျမင့္ဆုံးကိုပ်ံသန္းနိုင္ဖို႔ကြၽန္ုပ္တို႔ႏွင့္အတူလက္တြဲလိုက္ပါ"</div>

					<div class="tp-caption big-text"
					data-x="right" data-hoffset="30"
					data-y="center" data-voffset="-30"
					data-start="1500"
					data-whitespace="nowrap"                         
					data-transform_in="y:[100%];s:500;"
					data-transform_out="opacity:0;s:500;"
					data-mask_in="x:0px;y:0px;">Pico Innovation</div>

					<div class="tp-caption sm-text"
					data-x="right" data-hoffset="30"
					data-y="285"
					data-start="2000"
					data-transform_in="y:[100%];opacity:0;s:500;"><a href="/product" class="btn">View Our Products</a></div>
				</li>

				<li data-transition="fade" class="typo-dark heavy">

					<img src="/images/banner/pic2.jpg"  
					alt=""
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="rev-slidebg">

					<div class="tp-caption big-text"
					data-x="right" data-hoffset="30"
					data-y="top" data-voffset="20"
					data-start="500"
					data-whitespace="nowrap"                         
					data-transform_in="y:[100%];s:500;"
					data-transform_out="opacity:0;s:500;"
					data-mask_in="x:0px;y:0px;">Technical
				</div>

				<div class="tp-caption big-text"
				data-x="right" data-hoffset="30"
				data-y="top" data-voffset="100"
				data-start="1000"
				data-whitespace="nowrap"                         
				data-transform_in="y:[100%];s:500;"
				data-transform_out="opacity:0;s:500;"
				data-mask_in="x:0px;y:0px;">For Everyone
			</div>

			<div class="tp-caption big-text"
			data-x="right" data-hoffset="30"
			data-y="top" data-voffset="180"
			data-start="2000"
			data-whitespace="nowrap"                         
			data-transform_in="y:[100%];s:500;"
			data-transform_out="opacity:0;s:500;"
			data-mask_in="x:0px;y:0px;"><a href="#our-services" class="btn">View Our Services</a>
		</div>

	</li>

	<li data-transition="fade" class="typo-dark heavy">
		<img src="/images/banner/pic3.jpg"  
		alt=""
		data-bgposition="center center" 
		data-bgfit="cover" 
		data-bgrepeat="no-repeat" 
		class="rev-slidebg">

		<div class="tp-caption sm-text"
		data-x="left" data-hoffset="30"
		data-y="150"
		data-start="500"
		data-transform_in="y:[-300%];opacity:0;s:500;">The sky's the limit </div>

		<div class="tp-caption big-text"
		data-x="left" data-hoffset="30"
		data-y="center" data-voffset="-5"
		data-start="1500"
		data-whitespace="nowrap"                         
		data-transform_in="y:[100%];s:500;"
		data-transform_out="opacity:0;s:500;"
		data-mask_in="x:0px;y:0px;">Along with the supports of PICO</div>

		<div class="tp-caption sm-text"
		data-x="left" data-hoffset="30"
		data-y="310"
		data-start="2000"
		data-transform_in="y:[100%];opacity:0;s:500;">For your business, For your success...</div>
	</li>
</ul>
</div>
</div><!-- Home Slider -->


<!-- Section -->
<section class="pad-bottom-50 slider-below-section">
	<div class="container">
		<div class="slider-below-wrap bg-color typo-light">
			<div class="row">
				<!-- Column -->
				<div class="col-sm-4">
					<!-- Content Box -->
					<div class="content-box text-center">
						<!-- Icon Wraper -->
						<div class="icon-wrap">
							<i class="uni-letter-open"></i>
						</div><!-- Icon Wraper -->
						<!-- Content Wraper -->
						<div class="content-wrap">
							<h5 class="heading">Trusted Certification</h5>
							<p>Creating web application with Globally Trusted Certificates by PICO</p>
						</div><!-- Content Wraper -->
					</div><!-- Content Box -->
				</div><!-- Column -->

				<!-- Column -->
				<div class="col-sm-4">
					<!-- Content Box -->
					<div class="content-box text-center">
						<!-- Icon Wraper -->
						<div class="icon-wrap">
							<i class="uni-business-man"></i>
						</div><!-- Icon Wraper -->
						<!-- Content Wraper -->
						<div class="content-wrap">
							<h5 class="heading">Our CEO</h5>
							<p>Mr.Sann Ko Ko is our CEO. He Founded Pico Innovation(Network & Software) company in 2013.</p>
						</div><!-- Content Wraper -->
					</div><!-- Content Box -->
				</div><!-- Column -->

				<!-- Column -->
				<div class="col-sm-4">
					<!-- Content Box -->
					<div class="content-box text-center">
						<!-- Icon Wraper -->
						<div class="icon-wrap">
							<i class="uni-bow-2"></i>
						</div><!-- Icon Wraper -->
						<!-- Content Wraper -->
						<div class="content-wrap">
							<h5 class="heading">Top System</h5>
							<p>Best IT Management Software for your business</p>
						</div><!-- Content Wraper -->
					</div><!-- Content Box -->
				</div><!-- Column -->
			</div><!-- Slider Below Wrapper --> 
		</div><!-- Row -->
	</div><!-- Container -->
</section><!-- Section -->

<!-- Section -->
<section class="pad-top-none typo-dark" id="our-services">
	<div class="container">
		<!-- Row -->
		<div class="row">
			<!-- Title -->
			<div class="col-sm-12">
				<div class="title-container sm">
					<div class="title-wrap">
						<h3 class="title">Our Services</h3>
						<span class="separator line-separator"></span>
					</div>
				</div>
			</div>
			<!-- Title -->

			@foreach($service_types as $service)
			<!-- Column -->
                <div class="col-sm-4" style="margin-bottom: 5px;">
                	<!-- Course Wrapper -->
                	<div class="course-wrapper">
                		<!-- Course Banner Image -->
                		<div class="course-banner-wrap">
                			<img width="600" height="220" src="/img/servicetypes_gallery_images/{{$service->image}}" class="img-responsive" alt="Course">
                			<span class="cat bg-yellow">{{ $service->type }}</span>
                		</div><!-- Course Banner Image -->
                		<!-- Course Detail -->
                		<div class="course-detail-wrap">
                			<!-- Course Teacher Detail -->
                			<div class="teacher-wrap">
                            </div><!-- Course Teacher Detail -->
                            <!-- Course Content -->
                            <div class="course-content">
                            	<h5><a href="/services/{{$service->id}}/all">{{ $service->type }}</a></h5>
                            	<p>{{ str_limit(rtrim($service->description), 80) }}</p>
                            	<!-- <a class="btn" href="#">Apply Now</a> -->
                            </div><!-- Course Content -->
                        </div><!-- Course Detail -->
                    </div><!-- Course Wrapper -->
                </div><!-- Column -->
			@endforeach
		</div><!-- Row -->
	</div><!-- Container -->
</section><!-- Section -->

	<!-- Section -->
	<section class="bg-grey typo-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 margin-top-767-30">
					<!-- Title -->
					<div class="title-container sm text-center">
						<div class="title-wrap">
							<h3 class="title">Our Members</h3>
							<span class="separator line-separator"></span>
						</div>
					</div>
					<!-- Related Post -->
						<div class="owl-carousel" 
						data-animatein="" 
						data-animateout="" 
						data-margin="30" 
						data-stagepadding="" 
						data-loop="true" 
						data-merge="true" 
						data-nav="true"
						data-dots="false" 
						data-items="1"  data-mobile="1" data-tablet="1" data-desktopsmall="4"  data-desktop="5" 
						data-autoplay="true" 
						data-delay="5000" 
						data-navigation="true">
						
						@foreach($staffs as $staff)
						<div class="item">
							<!-- Member Wrap -->
							<div class="student-wrap">
								<div class="student-img-wrap">
									<img width="150" height="150" src="/img/staff_images/{{$staff->image}}" alt="{{ $staff->name }}" class="img-responsive">
								</div><!-- Image Wrapper -->
								<div class="student-detail-wrap">
									<h5 class="student-name"><a href="/member/profile/{{$staff->id}}">{{ $staff->name }}</a></h5>
									<span>{{ $staff->position['name']}}</span>
								</div><!-- Detail Wrap -->
							</div><!-- Member Wrap -->

						</div><!-- Item -->
						@endforeach
						
					</div><!-- Related Post -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

</div><!-- Page Main -->

@endsection