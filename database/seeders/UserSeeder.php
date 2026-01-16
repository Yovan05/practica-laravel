<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Victor Rocha';
        $user->email = 'victor@gmail.com';
        $user->password = bcrypt('12345');

        $user->save();

        $user = new User();

        $user->name = 'Yovan Rodriguez';
        $user->email = 'yovan@gmail.com';
        $user->password = bcrypt('12345');

        $user->save();
    }
}
