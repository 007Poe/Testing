@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Create</a>
			</li>
			<li class="breadcrumb-item active">Create Category</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3">
				<div class="card-header text-center">
					<h5>Insert Category</h5>
				</div>
				<div class="card-block">

					<div class="col-6 ml-auto d-flex mt-3 mb-5">
						<div class="col-6 pt-1">Specification row: </div>
						<input class="col-4" type="number" value="1" id="add_row" max="20">
						<div class="col-2">
							<button id="add_specific" class="btn btn-sm btn-info">ADD</button>
						</div>

					</div>


					<form method="POST" action="/sub_category">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="category_id" class="form-control">
										<option value="">Select a category
										</option>
										@foreach(App\Category::all() as $category)
										<option value="{{$category->id}}">{{$category->name}}
										</option>
										@endforeach
									</select>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="category_name" class="form-control ml-1" placeholder="Enter sub category name">
								</div>				
								<div class="col-10 mr-auto ml-auto form-group specification">
									<div class="row bts mb-3">
										<div class="col-1" id="spec_no"><b>1.</b>
										</div>
										<div class="col-4" id="spec_label">
											<input type="text" name="specific_label[]" class="form-control" placeholder="Specific Label" >
										</div>
										<div class="col-6 ml-2" id="spec_value">
											<input type="text" name="specific_value[]" class="form-control" placeholder="Specific Value" >
										</div>
									</div>
								</div>
				<!-- <div class="form-group">
					<textarea name="specification" class="form-control" placeholder="Enter description" ></textarea>
				</div> -->
				<div class="col-12 mr-auto ml-auto form-group text-center">
					<button type="submit" class="btn btn-success">Insert</button>
				</div>
			</div>
		</div>
	</form>	
</div>
</div>
</div>
</div>

<!-- /.container-fluid-->
@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
@endsection