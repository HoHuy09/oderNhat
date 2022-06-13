<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    public $fillable = ['product_id','quantity','price','user_id'];
    public $timestamp = false;
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
