<?php

namespace App\Http\Controllers;
use Cart;//khai báo thư viện trước
//use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function save_cart(Request $request){
         $idsp = $request->id_hidden;
         $quantily = $request->qty;
         $product_info =Product::where('id',$idsp)->first();//lấy duy nhất 1 sp sẽ dùng first()
         
        $data['id'] = $product_info->id;
        $data['qty'] = $quantily;
        $data['name'] = $product_info->prd_name;
        $data['price'] = $product_info->price;
        $data['weight'] = $product_info->price;
        $data['options']['image'] = $product_info->image;//lấy giống csdl 
        Cart::add($data);//thêm/
        //Cart::destroy();

         //Cart::add('293ad', 'Product 1', 1, 9.99, 550);      
  
        return Redirect('/show_cart');//redirect trả dữ liệu vừa thêm về 1 cái action  ->  public function show_cart()
        
          
    }
    public function show_cart()
    {

        //$category =category::where('id',$idsp)->orderBy('id','DESC')->get();
        //$brand_product =brands::where('brand_id')->orderBy('brand_id','DESC')->get();
        return view('customer.show_cart');
        
    }
    public function delete_to_cart($rowId){
         Cart::update($rowId,0);
         return Redirect('/show_cart');
    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect('/show_cart');
    }
}
