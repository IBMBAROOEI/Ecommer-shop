<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function products(){

            return $this->hasMany(Product::class);
        }
    public function sub_categore(){
        return $this->hasMany(Sub_Category::class);
    }

}
