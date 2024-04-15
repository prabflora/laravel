<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="products";
    public $products;
    protected $primaryKey = 'p_id';
    protected $fillable=['c_id', 'p_name','p_slug','p_image','p_desc','p_price','p_sort_order','is_active','p_desc','c_created'];


    public function category_name()
    {
        return $this->belongsTo(Category::class, 'c_id', 'id');
    }
}

