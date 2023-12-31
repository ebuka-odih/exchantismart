<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $admin = User::where('email', '=', 'user@bitconglitch.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'firstname' => 'User',
                'lastname' => 'Panel',
                'status' => 2,
                'username' =>'user',
                'admin' => 0,
                'balance' => 500000,
                'profit' => 600000,
                'currency' => "$",
                'email' => 'user@bitconglitch.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('ADMINPASS1234'),
            ]);
        }
    }

}
