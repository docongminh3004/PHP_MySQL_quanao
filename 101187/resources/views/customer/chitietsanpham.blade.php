@extends('layout.page')
@section('main')
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{route('home.index')}}">Home</a>
						<i>|</i>
					</li>
					<li>Single Product 1</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ingle
				<span>P</span>age</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="/101187/public/page/images/{{$xem->image}}">
									<div class="thumb-images">
										<img src="/101187/public/page/images/{{$xem->image}}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
			
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$xem->prd_name}}</h3>
					<p class="mb-3">
					
                         

						<span class="item_price">{{$xem->price}}₫ </span>
						<del class="mx-2 font-weight-light">$00.00</del>
						<label>Giao hàng miễn phí</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
							   Tiền mặt khi giao hàng đủ điều kiện.
							</li>
							<li class="mb-3">
							   Tốc độ vận chuyển đến giao hàng. 
							</li>
							<li class="mb-3">
								Đảm bảo chất lượng sản phẩm tốt.
							</li>
							<li class="mb-3">
							  Ưu đãi giảm giá khi là khách cũ của cửa hàng.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>Khách hàng cũ</label> giảm 5%</p>
						<ul>
							<li class="mb-1">
								Thương hiệu nổi tiếng.
							</li>
							<li class="mb-1">
								Sản phẩm đa dạng.
							</li>
							<li class="mb-1">
								Chất liệu tốt.
							</li>
							<li class="mb-1">
								Cập nhật các mẫu hot trell theo mùa.
							</li>

						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Đội ngũ chăm sóc khách hàng.
						</p>
					</div>
					
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="{{URL::to('/save_cart')}} " method="get"> <!-- action lấy dữ liệu từ controller -->
							 {{ csrf_field() }}
							 <!-- action lấy dữ liệu từ controller -->
								<input name="qty" type="number" min="1" value="1" />
								<input name="id_hidden" type="hidden" value="{{$xem->id}}" />
								  <button type="submit" class="btn btn-fefault cart">
								  <i class="fa fa -shopping-cart"></i>
								  
									Add to cart
									</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@stop()

