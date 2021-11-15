<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'blog_content',
        'blog_image',
        'blog_image_list',
        'blog_desc',
        'blog_status'
    ];

    //Thêm local Scope
    public function scopeSearch($query)
    {
        if($key=request()->key){
            $query=$query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}