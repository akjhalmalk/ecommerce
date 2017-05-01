<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
