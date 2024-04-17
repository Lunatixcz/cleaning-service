<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'date',
        'time',
        'address',
        'city',
        'state',
        'postal_code',
        'recipient_name',
        'floor_size',
        'number_of_floors',
        'total_personnel_ordered',
        'estimated_price',
        'phone_number',
        'duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
