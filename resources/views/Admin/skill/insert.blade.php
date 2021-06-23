@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Members Setting</a>
			</li>
			<li class="breadcrumb-item active">Add New Skill</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3">
				<div class="card-header text-center">
					<h5>Add Skill</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/add_skill">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="skill_name" class="form-control" placeholder="Enter skill name">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="skill_type" class="form-control">
										<option value="">Select a skill type</option>
										@foreach($skill_types as $type)
										<option value="{{$type->id}}">{{$type->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<button type="submit" class="btn btn-primary">Add Skill</button>
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