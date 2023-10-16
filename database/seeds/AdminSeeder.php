<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *a
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => env('ADMIN_EMAIL'),
            'username' => env('ADMIN_USERNAME'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
