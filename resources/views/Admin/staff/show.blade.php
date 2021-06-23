@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Products</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i>Products Information</div>
				<div class="card-body">
					<div class="container-fliud">
						<div class="row">
							<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pt-5 pb-2 text-center">
								<img src="{{ asset('img/staff_images')}}/{{$staff->image}}" class="img-thumbnail profile-img ml-2" />
								<div class="text-center mt-2">Staff Name:{{$staff->name}}</div>
								<div class="text-center mt-2">Position Name:{{$staff->position['name']}}</div>
								<div class="text-center mt-2">Team Name: {{ $staff->team['name'] }}</div>
								<div class="text-center mt-2">Degree:{{$staff->degree}}</div>
								<div class="icon-effect icon-effect-1a text-center">
									<span class="icon">
										<i class="fa fa-envelope"></i>
									</span>
									<span>
										{{$staff->email}}
									</span>
								</div>
								<div class="icon-effect icon-effect-1a text-center">
									<span class="icon">
										<i class="fa fa-linkedin" aria-hidden="true">
										</i>
									</span>
									<span>
										{{$staff->email}}
									</span>
								</div>
							</div>
							<div class="details col-lg-8 col-md-12 col-sm-12 col-xs-12">
								<div class="col-md-12 box box-style pb-3">
									<div class="pt-2 text-center skill-title">Skills</div>
									<hr>
									<div class="row">

										@foreach($skilltypes as $skilltype => $sk)
										<div class="col-12">
											<div class="text-left">											
												{{$sk->first()->skillType['name']}}
											</div>
											@foreach($sk as $s)										 

											<div class="pb-2 pt-3">
												<div class="wraper">
													<div class="progress_wraper">
														<span class="float-left pl-1">{{$s->name}}</span> 
														<span><i class="float-right pr-1" style="font-size: 13px;">{{$s->pivot->percent}}%</i>
														</span>
														<div class="progress_bar_container progress_b">
															<div class="progress_bar progress_green" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65" style="width: {{$s->pivot->percent}}%;height:20px;">
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>


										@endforeach
									</div>
								</div>

								<div class="col-md-12 box box-style text-center mt-3">
									<div class="pt-3 skill-title">Experience</div>
									<hr>
									<div class="pb-3">
										{{$staff->experience}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 box box-style text-right mt-3">
						<a class="pro-setting-link" href="/view_staff">
							<i class="fa fa-low-vision" style="font-size: 30px;padding-right: 18px;"></i>
						</a>
						<a class="pro-setting-link" href="/staff/{{ $staff->id }}/edit">
							<i class="fa fa-edit" style="font-size: 30px;"></i>
						</a>
					</div>
					<div class="col-md-4 box box-style text-left mt-3">
						<form method="post" action="/staff/{{$staff->id}}/delete">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit"><i class="fa fa-trash" style="font-size: 20px;"></i></button>
						</form>
						<br>
					</div>
				</div>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			</div>
		</div>
		<!-- /.container-fluid-->
		<!-- /.content-wrapper-->
		@endsection