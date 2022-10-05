<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function orders(){
        return $this->hasMany(Orders::class); 
    }

    public function users(){
        return $this->hasOne(User::class);
    }

    use HasFactory;
}
