<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Auction;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'birthday', 'address',
        'phone', 'gender', 'photo_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function auctions()
    {
        return $this->hasMany(Auction::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
