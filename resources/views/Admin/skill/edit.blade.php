@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Members Setting</a>
			</li>
			<li class="breadcrumb-item active">Edit Skill</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3">
				<div class="card-header text-center">
					<h5>Edit Skill</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/skill/{{$skill->id}}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="skill_type_id" class="form-control">
										<option value="">Select a skill type</option>
										@foreach(App\SkillType::all() as $type)
										@if($skill->skill_type_id == $type->id)
										<option value="{{$type->id}}" selected>{{$type->name}}</option>
										@else
										<option value="{{$type->id}}">{{$type->name}}</option>
										@endif
										@endforeach
									</select>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="name" class="form-control" value="{{$skill->name}}" placeholder="Enter skill name">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<button type="submit" class="btn btn-primary">Update Skill</button>
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