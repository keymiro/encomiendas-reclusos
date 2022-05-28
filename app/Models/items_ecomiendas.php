<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items_ecomiendas extends Model
{
    protected $fillable = [
        'id',
        'ecomiendas_id',
        'item',
        'count',
        'Description',
        'state',
        'user_create_id',
        'user_edit_id',
        'user_entrega_id',
        'user_devolucion_id'
    ];
}
