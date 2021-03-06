<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public  function order(){
        return $this->belongsTo(Order::class);
    }
    public  function user(){
        return $this->hasOne(User::class);
    }
    protected $fillable=['order_id', 'transaction_id', 'amount','user_id','status'];

}
