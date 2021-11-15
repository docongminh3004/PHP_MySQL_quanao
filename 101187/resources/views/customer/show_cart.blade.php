
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
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">

		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Sản phẩm :
					<!-- <span>3 Products</span> -->
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
			
		</div>
	</div>
  
	<div class="modal-body modal-body-sub_agile">
            <div class="main-mailposi">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
            <div class="modal_body_left modal_body_left1">
                <h3 class="agileinfo_sign">Thông tin đặt hàng </h3>
                <form action="{{url('/luu_checkout')}}" method="get">
                @csrf
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Email*" name="spemail" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Họ tên" name="sptenkh" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Địa chỉ" name="spdiachi" required="">
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <input type="text" placeholder="Phone" name="spphone" required="">
                    </div>
                    <!-- <input style="background: #ff5722;" type="submit" value="Đặt hàng"> -->
					<?php
						    $customer_id = Session::get('customer_id');
                            if($customer_id!=Null){
						?>
							
							<a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán </a>

                        <?php  	   
					}else{
						?>

                         <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán </a>
						
						<?php 
					}	
						?>

                </form>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>



	<!-- <section id="do_action">
     <div class="container">
	 <div class="heading">
	    <h3>dmdnqjqh</h3>
		<p>dhdwghw</p>
		</div>
		<div class="row">
			</div> 
	          <div class="col-sm-6">
	             <div class="total_area">
	               <ul>
	                  <li>Tổng <span>767</span></li>
	                  <li>Thuế <span>767</span></li>
	                  <li>Phí vận chuyển <span>767</span></li>
	                  <li>Thành tiền<span>767</span></li>
	              </ul>
	                  <a class="btn btn-default update" href="">update</a>
		              <a class="btn btn-default check_out" href="">check </a>
		         </div>
	           </div>
	        </div>
	    </div>
	</section>  -->

			
@stop()