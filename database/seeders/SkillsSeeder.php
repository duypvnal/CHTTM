<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
          ['name'=> 'Lập trình'],
          ['name'=> 'Ngoại ngữ'],
          ['name'=> 'Lái xe'],
          ['name'=> 'AWS'],
          ['name'=> 'Google cloud'],
          ['name'=> 'Vue'],
          ['name'=> 'React'],
          ['name'=> 'Angular'],
          ['name'=> 'Azure'],
          ['name'=> 'Redis'],
          ['name'=> 'K8S'],
          ['name'=> 'K8s'],
          ['name'=> 'PHP'],
          ['name'=> 'Giảng dạy'],
          ['name'=> 'Java'],
          ['name'=> 'Tiếng Anh'],
          ['name'=> 'Tiếng Trung'],
          ['name'=> 'Tiếng Nhật'],
          ['name'=> 'Quản trị hệ thống'],
          ['name'=> 'Tin học cơ bản'],
        ];

        foreach ($skills as $skill) {
            \App\Models\Skill::create($skill);
        }
    }
}
