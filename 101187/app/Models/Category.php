<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $fillable = ['id','name','status','desc'];//them

    //JOIN 1 -n
    public function products()
    {
        return $this->hasMany(product::class,'category_id','id');
    }
    // thêm localScope
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }

        return $query;
    }

    //globalScop

}
