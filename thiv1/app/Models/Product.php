<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $fillable = ['name','quantity','price','cate_id','link_sp','description','status'];
    public $timestamp = false;
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
}
