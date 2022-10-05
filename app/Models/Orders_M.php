<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_M extends Model
{
    public function videgames(){
        return $this->hasOne(Videogame::class);
    }

    public function orders(){
        return $this->hasMany(Orders::class);
    }
    
    use HasFactory;
}
