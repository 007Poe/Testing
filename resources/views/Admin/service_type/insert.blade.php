@extends('Admin.layouts.master')
@section('content')

<style type="text/css">
.upload-img-wrap {
	width: 520px;
	height: 320px;
	margin: 0 auto;
}
#result{
	width: 300px;
	height: 200px;
	border:1px ridge #ddd;
}
.upload-msg {
	width: 510px;
	padding: 30px;
}
</style>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Create</a>
			</li>
			<li class="breadcrumb-item active">Create Service Type</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3">
				<div class="card-header text-center">
					<h5>Add Service Type</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/add_service_type" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="service_type_name" class="form-control" placeholder="Enter service type name">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<textarea name="description" class="form-control" placeholder="Enter description" ></textarea>
								</div>

								<div class="col-9 mr-auto ml-auto form-group">
									<div class="img-wrap upload-img">
										<div class="container">
											<div class="col-1-2">
												<div class="upload-msg">
													Upload a service type image to start cropping
												</div>
												<div class="upload-img-wrap">
													<div id="upload-img"></div>
												</div>
											</div>
											<div class="col-1-2">
												<div class="actions">
													<a class="btn file-btn">
														<span>Upload</span>
														<input type="hidden" name="image" id="imgup" value="{{ old('image') }}">
														<input type="file" name="userimg" id="upload" accept="image/*" />
													</a>
													<button type="button" class="upload-result">OK</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- <img id="result" class="col-5 mr-auto ml-auto p-2 mb-3">
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="file" name="image" class="form-control" id="file" placeholder="Select image" >
								</div> -->

								<div class="col-9 mr-auto ml-auto form-group">
									<button type="submit" class="btn btn-primary">Add Service Type</button>
								</div>
							</div>
						</div>
					</form>					
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('Admin/js/sweetalert.min.js')}}"></script>
	<script src="{{ asset('Admin/js/exif.js')}}"></script>
	<script src="{{ asset('Admin/js/croppie.js')}}"></script>

	<script type="text/javascript">

		imgUpload();

		function imgUpload() {
			var $uploadCrop;

			function readFile(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('.upload-img').addClass('ready');
						$uploadCrop.croppie('bind', {
							url: e.target.result
						}).then(function(){
							$uploadCrop.croppie('result', {
								type: 'canvas',
								size: 'viewport'
							})
							.then(function (resp) {
								$('#imgup').val(resp);          
							});

							console.log('jQuery bind complete');
						});

					}

					reader.readAsDataURL(input.files[0]);
				}
				else {
					swal("Sorry - you're browser doesn't support the FileReader API");
				}
			}

			$uploadCrop = $('#upload-img').croppie({
				viewport: {
					width: 500,
					height: 300,
					type: 'square'
				},
				enableExif: true
			});

			$('#upload').on('change', function () { readFile(this); });
			$('.upload-result').on('click', function (ev) {
				$uploadCrop.croppie('result', {
					type: 'canvas',
					size: 'viewport'
				})
				.then(function (resp) {
					popupResult({
						src: resp
					});         
				});
			});
		}

		function popupResult(result) {
			var html;
			if (result.html) {
				html = result.html;
			}
			if (result.src) {
				html = '<img src="' + result.src + '" />';
			}
			$('#imgup').val(result.src);
    // $('upload-img-wrap').html(html);
    console.log(result.src);
    swal({
    	title: '',
    	html: true,
    	text: html,
    	allowOutsideClick: true
    });
    setTimeout(function(){
    	$('.sweet-alert').css('margin', function() {
    		var top = -1 * ($(this).height() / 2),
    		left = -1 * ($(this).width() / 2);

    		return top + 'px 0 0 ' + left + 'px';
    	});
    }, 1);
}

</script>

<!-- /.container-fluid-->
@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
@endsection