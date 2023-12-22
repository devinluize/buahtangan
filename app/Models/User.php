<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey  = 'user_id';
    protected $fillable=
    ['email',
    'username'
    ,'password','phonenumber'];
    //ini kalau salah berarti ganti user_id
    public function Sub(): HasMany{
        return $this->hasMany(Sub::class,'subs_id');
    }
}
