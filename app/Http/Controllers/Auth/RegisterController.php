<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/brew';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {  
       $account = $this->add_registered_user_account($data);

       $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->accounts()->attach($account);

        return $user;
    }

    /**
     * Create a new account if it doesnt exist in the table
     * 
     */
    public function add_registered_user_account($data) {

        // Check for group before creating one
        $account = Account::where('name', $data['group'])->first()->id;

        if(!$account) {
            $a = new Account;
            $a->name = $data['group'];
            $a->created_at = date("Y-m-d H:i:s");
            $a->updated_at = date("Y-m-d H:i:s");
            $a->save();
            $account = $a->id;
        }

        return $account;
    }
}
