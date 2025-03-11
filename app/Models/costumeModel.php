<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class costumeModel extends Model
{
    use HasFactory;

    protected $table = 'kostums';
    protected $primaryKey = 'kostum_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'kostum_name',
        'kostum_description',
        'kostum_image',
        'kostum_price',
        'jenis_kostum_id',
    ];

    public function typeCostume()
    {
        return $this->belongsTo(typeCostumeModel::class, 'jenis_kostum_id', 'jenis_kostum_id');
    }
}
