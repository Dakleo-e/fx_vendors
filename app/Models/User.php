<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements Wallet
{
    use HasApiTokens, HasFactory, Notifiable, HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usertype(){
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    // public function business(){
    //     return $this->hasOne(BusinessInfo::class);
    // }

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    public function agent()
    {
        return $this->hasOne(Agent::class);
    }

}
