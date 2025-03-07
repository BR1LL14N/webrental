<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'user_id');
    }

    public function alat()
    {
        return $this->belongsTo(alatRental::class, 'alat_id', 'alat_id');
    }

    protected $fillable = [
        'user_id',
        'alat_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'created_at',
        'updated_at'
    ];
}
