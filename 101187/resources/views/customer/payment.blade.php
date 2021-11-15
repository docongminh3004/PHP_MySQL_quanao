@extends('layout.page')
@section('main')

<section id="cart_items">
<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{route('home.index')}}">Home</a>
						<i>|</i>
					</li>
					<li>Thanh Toán Giỏ Hàng</li>
				</ul>
			</div>

						<div class="review-payment">
						    <h2>Xem lại giỏ hàng</h2>
			</div>
                <div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span>3 Products</span>
				</h4>
                <?php
                 $content=Cart::content();
       
                 $stt=1;
                ?>
       
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Hình ảnh</th>
								<th>Tên sp</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($content as $v_content)
						<tr>
                            <td>{{$stt++}}</td>
                            <td><img src="/101187/public/page/images/{{$v_content->options->image}}" style="max-width:100px;" alt=""></td>
                            <td>{{$v_content->name}}</td>
                            <td>{{number_format($v_content ->price)}} VND</td>
                            <td class="cart_quantity">
								 <div class="cart_quantity_button">
								     
									<form action="{{URL::to('/update-cart-quantity')}}" method=POST>
									@csrf
									<input class="cart_quantity_input" type="number" name="cart_quantity" value="{{$v_content->qty}}" 
									 >
									
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div> 
							</td>
                            <td class="cart_total">
								<p class="cart_total_price">
									
								    <?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'vnđ';
									?>
								</p>
							</td> 
                            <td class="cart_delete">
								 <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a> 
							</td>
						</tr>
						@endforeach
					
                        </tbody>
					</table>
				</div>
			</div>
            <h4 style="margin:40px 0;font-size: 20px;"> Chọn hình thức thanh toán </h4>
            <form method="POST" action="{{URL::to('/order-place')}}">    
              {{ csrf_field() }}     
			<div class="payment-options">
					      <span>
						    <label><input name="payment_option" value="1" type="checkbox"> Thanh toán bằng thẻ ATM</label>
						  </span>
						  <span>
						    <label><input name="payment_option" value="2" type="checkbox"> Nhận hàng thanh toán</label>
						  </span>
                          <span>
						    <label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
						  </span>
                          <input type="submit" value="Đặt Hàng" name="send_order_place" class="btn btn-primary btn-sm">
			</div>
            </form>	
		</div>
	</section> <!--/#cart_items-->

@stop()