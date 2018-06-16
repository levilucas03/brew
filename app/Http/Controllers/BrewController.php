<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\User;
use App\Brew;
use Auth;

class BrewController extends Controller
{

    public $user;

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        // Get amount brewed since registered
        $amount_brewed = User::amount_brewed_by_date();
        // Get user accounts
        $accounts = Auth::user()->accounts;
        // Get first account added to load the users for that account
        $account_users =  $accounts->first()->users;

        return view('dashboard.index', [
            'users' => $account_users,
            'accounts' => $accounts,
            'amount_brewed' => $amount_brewed
        ]);
    }

    function brewed_user()
    {
        $last_user = Brew::orderBy('created_at', 'DESC')->first();
        $user = User::inRandomOrder()->where('id', '!=', $last_user->user_id)->first();
        
        $brew = new Brew;
        $brew->user_id = $user->id;
        $brew->save();

        return ['brew' => $user, 'by' => Auth::user()];
    }
}
