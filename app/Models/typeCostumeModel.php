<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class typeCostumeModel extends Model
{
    use HasFactory;

    protected $table = 'jenis_kostum';
    protected $primaryKey = 'jenis_kostum_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'jenis_kostum_name',
    ];

    public function costumes()
    {
        return $this->hasMany(costumeModel::class, 'jenis_kostum_id', 'jenis_kostum_id');
    }
}
