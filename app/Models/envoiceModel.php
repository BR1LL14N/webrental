<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class envoiceModel extends Model
{
    use HasFactory;
    protected $table = 'envoice';
    protected $primaryKey = 'envoice_id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'rental_id',
        'payment_method_id',
        'envoice_number',
        'total_price',
    ];

    public function rentals()
    {
        return $this->belongsTo(rentalsModel::class, 'rental_id', 'rental_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(paymentMethod::class, 'payment_method_id', 'payment_method_id');
    }
}
