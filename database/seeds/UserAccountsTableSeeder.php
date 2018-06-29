<?php

use Illuminate\Database\Seeder;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::where('id','>', 1)->get();

        $creator = App\User::find(1);
        
        $creator->accounts()->attach([1,2,3,4]);

        foreach($users as $user) {
            for ($i=0; $i < 2; $i++) { 

                $account = App\Account::inRandomOrder()->first();
                $user->accounts()->sync($account);
                
            }
        }
    }
}
