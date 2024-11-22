<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $with = ['logo'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('created_at', function ($builder) {
            $builder->orderBy('created_at', 'asc');
        });

        static::creating(function ($query) {
            $query->code = generateCode('payment-method');
        });
    }

    public function logo()
    {
        return $this->belongsTo(Upload::class, 'logo');
    }
}
