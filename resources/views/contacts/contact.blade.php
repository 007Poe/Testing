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
					<h3 class="title">Contact</h3>
					<h6 class="sub-title">All you want know</h6>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Contact</li>
					</ol><!-- Breadcrumb -->
				</div><!-- Page Header Wrapper -->
			</div><!-- Coloumn -->
		</div><!-- Row -->
	</div><!-- Container -->
</div><!-- Page Header -->
	
<!-- Page Main -->
<div role="main" class="main">
	<!-- Section -->
	<section class="bg-grey typo-dark">
		<div class="container">
			<div class="row">
				<!-- Column -->
				<div class="col-sm-3">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-map-marker"></i>
						</div>
						<h5 class="title">Head Office</h5>
						<p>Mandalay, Myanmar</p>
					</div><!-- Contact Info -->
				</div><!-- Column -->
				
				<!-- Column -->
				<div class="col-sm-3">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-map2"></i>
						</div>
						<h5 class="title">Kids School</h5>
						<p>Melbourne, Australia</p>
					</div><!-- Contact Info -->
				</div><!-- Column -->
				
				<!-- Column -->
				<div class="col-sm-3">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-phone-2"></i>
						</div>
						<h5 class="title">Contact Mail</h5>
						<p><a href="mailto:name@email.com">info@universh.com</a></p>
					</div><!-- Contact Info -->
				</div><!-- Column -->
				
				<!-- Column -->
				<div class="col-sm-3">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-clock"></i>
						</div>
						<h5 class="title">Opening Hours</h5>
						<p>10am - 4pm</p>
					</div><!-- Contact Info -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->
	
	<!-- Section -->
	<section class="pad-none typo-dark">
		<div class="container-fluid">
			<div class="row">
				<!-- Column -->
				<div class="col-sm-7 pad-60 col-eq-height bg-lgrey">
					<div class="title-container text-left sm">
						<div class="title-wrap">
							<h4 class="title">Get in Touch</h4>
							<span class="separator line-separator"></span>
						</div>							
					</div><!-- Name -->
					<!-- Form Begins -->
					<form method="post" >
						<!-- Field 1 -->
						<div class="input-text form-group">
							<input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
						</div>
						<!-- Field 2 -->
						<div class="input-email form-group">
							<input type="email" name="contact_email" class="input-email form-control" placeholder="Email"/>
						</div>
						<!-- Field 4 -->
						<div class="textarea-message form-group">
							<textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="8" ></textarea>
						</div>
						<!-- Button -->
						<button class="btn" type="submit">Send Now</button>
					</form>
				</div><!-- Column -->
				
				<!-- Column -->
				<div class="col-sm-5 col-eq-height map-canvas" 
					style="" 
					data-zoom="12" 
					data-lat="22.10856" 
					data-lng="95.13583" 
					data-title="Autin" 
					data-type="roadmap" 
					data-hue="#2196F3" 
					data-content="Universh&lt;br&gt; Contact: +012 (345) 6789&lt;br&gt; info@universh.com">
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</section><!-- Section -->	
</div><!-- Page Main -->
@endsection
