<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reviewsModel extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primaryKey = 'review_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'kostum_id',
        'review',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(userModel::class, 'user_id', 'user_id');
    }

    public function costume()
    {
        return $this->belongsTo(costumeModel::class, 'kostum_id', 'kostum_id');
    }
}
