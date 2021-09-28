<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;
    protected $fillable=['date','status','amount','notes','user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
