<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sub extends Model
{
    protected $table='subs';
    protected $primaryKey='subs_id';
    protected $fillable = [
        'user_id',
        'course_id',
        'step'
    ];
    use HasFactory;
    public function User(): BelongsTo{
        return $this->BelongsTo(User::class, 'user_id');
    }
    public function Course(): BelongsTo{
        return $this->BelongsTo(Course::class, 'course_id');
    }
}
