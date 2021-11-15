<?php

namespace App\Http\Controllers;
use Cart;//khai báo thư viện trước
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use DB;



class CheckoutController extends Controller
{
    public function login_checkout(){
        
        return view('customer.login_checkout');
    }
    public function add_customer(Request $request){

        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);

        $customer_id = DB::table('tbl_customers')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect('/checkout');
    }

    public function checkout(){
        
        return view('customer.show_checkout');
    }
    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;
        

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
        
        return Redirect('/payment');

    }
    public function payment(){

        return view('customer.payment');

    }
    public function order_place(Request $request){
        //insert payment_method-> lấy hình thức thanh toán
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';      
        $payment_id = DB::table('tbl_payment')->insertGetId($data);
        
        //insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id'); 
        $order_data['payment_id'] = $payment_id; 
        $order_data['order_total'] = Cart::total(); 
        $order_data['order_status'] = 'Đang chờ xử lý'; 
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //insert order_details
        $content=Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id; 
            $order_d_data['product_name'] = $v_content->name; 
            $order_d_data['product_price'] = $v_content->price; 
            $order_d_data['product_sales_quantity'] =  $v_content->qty; 
            DB::table('tbl_order_details')->insert($order_d_data);

        }
        if($data['payment_method']==1){
            echo 'Thanh toán thẻ ATM';
        }elseif($data['payment_method']==2){
            Cart::destroy();
            return view('customer.handcash');

        }else{
            echo 'Thẻ ghi nợ';
        }
       
        //return Redirect('/payment');

    }
    public function logout_checkout(){
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
        
        if($result){
            Session::put('customer_id',$result->customer_id);
            return Redirect('/checkout');
        }else{
            return Redirect('/login-checkout');
        }
        
        
    }
}
