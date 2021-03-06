@extends('Admin.layouts.master')
@section('content')
<style type="text/css">
.upload-img-wrap {
	width: 420px;
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
				<a href="#">Create</a>
			</li>
			<li class="breadcrumb-item active">Create Product</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3 mb-4">
				<div class="card-header text-center">
					<h5>Insert Product</h5>
				</div>
				<div class="card-block">
					
					<div class="col-6 ml-auto d-flex mt-3 mb-5">
						<div class="col-6 pt-1">Specification row: </div>
						<input class="col-4" type="number" value="1" id="add_row" max="20">
						<div class="col-2">
							<button id="add_specific" class="btn btn-sm btn-info">ADD</button>
						</div>

					</div>
					<form method="POST" action="/add_product" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="category_id" class="form-control">
										<option value="">Select a category
										</option>
										@foreach(App\Category::all() as $category)
										<option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
											{{$category->name}}
										</option>
										@endforeach
									</select>
								</div>	
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="sub_category_id" class="form-control category_specific">
										<option value="">Select a sub category
										</option>
										@foreach(App\SubCategory::all() as $subcategory)
										<option value="{{$subcategory->id}}" {{ old('sub_category_id') == $subcategory->id ? 'selected' : '' }}>{{$subcategory->name}}
										</option>
										@endforeach
									</select>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter product name">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="product_code" class="form-control" value="{{ old('product_code') }}" placeholder="Enter product code">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="model" class="form-control" value="{{ old('model') }}" placeholder="Enter product model">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<div class="row">
										<div class="col-6">
											<input type="color" name="color" class="form-control" value="{{ old('color') }}" style="height: 38px;">
										</div>
										<div class="col-6">
											<input type="text" name="qty" class="form-control" value="{{ old('qty') }}" placeholder="Enter product qty">
										</div>
									</div>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<div class="row">
										<div class="col-6">
											<input type="text" name="size" class="form-control" value="{{ old('size') }}" placeholder="Enter product size">
										</div>
										<div class="col-6">
											<input type="text" name="price" class="form-control" value="{{ old('price') }}" placeholder="Enter product price">
										</div>
									</div>
								</div>			
								<div class="col-10 mr-auto ml-auto form-group specification">
									<div class="row bts mb-3">
										<div class="col-1" id="spec_no"><b>1.</b>
										</div>
										<div class="col-4" id="spec_label">
											<input type="text" name="specific_label[]" class="form-control" value="{{ old('specific_label[]') }}" placeholder="Specific Label" >
										</div>
										<div class="col-6 ml-2" id="spec_value">
											<input type="text" name="specific_value[]" class="form-control" value="{{ old('specific_value[]') }}" placeholder="Specific Value" >
										</div>
									</div>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<div class="img-wrap upload-img">
										<div class="container">
											<div class="col-1-2">
												<div class="upload-msg">
													Upload a product image to start cropping
												</div>
												<div class="upload-img-wrap">
													<div id="upload-img"></div>
												</div>
											</div>
											<div class="col-1-2">
												<div class="actions">
													<a class="btn file-btn">
														<span>Upload</span>
														<input type="hidden" name="product_image" id="imgup" value="{{ old('product_image') }}">
														<input type="file" name="userimg" id="upload" accept="image/*" />
													</a>
													<button type="button" class="upload-result">OK</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <img id="result" class="col-5 mr-auto ml-auto p-2 mb-3">
								<div class="col-8 mr-auto ml-auto form-group">
									<input type="file" name="product_image" class="form-control" id="file" value="{{ old('product_image') }}" placeholder="choose product image">
								</div> -->
								<div class="col-9 mr-auto ml-auto form-group">
									<textarea name="description" class="form-control" cols="5" placeholder="Enter description" >{{ old('description') }}</textarea>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<textarea name="service" class="form-control" placeholder="Enter product service" >
										{{ old('service') }}
									</textarea>
								</div>
								<div class="col-12 mr-auto ml-auto form-group text-center mt-2">
									<button type="submit" class="btn btn-success">Insert</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				@if(count($errors))
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
				@endif
			</div>
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
				width: 400,
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
@endsection
