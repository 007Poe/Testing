@extends('layouts.master')

@section('content')

<!-- Page Main -->
<meta name="_token" content="{!! csrf_token() !!}" />
<div role="main" class="main">

	<!-- Section -->
	<section class="bg-lgrey typo-dark" style="padding-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="tab-news">
						<!-- Title -->
						<div class="title-bg-line">
							<h6 class="title"><a href="#">Featured Products</a></h6>
						</div>
					
						<div class="row shop-sm-col">
							@foreach($products as $product)
							<!-- Item Begins -->
							<div class="col-sm-4">
								<!-- Shop Grid Wrapper -->
								<div class="shop-wrap">
									<!-- Shop Image Wrapper -->
									<div class="shop-img-wrap">
										<img width="500" height="500" src="/img/product_images/{{$product->image}}" class="img-responsive" alt="Shop">
									</div><!-- Shop Wraper -->
									<!-- Shop Detail Wrapper -->
									<div class="product-details">
										<div class="shop-title-wrap">
											<h6 class="product-cat"><a href="#">Color</a></h6>
											<h5 class="product-name"><a href="/product/{{$product->id}}/detail">{{ str_limit($product->name, 20) }}</a></h5>
										</div><!-- Shop Detail Wrapper -->
										<div class="shop-btns">
											<a class="option-btn" href="#"> &plus; </a>
											<ul class="shop-meta">
												<li><a href="#" class="addtocart" data-id="{{$product->id}}" title="Add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
												<li><a href="/product/{{$product->id}}/detail" title="View More"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
												@if($product->validateWishList($_SERVER['REMOTE_ADDR'],$product->id) < 1)
												<li><a href="#" title="Added to wishlist" style="background: #171717;"><i class="fa fa-heart-o add-wishlist" data-id="{{ $product->id }}" aria-hidden="true"></i></a></li>
												@else
												<li><a href="#" title="Remove from wishlist" style="background: #2196f5;"><i class="fa fa-heart remove-wishlist" data-id="{{ $product->id }}" aria-hidden="true"></i></a></li>
												@endif
											</ul><!-- Blog Meta -->
										</div><!-- Shop btns -->
									</div><!-- Blog Detail Wrapper -->
								</div><!-- Blog Wrapper -->
							</div><!-- Column -->
							@endforeach
						</div><!-- Row -->
					</div><!-- Tab news -->

					<!-- Pagination -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							{{ $products->links('paginate.paginate') }}
						</div>
					</div>
					<!-- Pagination -->
					
					<div class="ad margin-top-30"><a href="#"><img alt="ad"  height="200" width="1200" class="img-responsive" src="/images/banner/ad-03.jpg"></a></div>

				</div><!-- Columnm -->
				
				
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
												<h5 class="title">{{str_limit($product->name,20) }}</h5>
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
