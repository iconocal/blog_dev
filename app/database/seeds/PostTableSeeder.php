<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        $user = new User();
        $user->email = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->save();
    }
}