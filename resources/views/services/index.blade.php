@extends('layouts.master')

@section('content')

<!-- Page Header -->
<div class="page-header bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Page Header Wrapper -->
				<div class="page-header-wrapper">
					<!-- Title & Sub Title -->
					<h3 class="title">{{$service_type->type}}</h3>
					<!-- <h6 class="sub-title">All you want know</h6> -->
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">{{$service_type->type}}</li>
					</ol><!-- Breadcrumb -->
				</div><!-- Page Header Wrapper -->
			</div><!-- Coloumn -->
		</div><!-- Row -->
	</div><!-- Container -->
</div><!-- Page Header -->

<!-- Page Main -->
<div role="main" class="main">
	<div class="page-default bg-grey typo-dark">
		<!-- Container -->
		<div class="container">
			<ul class="row course-container course-list">
				@foreach($services as $service)
				<!-- List -->
				<li class="col-sm-12">
					<!-- Course Wrapper -->
					<div class="row course-wrapper">
						<!-- Course Banner Image -->
						<div class="col-sm-5">
							<div class="course-banner-wrap">
								<img alt="Course" class="img-responsive" src="/img/service_images/{{$service->image}}" width="500" height="220">
								<span class="cat">{{$service->service_type->type}}</span>
							</div><!-- Course Banner Image -->
						</div><!-- Column -->	
						<!-- Course Detail -->
						<div class="col-sm-7">
							<div class="course-detail-wrap">
								<!-- Course Content -->
								<div class="course-content">
									<h4><a href="/service/{{$service->id}}/detail">{{$service->name}}</a></h4>
									<h5><small>with</small> <span>24 Hours</span></h5>
									<div class="rating"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div>
									<p>{{$service->description}}</p>
									<a href="/service/{{$service->id}}/detail" class="btn">Read More</a>
								</div><!-- Course Content -->
							</div><!-- Course Detail -->
						</div><!-- Column -->	
					</div><!-- Course Wrapper -->
					<!-- Divider -->
					<hr class="md">
				</li><!-- List -->
				@endforeach
				@if(!count($services)>0)
				<h5>No Service available in {{$service_type->type}}</h5>
				@endif
			</ul><!-- Row -->
		</div><!-- Container -->
	</div><!-- Page Default -->
</div><!-- Page Main -->

@endsection
