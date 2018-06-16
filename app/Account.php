<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public static function save_account($data)
    {
        // name being used for the user name need this to group the group 
        $data['name'] = $data['group'];
        // Save the group in account
        Account::create($data);
    }
}
