
@extends('layout.page')


@section('main')

@foreach($product as $item)
<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/101187/public/page/image/" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">{{$item->tensanpham}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$200.00</span>
												<del>$280.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												
											</div>
										</div>
									</div>
								</div>
            @endforeach



@stop()