<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sami17151002@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Adnan Sami";
            $user->email = "sami17151002@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}