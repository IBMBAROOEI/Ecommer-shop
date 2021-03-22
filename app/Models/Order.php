<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Order extends Model
{
    use HasFactory;
    public  function Order_Dtail(){
        return $this->hasMany(Order_Dtail::class);
    }
    public  function userorder(){
        return $this->hasMany(User::class,'users_id');
    }
    protected $fillable=['users _id','status','order_total'];

    public  function transaction(){
        return $this->hasOne(Transaction::class);
    }
}
