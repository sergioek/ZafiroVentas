<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestomer extends Model
{
    use HasFactory;
    protected $fillable=['name','lastname','dni','telephone','email'];

    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
