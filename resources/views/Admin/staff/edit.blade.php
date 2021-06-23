@extends('Admin.layouts.master')
@section('content')
<style type="text/css">
.upload-img-wrap {
	width: 370px;
	height: 320px;
	margin: 0 auto;
}
#result{
	width: 300px;
	height: 200px;
	border:1px ridge #ddd;
}
.upload-msg {
	width: 410px;
	padding: 30px;
}
</style>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Members Setting</a>
			</li>
			<li class="breadcrumb-item active">Edit Staff</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3 mb-4">
				<div class="card-header text-center">
					<h5>Edit Staff</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/staff/{{$staff->id}}/update" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="col-12">
							<div class="row mt-4">

								<div class="col-8 mr-auto ml-auto form-group">
									<div class="img-wrap upload-img">
										<div class="container">
											<div class="col-1-2">
												<div class="upload-msg">
													<img src="/img/staff_images/{{$staff->image}}">
												</div>
												<div class="upload-img-wrap">
													<div id="upload-img"></div>
												</div>
											</div>
											<div class="col-1-2">
												<div class="actions">
													<a class="btn file-btn">
														<span>Upload</span>
														<input type="hidden" name="staff_image" id="imgup" value="{{ old('staff_image') }}">
														<input type="file" name="userimg" id="upload" accept="image/*" />
													</a>
													<button type="button" class="upload-result">OK</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <img id="result" class="col-5 mr-auto ml-auto p-2 mb-3" src="/img/staff_images/{{$staff->image}}">
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="file" name="staff_image" class="form-control" id="file" value="{{$staff->image}}" >
								</div> -->

								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="name" class="form-control" value="{{$staff->name}}" placeholder="Enter name">
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="nrc" class="form-control" value="{{$staff->nrc}}" placeholder="Enter NRC number" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="date" name="dob" class="form-control" value="{{$staff->dob}}" placeholder="Select date of birth" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="codenumber" class="form-control" value="{{$staff->codenumber}}" placeholder="Enter code number" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="email" name="email" class="form-control" value="{{$staff->email}}" placeholder="Enter email" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<select name="position_id" class="form-control">
										<option value="">Select a position</option>
										@foreach(App\Position::all() as $position)
										<option value="{{$position->id}}" @if ($position->id == $staff->position_id)
											selected="selected"
											@endif>{{$position->name}}</option>
											@endforeach
										</select>
									</div>				
									<div class="col-8 mr-auto ml-auto form-group">
										<select name="team_id" class="form-control">
											<option value="">Select a team</option>
											@foreach(App\Team::all() as $team)
											<option value="{{$team->id}}" @if ($team->id == $staff->team_id)
												selected="selected"
												@endif>{{$team->name}}</option>
												@endforeach
											</select>
										</div>								
										<div class="col-8 mr-auto ml-auto form-group">
											<textarea name="address" class="form-control"  placeholder="Enter address" >{{ $staff-> address}}</textarea>
										</div>


										<div class="col-8 mr-auto ml-auto form-group">
											<input type="text" name="phonenumber" class="form-control" value="{{$staff->phonenumber}}" placeholder="Enter phone number" >
										</div>
										<div class="col-8 mr-auto ml-auto form-group">
											<textarea name="degree" class="form-control" placeholder="Enter degree" cols="5">{{$staff->degree}}</textarea>
										</div>
										<div class="col-8 mr-auto ml-auto form-group">
											<textarea name="experience" class="form-control" placeholder="Enter experience" cols="5">{{$staff->experience}}</textarea>
										</div>

										<div class="col-8 mr-auto ml-auto form-group">
											@foreach($skills as $skill)
											@foreach($skill as $s)
											<div class="row">
												<div class="col-md-3" style="padding: 0px;">
													<label class="form-control" style="background: green;">
														{{$s->name}}
													</label>
												</div>
												<div class="col-8 mr-auto ml-auto form-group">
													<input type="text" name="skill[{{$s->pivot->id}}]" class="form-control" value="{{$s->pivot->percent}}">
												</div>
											</div>
											@endforeach
											@endforeach
										</div>

										<div class="col-12 mr-auto ml-auto form-group text-center mt-2">
											<button type="submit" class="btn btn-success">Update</button>
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
							width: 350,
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