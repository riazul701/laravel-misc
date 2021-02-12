<?php

namespace App;

//use Cog\Ban\Contracts\HasBans as HasBansContract;
//use Cog\Ban\Traits\HasBans;

use Cog\Contracts\Ban\Bannable as BannableContract;
use Cog\Laravel\Ban\Traits\Bannable;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


//class User extends Authenticatable implements HasBansContract
class User extends Authenticatable implements BannableContract
{
    use Notifiable;
//    use HasBans;
    use Bannable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
