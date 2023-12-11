<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table='albums';
    protected $primaryKey='album_id';
    protected $fillable = [
        'user_id',
        'plant_id',
        'album_name',
        'path',
        'album_desc'
    ];
    use HasFactory;
}
