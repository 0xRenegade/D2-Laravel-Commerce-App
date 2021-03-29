<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "name",
        "type",
        "rarity",
        "max_sockets",
        "requirements",
        "durability",
        "stats",
        "set_bonuses",
        "quantity",
        "price",
        "image_url",
    ];
}
