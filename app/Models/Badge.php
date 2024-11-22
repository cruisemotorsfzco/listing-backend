<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Badge extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('created_at', function ($builder) {
            $builder->orderBy('created_at', 'asc');
        });

        static::creating(function ($badge) {
            $badge->code = generateCode('badge');
            $badge->slug = Str::slug($badge->name . '-' . strtotime(now())). '-' . rand(1000, 99999);
        });
    }
}
