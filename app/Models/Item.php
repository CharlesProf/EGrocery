<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'price',
        'item_desc',
        'display_picture_link'
    ];
    public function order(){
        return $this->hasMany(Order::class);
    }
}
