<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        for ($i = 1)

        $user = new User();
        $user->email = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->save();
    }
}