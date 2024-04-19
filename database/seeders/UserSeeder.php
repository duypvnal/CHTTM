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

        $userInfors = [
            [
                'user_id' => 1,
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg',
                'address' => 'Thanh Xuân, Hà Nội',
                'gender' => true,
            ],
            [
                'user_id' => 2,
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg',
                'address' => 'Đống Đa, Hà Nội',
                'gender' => null
            ],
            [
                'user_id' => 3,
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg',
                'address' => 'Ba Đình, Hà Nội',
                'gender' => false,
            ],
            [
                'user_id' => 4,
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg',
                'address' => 'Long Biên, Hà Nội',
                'gender' => true,
            ],
            [
                'user_id' => 5,
                'image' => 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg',
                'address' => 'Hoàng Mai, Hà Nội',
                'gender' => null
            ],
        ];

        foreach ($userInfors as $data) {
            \App\Models\UserInfor::create($data);
        }

        $userRequirements = [
            [
                'user_id' => 1,
                'gender' => true,
                'experience' => 1,
                'salary_expect' => 10000000,
                'skill_ids' => [1, 2, 3, 4, 5, 6],
                'job_position_ids' => [1, 3, 4],
                'category_ids' => [1, 2, 3]
            ],
            [
                'user_id' => 2,
                'gender' => false,
                'experience' => 2,
                'salary_expect' => 10000000,
                'skill_ids' => [1, 2, 3],
                'job_position_ids' => [1, 2, 3],
                'category_ids' => [1, 2, 3]
            ],
            [
                'user_id' => 3,
                'gender' => false,
                'experience' => 5,
                'salary_expect' => 10000000,
                'skill_ids' => [1, 2, 3],
                'job_position_ids' => [1, 2, 3],
                'category_ids' => [1, 2, 3]
            ],
            [
                'user_id' => 4,
                'gender' => null,
                'experience' => 4,
                'salary_expect' => 10000000,
                'skill_ids' => [1, 2, 3],
                'job_position_ids' => [1, 2, 3],
                'category_ids' => [1, 2, 3]
            ],
            [
                'user_id' => 5,
                'gender' => null,
                'experience' => 3,
                'salary_expect' => 8000000,
                'skill_ids' => [1, 2, 3],
                'job_position_ids' => [1, 2, 3],
                'category_ids' => [1, 2, 3, 16]
            ],
        ];

        foreach ($userRequirements as $userRequirement) {
            \App\Models\UserRequirement::create([
                'user_id' => $userRequirement['user_id'],
                'gender' => $userRequirement['gender'],
                'experience' => $userRequirement['experience'],
                'salary_expect' => $userRequirement['salary_expect'],
                'skill_ids' => json_encode($userRequirement['skill_ids']),
                'job_position_ids' => json_encode($userRequirement['job_position_ids']),
                'category_ids' => json_encode($userRequirement['category_ids']),
            ]);
        }
    }
}
