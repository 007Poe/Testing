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
			<li class="breadcrumb-item active">Add New Staff</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3 mb-4">
				<div class="card-header text-center">
					<h5>Insert Staff</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/add_staff" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-4">
								<div class="col-8 mr-auto ml-auto form-group">
									<div class="img-wrap upload-img">
										<div class="container">
											<div class="col-1-2">
												<div class="upload-msg">
													Upload a file to start cropping
												</div>
												<div class="upload-img-wrap">
													<div id="upload-img"></div>
												</div>
											</div>
											<div class="col-1-2">
												<div class="actions">
													<a class="btn file-btn">
														<span>Upload</span>
														<input type="hidden" name="image" id="imgup">
														<input type="file" name="userimg" id="upload" accept="image/*" />
													</a>
													<button type="button" class="upload-result">OK</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="staff_name" class="form-control" value="{{old('staff_name')}}" placeholder="Enter name">
									@if ($errors->has('staff_name'))
									<span class="has-error">{{ $errors->first('staff_name') }}</span>
									@endif
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="nrc" class="form-control" value="{{old('nrc')}}" placeholder="Enter NRC number" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="date" name="dob" class="form-control" value="{{old('dob')}}" placeholder="Select date of birth" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="text" name="codeno" class="form-control" value="{{old('codeno')}}" placeholder="Enter code number" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter email" >
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<select name="department" id="department" class="form-control">
										<option value="">Select a Department</option>
										@foreach(App\SkillType::all() as $department)
										<option value="{{$department->id}}" 
											{{ old('skill_type') == $department->id ? 'selected' : '' }}>
											{{$department->name}}
										</option>
										@endforeach
									</select>
								</div>
								<div class="col-8 mr-auto ml-auto form-group">
									<select name="position" class="form-control">
										<option value="">Select a position</option>
										@foreach($positions as $position)
										<option value="{{$position->id}}" 
											{{ old('position') == $position->id ? 'selected' : '' }}>
											{{$position->name}}
										</option>
										@endforeach
									</select>
								</div>				
								<div class="col-8 mr-auto ml-auto form-group">
									<select name="team" class="form-control">
										<option value="">Select a team</option>
										@foreach($teams as $team)
										<option value="{{$team->id}}" 
											{{ old('team') == $team->id ? 'selected' : '' }}>
											{{$team->name}}</option>
											@endforeach
										</select>
									</div>								
									<div class="col-8 mr-auto ml-auto form-group">
										<textarea name="address" class="form-control" placeholder="Enter address" >{{old('address')}}</textarea>
									</div>


									<div class="col-8 mr-auto ml-auto form-group">
										<input type="text" name="phno" class="form-control" value="{{old('phno')}}" placeholder="Enter phone number" >
									</div>
									<div class="col-8 mr-auto ml-auto form-group">
										<textarea name="degree" class="form-control" placeholder="Enter degree" cols="5">{{old('degree')}}</textarea>
									</div>
									<div class="col-8 mr-auto ml-auto form-group">
										<textarea name="experience" class="form-control" placeholder="Enter experience" cols="5">{{old('experience')}}</textarea>
									</div>

									<div class="col-8 mr-auto ml-auto form-group">
										<div class="row skills">
											@foreach($skills as $skill)
											<div class="col-3 form-group">
												<input type="text" name="skill[{{$skill->id}}]" class="form-control" value="{{old('skill.'.$skill->id)}}" placeholder="{{$skill->name}}">
											</div>
											@endforeach
										</div>
									</div>
									
									<div class="col-12 mr-auto ml-auto form-group text-center mt-2">
										<button type="submit" class="btn btn-success">Insert</button>
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
<script type="text/javascript">
	$(function(){
		$('#department').change(function(){
		var skill_type_id = $(this).val();

		$('.skills').html('');

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

		$.ajax({
			type:"POST",
			url:"/skills/"+skill_type_id,
			dataType:'json',        
			data:{skill_type_id:skill_type_id},
			success:function(data){
				console.log(data.skills);
				$.each(data.skills,function(key,value){
					$('.skills').append("<div class='col-3 form-group'><input type='text' name='skill["+value.id+"]' class='form-control' value='' placeholder='"+value.name+"'></div>");
                });
			},
			error:function(data){}
		});

	});
	})
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