<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant extends Model
{
    protected $table='plants';
    protected $primaryKey='id';
    protected $fillable = [
        'path', // Add 'path' here if it's missing
        'user_id',
        'plant_name',
        'plant_desc',
        'plant_type_id',
        // Other attributes...
    ];
    use HasFactory;
    public function type(): BelongsTo{
        return $this->belongsTo(Type::class,'plant_type_id');
    }
}
