<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Relations\relation;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'shop_id'
    ];

    public function shop() : Relation {
        return $this->belongsTo(Shop::class);
    }
}
