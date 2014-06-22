<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user = array(
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'user@domain.com',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()')
        );

        DB::table('users')->insert($user);
    }
}