<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class carFacilities extends Model
{
    use HasFactory;
    protected $table = 'car_facilities';
    protected $primaryKey = 'car_facilities_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'alat_id',
        'facilities_id',
        'created_at',
        'updated_at'
    ];

    public function alatRental()
    {
        return
        $this->belongsTo(alatRental::class, 'alat_id', 'alat_id');
    }

    public function facilities()
    {
        return
        $this->belongsTo(facilities::class, 'facilities_id', 'facilities_id');
    }
}
