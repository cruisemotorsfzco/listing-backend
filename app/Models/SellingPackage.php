<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellingPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Cast features to an array.
     */
    protected $casts = [
        'features' => 'array',
    ];
}
