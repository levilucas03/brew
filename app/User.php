<?php

namespace App;
use Auth;
use App\Brew;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public static function amount_brewed_by_date($user = null, $date = null)
    {
        if(!$user){
            $user = Auth::user();
        }
        $user = Brew::where('user_id', $user->id);

        if($date){
            // $user
        }

        return $user->count();
    }

    public function accounts()
    {
        return $this->belongsToMany('App\Account', 'user_accounts')->withTimestamps();
    }
}
