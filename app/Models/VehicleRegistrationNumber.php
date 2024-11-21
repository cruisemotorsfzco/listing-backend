<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleRegistrationNumber extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function auctionItems()
    {
        return $this->morphMany(AuctionItem::class, 'auctionable_item');
    }
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoble');
    }
}
