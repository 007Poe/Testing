@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Category/Edit</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3 mb-4">
				<div class="card-header text-center">
					<h5>Edit Category</h5>
				</div>
				<div class="card-block">

					<form method="POST" action="/category/update/{{$category->id}}" enctype="multipart/form-data">
						{{ method_field('PATCH') }}
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">	
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="name" class="form-control" value="{{$category->name}}">
								</div>
								
								<div class="col-12 mr-auto ml-auto form-group text-center mt-2">
									<button type="submit" class="btn btn-success">Update</button>
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
<!-- /.container-fluid-->
@endsection
