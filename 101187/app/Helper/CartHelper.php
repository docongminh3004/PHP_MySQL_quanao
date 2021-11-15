<?php
namespace App\Helper;
use Session;
/**
 * summary
 */
class CartHelper
{
    /**
    * summary
    */

    public $items = [];
    public $total_quantily = 0;
    public $total_price = 0;

    public function __construct()
    {
        $this->item = session('cart') ? session('cart') : [];
        $this->total_price = $this->get_total_price();
        $this->total_quantily = $this->get_total_quantily();
    }


    public function add($product, $quantily = 1){
        $item = [
             'id' => $product->id,
             'prd_name' => $product->prd_name,
             'price' => $product->sale_price ,
             'image' => $product->image,
             'quantily' => $quantily,
            // dd($product)
        ];

        if (isset($this->items[$product->id])){
            $this->items[$product->id]['quantily'] += $quantily;

        }else{
            $this->items[$product->id] = $item;
        }
        
        session(['cart' => $this->items]);

    }


    public function remove($id){
        if (isset($this->items[$id])) {
            unset($this->items[$product->id]);

        }
        session(['cart' => $this->items]);
    }


    public function update($id,$quantily = 1){
        if (isset($this->items[$id])){
            $this->items[$product->id]['quantily'] = $quantily;

        }
        session(['cart' => $this->items]);

    }

    public function clear(){
        session(['cart' => '']);
    }


    private function get_total_price(){
        $t = 0;
        foreach ($this->items as $item) {
            $t += $item['price']*$item['quantily'];

        }
        return $t;
    }

  
    private function get_total_quantily(){
        $t = 0;
        foreach ($this->items as $item) {
            $t +=$item['quantily'];

        }
        return $t;
    }
}



?>