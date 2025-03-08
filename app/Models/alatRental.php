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
    // protected $keyType = 'int';
    public $timestamps = true;

    public function transactions()
    {
        return
        $this->hasMany(transactions::class, 'alat_id', 'alat_id');
    }

    public function reviews()
    {
        return
        $this->hasMany(reviews::class, 'alat_id', 'alat_id');
    }
    
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
