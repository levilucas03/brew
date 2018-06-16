<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\User;
use App\Brew;
use Auth;

class BrewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return User::amount_brewed_by_date();
        return view('brew');
    }

    function getUser()
    {
        $last_user = Brew::orderBy('created_at', 'DESC')->first();
        $user = User::inRandomOrder()->where('id', '!=', $last_user->user_id)->first();
        
        $brew = new Brew;
        $brew->user_id = $user->id;
        $brew->save();

        return ['brew' => $user, 'by' => Auth::user()];
    }
}
