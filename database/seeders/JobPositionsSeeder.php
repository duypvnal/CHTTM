<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Nhân viên'],
            ['name' => 'Nhân viên kinh doanh'],
            ['name' => 'Chuyên viên'],
            ['name' => 'Lập trình viên'],
            ['name' => 'Junior'],
            ['name' => 'Middle'],
            ['name' => 'Senior'],
            ['name' => 'Trưởng phòng'],
            ['name' => 'Thực tập sinh'],
            ['name' => 'Giám đốc'],
            ['name' => 'Phó giám đốc']
        ];

        foreach ($data as $item) {
            \App\Models\JobPosition::create($item);
        }
    }
}
