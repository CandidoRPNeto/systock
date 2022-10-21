<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoItem extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function item(): HasMany
    {
        return $this->hasMany(Item::class, 'id', 'item_id');
    }
}
