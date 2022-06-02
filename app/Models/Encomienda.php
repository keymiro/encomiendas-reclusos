<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cod',
        'type_document_send',
        'document_send',
        'names_send',
        'email_send',
        'accepted_objects',
        'declined_objects',
        'declined_observations',
        'url_img',
        'recluse_id',
        'user_created_id',
        'created_at',
        'updated_at'
    ];

    public function user_created(){
        return $this->belongsTo(User::class,'user_created_id');
    }
    public function recluse(){
        return $this->belongsTo(Recluse::class,'recluse_id');
    }

    protected $casts = [
        'created_at' => 'date:d-m-Y'
    ];
}
