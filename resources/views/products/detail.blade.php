@extends('layouts.master')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}" />
<!-- Page Main -->
<div role="main" class="main">

	<!-- Section -->
	<section class="bg-lgrey typo-dark" style="padding-top: 30px;">
		<div class="container">
			<div class="row">
				<!-- Detail Content -->
				<div class="col-md-9">
					<div class="row">
						<!-- Member Image Column -->
						<div class="col-md-5">
							<div class="owl-carousel dots-inline" 
								data-animatein="" 
								data-animateout="" 
								data-items="1" data-margin="" 
								data-loop="true" 
								data-merge="true" 
								data-nav="false" 
								data-dots="true" 
								data-stagepadding="" 
								data-mobile="1" 
								data-tablet="1" 
								data-desktopsmall="1"  
								data-desktop="1" 
								data-autoplay="false" 
								data-delay="3000" 
								data-navigation="true">
								<div class="item"><img class="img-responsive" src="/img/product_images/{{$product->image}}" alt="..." width="600" height="350"></div>
								<div class="item"><img class="img-responsive" src="/img/product_images/{{$product->image}}" alt="..." width="600" height="350"></div>
								<div class="item"><img class="img-responsive" src="/img/product_images/{{$product->image}}" alt="..." width="600" height="350"></div>
							</div><!-- carousel -->
						</div><!-- Coloumn -->
						<!-- Coloumn -->
						<div class="col-md-7">
							<div class="shop-detail-wrap" style="padding-top: 80px;">
								<h4 class="product-name">{{$product->name}}</h4>
								<div class="rating"><span>☆</span><span style="color: gold;">☆</span><span style="color: gold;">☆</span><span style="color: gold;">☆</span><span style="color: gold;">☆</span></div>
								<div class="share">
									<h5>Share : </h5>
									<ul class="social-icons color round">
										<li class="facebook"><a title="Facebook" target="_blank" href="http://www.facebook.com/">Facebook</a></li>
										<li class="twitter"><a title="Twitter" target="_blank" href="http://www.twitter.com/">Twitter</a></li>
										<li class="linkedin"><a title="Linkedin" target="_blank" href="http://www.linkedin.com/">Linkedin</a></li>
									</ul><!-- Blog Social Share -->
								</div>
								<a class="btn addtocart" data-id="{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
								@if($product->validateWishList($_SERVER['REMOTE_ADDR'],$product->id) < 1)
								<a class="btn" href="#" title="Added to wishlist" style="background: #171717;"><i class="fa fa-heart-o add-wishlist" data-id="{{ $product->id }}" aria-hidden="true"></i></a>
								@else
								<a class="btn" href="#" title="Remove from wishlist" style="background: #2196f5;"><i class="fa fa-heart remove-wishlist" data-id="{{ $product->id }}" aria-hidden="true"></i></a>
								@endif								
							</div><!-- Member Detail Wrapper -->
						</div><!-- Member Detail Column -->
					</div><!-- Row -->
					
					<!-- Product Features -->
					<div class="row margin-top-60">
						<div class="col-sm-12">
							<!-- Tab -->
							<div class="tab"> 
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
									<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Aditional Information</a></li>
									<!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews (2)</a></li> -->
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<p>{{$product->description}}</p>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="profile">
										<p><?php 
            $specification = explode('&&', $product->specification);
            $specification_label = explode('&/', $specification[0]); 
            $specification_value = explode('&/', $specification[1]);
            ?>
            @foreach($specification_label as $key => $specification)
            <p class="pt-1">
              <span style="font-weight:bold">{{$specification}}</span> :   {{$specification_value[$key]}}
            </p>
            @endforeach</p>
									</div>
									<!-- <div role="tabpanel" class="tab-pane fade" id="messages">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem</p>
									</div> -->
								</div><!-- Tab Content -->
							</div><!-- Tab -->
							
						</div><!-- Product Features -->
					</div><!-- Row -->
					
					<div class="ad margin-top-30"><a href="#"><img alt="ad"  height="200" width="1200" class="img-responsive" src="/images/banner/ad-03.jpg"></a></div>

				</div><!--Detail Content -->
				
				<!-- Sidebar -->
				<div class="col-md-3">
					<!-- aside -->
					<aside class="sidebar">

						<!-- Widget -->
						<div class="widget no-box">
							<!-- Title -->
							<div class="title-bg-line">
								<h6 class="title"><a href="#">My Account</a></h6>
							</div>
							<!-- Widget -->
							<ul class="go-widget">
								<li><a href="#">My Cart <span class="badge label label-warning my-cart-badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '0'}}</span></a></li>
								<li><a href="#">My Wishlist <span class="badge my-wishlist-badge">5</span></a></li>
							</ul>
						</div><!-- Widget -->					
						 
						<!-- Widget -->
						<div class="widget no-box margin-top-50">
							<!-- Title -->
							<div class="title-bg-line">
								<h6 class="title"><a href="#">Categories</a></h6>
							</div>
							<div class="accordion-widget">
								<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group accordion">
									@foreach($categories as $category)
									<div class="panel panel-default">
										<div id="heading{{$category->id}}" role="tab" class="panel-heading">
											<h4 class="panel-title">
												<a aria-controls="collapse{{$category->id}}" aria-expanded="false" href="#collapse{{$category->id}}" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
												{{$category->name}}<span class="badge">{{count($category->subcategories)}}</span>
												</a>
											</h4>
										</div>
										<div aria-labelledby="heading{{$category->id}}" role="tabpanel" class="panel-collapse collapse" id="collapse{{$category->id}}">
											@if(count($category->subcategories) > 0)
											<div class="panel-body">
												<ul class="go-widget">
													@foreach($category->subcategories as $subcategory)
													<li><a href="/product/category/{{$category->id}}">{{ $subcategory->name }}</a></li>
													@endforeach
												</ul>
											</div>
											@endif
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div><!-- Widget -->
						
						<!-- Widget -->
						<div class="widget no-box margin-top-50">
							<!-- Title -->
							<div class="title-bg-line">
								<h6 class="title"><a href="#">Advertisement</a></h6>
							</div>
							<div class="ad margin-top-30">
								<a href="#"><img alt="ad" class="img-responsive" src="/images/banner/ad-04.jpg" height="533" width="270"></a>
							</div>
						</div><!-- Widget -->					
						
						
					</aside><!-- aside -->
				</div><!-- Column -->

				<div class="col-md-12">
					<div class="tab-news margin-top-50">
						<!-- Title -->
						<div class="title-bg-line">
							<h6 class="title"><a href="#">Related Products</a></h6>
						</div>
					
						<div class="row">
							<div class="col-sm-12">
								<div class="owl-carousel" 
									data-animatein="" 
									data-animateout="" 
									data-margin="30" 
									data-stagepadding="" 
									data-loop="true" 
									data-merge="true" 
									data-nav="false"
									data-dots="false" 
									data-items="1"  data-mobile="1" data-tablet="1" data-desktopsmall="3"  data-desktop="4" 
									data-autoplay="true" 
									data-delay="5000" 
									data-navigation="false">
									
									@foreach($related_products as $product)
									<div class="item">
										<!-- Related Wrapper -->
										<div class="related-wrap">
											<!-- Related Image Wrapper -->
											<div class="img-wrap">
												<img height="500" width="500" alt="Related Product" class="img-responsive" src="/img/product_images/{{$product->image}}">
											</div>
											<!-- Related Content Wrapper -->
											<div class="related-content">
												<a href="/product/{{$product->id}}/detail" title="View Detail">+</a><span>COLOR</span>
												<h5 class="title">{{str_limit($product->name, 20) }}</h5>
											</div><!-- Related Content Wrapper -->
										</div><!-- Related Wrapper -->
									</div><!-- Item -->
									@endforeach
								</div><!-- Owl -->
							</div><!-- Column -->
						</div><!-- Row -->
					</div><!-- Tab news -->
				</div> <!-- column -->
			</div><!-- row -->
		</div><!-- Container -->
	</section><!-- Section -->

</div><!-- Page Main -->

@endsection
