<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rentalsModel extends Model
{
    use HasFactory;

    protected $table = 'rentals';
    protected $primaryKey = 'rental_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'kostum_id',
        'kostum_size_id',
        'rental_date',
        'return_date',
        'total_price',
        'status',
        'penalty',
        'payment_method_id',
    ];


    public function user()
    {
        return $this->belongsTo(userModel::class, 'user_id', 'user_id');
    }

    public function costume()
    {
        return $this->belongsTo(costumeModel::class, 'kostum_id', 'kostum_id');
    }

    public function costumeSize()
    {
        return $this->belongsTo(costumeSizeModel::class, 'kostum_size_id', 'kostum_size_id');
    }
}
