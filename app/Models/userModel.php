<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    public $timestamps = true;
    

    // MASS ASSIGNMENT
    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',
        'user_phone',
        'user_address',
        'user_role',
        'icon',
    ];

    public function reviews()
    {
        return $this->hasMany(reviewsModel::class, 'user_id', 'user_id');
    }

    public function rentals()
    {
        return $this->hasMany(rentalsModel::class, 'user_id', 'user_id');
    }

    public function payments()
    {
        return $this->hasMany(paymentMethod::class, 'user_id', 'user_id');
    }
}
