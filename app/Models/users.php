<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    protected $keyType = 'int';

    // MEMBERITAHUKAN FIELD/KOLOM YANG BOLEH DIISI
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'icon',
        'role',
        'created_at',
        'updated_at'
    ];
}
