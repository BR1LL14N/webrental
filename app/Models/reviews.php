<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    // MEMBUAT RELASI/RELATIONSHIP ANTARA TABEL reviews DAN users
    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'user_id');
    }

    // MEMBUAT RELASI/RELATIONSHIP ANTARA TABEL reviews DAN alatRental
    public function alat()
    {
        return $this->belongsTo(alatRental::class, 'alat_id', 'alat_id');
    }

    protected $fillable = [
        'user_id',
        'alat_id',
        'review',
        'rating',
        'created_at',
        'updated_at'
    ];
}
