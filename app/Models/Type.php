<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $primaryKey = 'plant_type_id';
    public function Plant(): HasMany{
        return $this->hasMany(Plant::class, 'id');
    }
}
