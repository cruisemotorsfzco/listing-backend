<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuctionItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    public function winner()
    {
        return $this->belongsTo(User::class, 'winner_id')->withTrashed();
    }

    // Define the polymorphic relationship
    public function auctionableItem()
    {
        return $this->morphTo('auctionable_item');
    }
}
