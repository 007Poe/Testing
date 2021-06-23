@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Members Setting</a>
			</li>
			<li class="breadcrumb-item active">Add New Team</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3">
				<div class="card-header text-center">
					<h5>Add New Team</h5>
				</div>
				<div class="card-block">
					<form method="POST" action="/add_team">
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="team_name" class="form-control" placeholder="Enter team name">
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<button type="submit" class="btn btn-primary">Add Team</button>
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