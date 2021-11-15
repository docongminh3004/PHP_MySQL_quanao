
@extends('layout.page')


@section('main')

@foreach($product as $item)

<div class="col-md-3 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem"style="border:1px solid #b2b2b2;">
										<div class="men-thumb-item text-center">
											<img src="/101187/public/page/images/{{$item->image}}" alt="" style="margin-top:10px;width:70%;height:170px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('xemchitiet',$item->id)}}" class="link-product-add-cart">Quick View</a>
													
												 </div>
											</div>
										</div>
										<span class="product-new-top">New</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">{{$item->prd_name}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{number_format($item->price)}} ₫</span>
												
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out"style="margin-bottom:5px">
											<input type="submit" name="submit" value="Add to cart" class="button" />
											</div>
										</div>
									</div>
								</div>
								
							
            @endforeach
			<div class="clearfix"></div>



@stop()