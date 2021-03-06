<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Dtail extends Model
{
    use HasFactory;
    public  function order(){
        return $this->belongsTo(Order::class);
    }
    protected $fillable=['quntity','order_id','name_product',
        'code_product','size','color','order_total',
    ];

}
