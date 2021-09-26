<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','mark_id','brcode','cost','price','color','stock','alerts','image','category_id','waist_id'];

    public function waist(){
        return $this->belongsTo(Waist::class);
    }

    public function mark(){
        return $this->belongsTo(Mark::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function cart(){
        return $this->hasMany(CartProduct::class);
    }

}
