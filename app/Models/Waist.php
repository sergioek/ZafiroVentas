<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waist extends Model
{
    use HasFactory;
    protected $fillable=['waist'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
