<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'super_admin';
        $user->email = 'dev.test.123.lab@gmail.com';
        $user->phone = 548765;
        $user->password = Hash::make('Admin!123456');
        $user->birth = date('2000-01-01');
        $user->city_id = 1;
        $user->rol_id = 1;
        $user->save();
    }
}
