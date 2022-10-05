<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function order_m(){
        return $this->hasMany(Orders_M::class);
    }

    public function clients(){
        return $this->hasOne(Client::class);
    }

    use HasFactory;
}
