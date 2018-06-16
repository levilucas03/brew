<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        App\User::create([
                
            'name' => 'Levi Lucas',
            'email' => 'levi.lucas@asset.tv',
            'password' => Hash::make('password123')
        ]);


        for($i = 0; $i < 10; $i++) {
            App\User::create([
                
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password123')
            ]);
        }

    }
}
