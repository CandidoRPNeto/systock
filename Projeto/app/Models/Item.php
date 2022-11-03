<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['nome','fabricante','fornecedor','grupo_item_id','ativo','quantidade','preco'];

    public function grupoItem(): BelongsTo
    {
        return $this->belongsTo(GrupoItem::class, 'id', 'grupo_item_id');
    }
}
