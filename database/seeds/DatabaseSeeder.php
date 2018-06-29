<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Add Users
        $this->call(UsersTableSeeder::class);
        // Add Accounts
        $this->call(AccountsTableSeeder::class);
        // Add users to accounts 
        $this->call(UserAccountsTableSeeder::class);
    }
}
