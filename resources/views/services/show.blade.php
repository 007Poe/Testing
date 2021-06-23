@extends('layouts.master')

@section('content')

<!-- Page Main -->
<div role="main" class="main">

	<!-- Section -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>{{$service->name}}</h3>
					<p style="text-indent: 40px;text-align: left;">{{$service->description}}</p>

					<!-- Section -->
					<section id="gallery" class="pad-top-5 typo-dark">
						<div class="container">

							<div class="row">
								<!-- Title -->
								<div class="col-sm-12">
									<div class="title-container text-left">
										<div class="title-wrap">
											<h4 class="title">Gallery</h4>
											<span class="separator line-separator"></span>
										</div>
										<!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam</p> -->
									</div>
								</div><!-- Title -->
							</div><!-- Row -->

							<div class="row">
								<div class="col-md-12">
									<!-- Filters -->
									<div class="isotope-filters">
										<ul class="nav nav-pills">
											<li><a href="#" data-filter=".all" class="filter active">All</a></li>
										</ul>
									</div><!-- Filters -->
									<!-- Gallery Block -->
									<div class="isotope-grid grid-four-column has-gutter-space" data-gutter="20" data-columns="4">
										<div class="grid-sizer"></div>
										<!-- Portfolio Item -->
										<div class="item all design web dentity photography">
											<!-- Image Wrapper -->
											<div class="image-wrapper">
												<!-- IMAGE -->
												<img width="700" height="320" class="img-responsive" src="/img/service_images/{{$service->image}}"/>
												<!-- Gallery Btns Wrapper -->
												<div class="gallery-detail btns-wrapper">
													<a href="/img/service_images/{{$service->image}}" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
												</div><!-- Gallery Btns Wrapper -->
											</div><!-- Image Wrapper -->
										</div><!-- Portfolio Item -->

										@foreach($service->services($service->id)->slice(0, 7) as $service)
										<!-- Portfolio Item -->
										<div class="item all design web dentity photography">
											<!-- Image Wrapper -->
											<div class="image-wrapper">
												<!-- IMAGE -->
												<img width="700" height="320" class="img-responsive" src="/img/service_images/{{$service->image}}"/>
												<!-- Gallery Btns Wrapper -->
												<div class="gallery-detail btns-wrapper">
													<a href="{{$service->image}}" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
												</div><!-- Gallery Btns Wrapper -->
											</div><!-- Image Wrapper -->
										</div><!-- Portfolio Item -->
										@endforeach
									</div><!-- Gallery Block -->
								</div><!-- Column -->
							</div><!-- Row -->
						</div><!-- Container -->
					</section><!-- Section -->

					<hr/>
					<!-- Related -->
					<h4 class="title-sm">Related Services : </h4>
					<div class="owl-carousel" data-animatein="" data-animateout="" data-items="1" data-margin="30" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3"  data-desktop="3" data-autoplay="true" data-delay="3000" data-navigation="true">
						@foreach($related_services as $service)
						<div class="item">
							<!-- Related Wrapper -->
							<div class="related-wrap">
								<!-- Related Image Wrapper -->
								<div class="img-wrap">
									<img width="600" height="220" alt="service" class="img-responsive" src="/img/service_images/{{$service->image}}">
								</div>
								<!-- Related Content Wrapper -->
								<div class="related-content">
									<a href="/service/{{$service->id}}/detail" title="Read More">+</a><span>{{$service->service_type->type}}</span>
									<h5 class="title">{{$service->name}}</h5>
								</div><!-- Related Content Wrapper -->
							</div><!-- Related Wrapper -->
						</div><!-- Item -->
						@endforeach

					</div><!-- Related Post -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

</div><!-- Page Main -->

@endsection
