<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class paymentMethod extends Model
{
    use HasFactory;
    protected $table = 'payment_method';
    protected $primaryKey = 'payment_method_id';
    public $incrementing = true;
    // protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'payment_method_id',
        'payment_method_name',
        'payment_method_icon',
        'created_at',
        'updated_at'
    ];
}
