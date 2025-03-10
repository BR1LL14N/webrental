<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class facilities extends Model
{
    use HasFactory;
    protected $table = 'facilities';
    protected $primaryKey = 'facilities_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'name',
        'icon',
        'created_at',
        'updated_at'
    ];

    public function carFacilities()
    {
        return
        $this->hasMany(carFacilities::class, 'facilities_id');
    } 
}
