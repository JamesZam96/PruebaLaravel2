<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function dishes(){
        return $this->hasMany(Dish::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }
}
