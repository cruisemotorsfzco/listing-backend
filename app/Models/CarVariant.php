<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class CarVariant extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $with = ['carModel'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('created_at', function ($builder) {
            $builder->orderBy('created_at', 'asc');
        });

        static::creating(function ($carVariant) {
            $carVariant->slug = Str::slug($carVariant->name . '-' . strtotime(now())). '-' . rand(1000, 99999);
            $carVariant->code = generateCode('car-variant');
        });
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class)->with('carMake');
    }
}
