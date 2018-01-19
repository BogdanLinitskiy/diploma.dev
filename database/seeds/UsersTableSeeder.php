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
        DB::table('users')->insert([
            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => '123',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Client1',
                'email' => 'client1@gmail.com',
                'password' => '123',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
