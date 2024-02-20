<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;
use App\Models\reserve;
use Illuminate\Database\Eloquent\Relations\relation;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_name',
        'area',
        'kind',
        'introduction',
        'shop_image'
    ];

    public function scopeShopNameKeywordSearch($query, $keyword)
{
  if (!empty($keyword)) {
    $query->where('shop_name', 'like', '%' . $keyword . '%');
  }
}
 public function scopeAreaKeywordSearch($query, $keyword)
{
  if (!empty($keyword)) {
    $query->where('area', 'like', '%' . $keyword . '%');
  }
}
 public function scopeKindKeywordSearch($query, $keyword)
{
  if (!empty($keyword)) {
    $query->where('kind', 'like', '%' . $keyword . '%');
  }
}

public function favorite() : Relation {
        return $this->hasMany(Favorite::class);
    }

    public function reserve() : Relation {
        return $this->hasMany(Reserve::class);
    }
}
