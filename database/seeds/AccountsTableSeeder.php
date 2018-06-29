<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = ['Fluid Studios', 'Tutch Media', 'Asset TV', 'Techone'];

        for($i = 0; $i < 4; $i++) {
            App\Account::create([
                'name' => $accounts[$i],
            ]);
        }
    }
}
