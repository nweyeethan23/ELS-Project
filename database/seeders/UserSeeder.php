<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('users')->truncate();
        // admin user
        $user = User::create([
            'id'            => 1,
            'name'          => 'admin user',
            'email'         => 'admin@gmail.com',
            'role'          => 'admin',
            'password'      => bcrypt('password'),
            'gender'          => 1,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
        // frontend user
        $user = User::create([
            'id'            => 2,
            'name'          => 'frontend user',
            'email'         => 'frontend@gmail.com',
            'role'          => 'user',
            'password'      => bcrypt('password'),
            'gender'          => 2,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }
}
