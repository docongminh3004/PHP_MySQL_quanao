<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'products';


    protected $fillable = ['prd_name','image','description'];

    // nếu muốn JOIN `1 sản phẩm cho 1 danh mục thì phỉ dùng câu lệnh ở dưới
    // JOIN 1 - 1
    public function category()
    {
        return $this->hasMany(category::class,'id','category_id');
    }
    // thêm localScope
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('prd_name','like','%'.$key.'%');
        }
    
        return $query;
    }
    
    //globalScop
    
    }


