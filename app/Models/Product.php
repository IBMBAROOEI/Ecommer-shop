<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Product extends Model
{
    use HasFactory ;
    use SearchableTrait;
    protected $searchable = [
'columns' => [
'products.name_product' => 2,
    'products.id' => 3,
    'brands.brand_name'=>2
],
        'joins' => [
            'brands' => ['brands.id','products.brand_id'],
        ],
];



    protected $fillable=['name_product','code_product','discription_product',
        'price','stuck','slug','brand_id',
        'sub_ategories_id','categorie_id','image'
        ];
    public function Attr__Product(){
        return $this->hasMany(Attr__Product::class);
    }




    public  function Categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public  function Brand(){
        return $this->belongsTo(Brand::class);
    }
    public  function order_detals(){
        return $this->hsaMany(Order_Dtail::class);
    }

    public  function Picture(){
        return $this->hasMany(Picture::class);
    }
    public function user_products(){
        return $this->belongsToMany(Product::class,'user_product','user_id','product_id')->withTimestamps();
    }



}
