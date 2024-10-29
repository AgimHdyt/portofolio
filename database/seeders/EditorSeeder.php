<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'fullname' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('editor'),
        ];

        User::create($user);
    }
}