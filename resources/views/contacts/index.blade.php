@extends('layouts.master')

@section('content')

<!-- Page Main -->
<div role="main" class="main">

	<!-- Section -->
	<section class="bg-lgrey" style="padding-top: 30px;">	
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-4">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-map2"></i>
						</div>
						<h5 class="title">Office</h5>
						<p>Pico Innovation Co.,Ltd,</p>
						<p>Myanmar, 73x38 Street, Mandalay</p>
					</div><!-- Contact Info -->
					
					<div class="contact-info margin-top-30">
						<div class="info-icon bg-dark">
							<i class="uni-mail"></i>
						</div>
						<h5 class="title">Contact</h5>
						<p><a href="mailto:name@email.com">info@picoinnovation.com</a></p>
						<p><a href="tel:+ 959 444 030 408">+ 959 444 030 408</a></p>
					</div><!-- Contact Info -->
					
				</div><!-- Column -->
				
				<div class="col-sm-6">
					<div class="contact-info">
						<div class="info-icon bg-dark">
							<i class="uni-fountain-pen"></i>
						</div>
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
								<textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="5" ></textarea>
							</div>
							<!-- Button -->
							<button class="btn" type="submit">Send Now</button>
						</form>
					</div><!-- Contact Info -->
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->	
	</section><!-- Section -->

	<!-- Section -->
	<section class="typo-dark" style="padding-top: 0px;">
		<!-- Map -->
		<div class="full-screen map-canvas" 
		style="" 
		data-zoom="20" 
		data-lat="21.9421734" 
		data-lng="96.0926941" 
		data-title="pico" 
		data-type="locationmap" 
		data-hue="#2196F3" 
		data-content="Pico&lt;br&gt; Contact: +(959) 444-030-408&lt;br&gt; info@picoinnovation.com">
	</div><!-- Map -->
</section><!-- Section -->

</div><!-- Page Main -->

	<!-- SCRIPTS -->
	<script>
		function initMap() {
			var directionsService = new google.maps.DirectionsService;
			var directionsDisplay = new google.maps.DirectionsRenderer;
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 12,
				center: {lat: 21.9421734, lng: 96.0926941}
			});

			directionsDisplay.setMap(map);

			var marker=new google.maps.Marker({
				position:new google.maps.LatLng(21.9421734, 96.0926941),

			});

			marker.setMap(map);
		}

	</script>
		<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFB5KFwFCUhuwrFegT4Ec3xzIujplBYrg&callback=initMap">
</script>

@endsection