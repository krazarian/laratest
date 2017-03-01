<?php

use Illuminate\Database\Seeder;
use App\User;

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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer'),
            'role' => 'customer',
        ]);

        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
            ]);
        }
    }
}
