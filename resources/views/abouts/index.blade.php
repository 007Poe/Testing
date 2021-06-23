@extends('layouts.master')

@section('content')

<!-- Page Main -->
<div role="main" class="main">

	<!-- Section -->
	<section class="typo-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="list-img">
						<img alt="Surity" class="img-responsive img-center" src="images/default/things.png" width="441" height="361">
					</div>
				</div><!-- Column -->
				<div class="col-sm-6">
					<!-- Title -->
					<div class="title-container sm text-left">
						<div class="title-wrap">
							<h5 class="title">We are professionals</h5>
							<span class="separator line-separator"></span>
						</div>
					</div>
					<!-- List -->
					<div class="row">
						<div class="col-md-12">
							<p style="text-indent: 40px;text-align: left;">We are one of the best innovative technological company in myanmar.We are involved into communication, connectivity, serveillance, security, data monitoring, web desigin & development, software development and robotics research, training and knowledge sharing.
							</p>
							<p style="text-indent: 40px;text-align: left;">We are a brand trusted by a lot of customers for our products and on-time services.We are a team of hard working professionals dedicated to Total Quality Management (TQM) with its 10+ years expericeces and technical knowledge.</p>
						</div><!-- Column -->
					</div><!-- Row -->	
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

	<!-- Section -->
	<section class="bg-grey typo-dark">
		<div class="container">
			<div class="row">
				<!-- Title -->
				<div class="col-sm-12">
					<div class="title-container">
						<div class="title-wrap">
							<h3 class="title">Our Members</h3>
							<span class="separator line-separator"></span>
						</div>
						<p class="description">We are working with team work</p>
					</div>
				</div><!-- Title -->
			</div><!-- Row -->
			
			<div class="row">
				@foreach($staffs as $staff)
				<div class="col-sm-3">
					<div class="student-wrap margin-top-30">
						<div class="student-img-wrap">
							<img width="150" height="150" src="/img/staff_images/{{$staff->image}}" alt="Member" class="img-responsive">
						</div><!-- Image Wrapper -->
						<div class="student-detail-wrap">
							<h5 class="student-name"><a href="/member/profile/{{$staff->id}}">{{$staff->name}}</a></h5>
							<span>{{ $staff->position['name']}}</span>
						</div><!-- Detail Wrap -->
					</div><!-- Member Wrap -->
				</div><!-- Column -->
				@endforeach
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->

</div><!-- Page Main -->

@endsection