<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recluse extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'coderecluse',
        'namereculse',
        'surnamereculse',
        'idpavilions',
        'jailcells',
        'state',
        'idusercreate',
        'iduseredit',
    ];

}
