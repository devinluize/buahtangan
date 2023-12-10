<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $primaryKey='course_id';
    protected $fillable = [
        'course_name',
        'course_detail',
    ];
    public function Sub(): HasMany{
        return $this->hasMany(Sub::class, 'subs_id');
    }
}
