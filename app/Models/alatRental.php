<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class alatRental extends Model
{
    use HasFactory;

    protected $table = 'alat_rental';
    protected $primaryKey = 'alat_id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'jenis',
        'icon',
        'deskripsi',
        'jumlah_unit',
        'harga_sewa',
        'status',
        'created_at',
        'updated_at'
    ];
}
