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

    public function reviews()
    {
        return $this->morphMany(Review::class, 'source');
    }
    public function auctionItems()
    {
        return $this->morphMany(AuctionItem::class, 'auctionable_item');
    }
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoble');
    }
}
