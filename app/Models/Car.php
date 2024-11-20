<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $with = ['carMake', 'carModel', 'carVariant', 'images', 'carBodyType', 'carCategory'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function priceDropNotifications()
    {
        return $this->hasMany(PriceDropNotification::class);
    }
}
