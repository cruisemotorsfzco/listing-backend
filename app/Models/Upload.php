<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();


        static::creating(function ($query) {
            $query->user_id = auth()->id();
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}