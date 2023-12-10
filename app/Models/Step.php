<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $table='steps';
    protected $primaryKey='id';
    protected $fillable = [
        'title',
        'step_desc',
        'step_desc_first',
        'step_desc_second'
    ];
    use HasFactory;
}
