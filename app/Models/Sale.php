<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable=['items','status','cash','debt','user_id','notes','cuestomer_id'];

    public function cuestomer(){
        return $this->belongsTo(Cuestomer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function saledetails(){
        return $this->hasMany(SaleDetails::class);
    }
}
