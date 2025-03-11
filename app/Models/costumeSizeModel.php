<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class costumeSizeModel extends Model
{
    use HasFactory;

    protected $table = 'kostum_size';
    protected $primaryKey = 'kostum_size_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'size_name',
        'stock',
        'is_available',
        'kostum_id',
    ];
}
