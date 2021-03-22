<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr__Product extends Model
{
    use HasFactory;

    protected $fillable=['product_id','color','size','stock','price','sku'];

//    protected $casts =[
//        'color'=> 'array',
//        'size'=> 'array',
//        'stock'=> 'array',
//        'price'=> 'array',
//    ];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Order_Dtail(){
        return $this->belongsTo(Order_Dtail::class);
    }
}
