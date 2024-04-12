<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Lê Hồng Minh', 'email' => 'minhlh@gmail.com'],
            ['name' => 'Phạm Thu Hà', 'email' => 'hapt@gmail.com'],
            ['name' => 'Nguyễn Thị Hương', 'email' => 'huongnt@gmail.com'],
            ['name' => 'Trần Văn Hùng', 'email' => 'hungtv@gmail.com'],
            ['name' => 'Nguyễn Văn Hùng', 'email' => 'hungnv@gmail.com']
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
