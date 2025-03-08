<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    // protected $keyType = 'int';

    // TAMBHAN KARENA USER MEMILKI RELASI DI BANYAK TEMPAT
    public function transactions()
    {
        return
        $this->hasMany(transactions::class, 'user_id', 'user_id');
    }

    public function reviews()
    {
        return
        $this->hasMany(reviews::class, 'user_id', 'user_id');
    }

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
