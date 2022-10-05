<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    public function gender(){
        return $this->hasOne(Gender::class);
    }

    public function classification(){
        return $this->hasOne(Classification::class);
    }

    public function region(){
        return $this->hasOne(Region::class);
    }

    public function console(){
        return $this->hasOne(Console::class);
    }

    use HasFactory;
}
