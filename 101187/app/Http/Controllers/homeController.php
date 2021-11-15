<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use App\Models\products;
use Illuminate\Http\Request;
use DB;

class homeController extends Controller
{
    public function index(){
        
        $product= sanpham::orderBy('id','DESC')->paginate(8);
        return view("customer.trangchu",compact('product'));
    	//return view("welcome");
    }

    public function xemsanpham()
    {
        $product= sanpham::orderBy('id','DESC')->paginate(15);
        return view("customer.products",compact('product'));
    }

   // public function chitietsanpham()
    //{
        //product= sanpham::orderBy('id','DESC')->paginate(15);
        //return view("customer.chitietsanpham",compact('product'));
    //}
    public function xemchitiet(Request $request)
    {
       $xem =sanpham::where('id',$request->id)->first();
       return view("customer.chitietsanpham",compact('xem'));
       

    }
    public function giohang(Request $request)
    {
       $giohang =sanpham::where('id',$request->id)->first();
       return view("customer.checkout",compact('giohang'));
       

    }
    public function search(Request $request){

        $keywords = $request->keywords_submit;
        $search_product = DB::table('products')->where('prd_name','like','%'.$keywords.'%')->get();
        return view("customer.search")->with('search_product',$search_product);

    }

    
    public function lienhe(Request $request)
    {
       $xem =sanpham::where('id',$request->id)->first();
       return view("customer.contact",compact('xem'));
       

    }

    public function tintuc()
    {
        //$baidang = baidang::skip(3)->take(3)->get(); //skip để lấy bản ghi từ vị trí số mấy, take đẻ lấy số bản ghi
        $tintuc= sanpham::get();
       
        return view("customer.tintuc",compact('tintuc'));
    }
    
}
