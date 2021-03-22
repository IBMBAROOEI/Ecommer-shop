<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public function City(){
        return $this->belongsTo(City::class);
    }
    public function Province(){
        return $this->belongsTo(Province::class);
    }
    protected $fillable=['users_id','cities_id','address1','address2','province_id','phone'];
}
