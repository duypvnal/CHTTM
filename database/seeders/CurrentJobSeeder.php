<?php

namespace Database\Seeders;

use App\Models\CurrentJob;
use Illuminate\Database\Seeder;

class CurrentJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentJobs = [
            [
                'name' => 'Lập Trình Viên PHP (Senior)',
                'company_id' => 17,
                'salary_from' => null,
                'salary_to' => 20000000,
                'experience' => 2,
                'gpa_from' => 2.5,
                'job_type' => 0
            ],
            [
                'name' => 'Giáo Viên Tin Học',
                'company_id' => 17,
                'salary_from' => 15000000,
                'salary_to' => 18000000,
                'experience' => 0.5,
                'gpa_from' => 2.5,
                'job_type' => 0
            ],
            [
                'name' => 'Giáo Viên Tiếng Anh (THCS & THPT)',
                'company_id' => 17,
                'salary_from' => null,
                'salary_to' => 15000000,
                'experience' => 1,
                'gpa_from' => 2.5,
                'job_type' => 1
            ],
            [
                'name' => 'Trợ Giảng Tiếng Anh (Giáo Viên Tiếng Anh Nguồn) - Khối Tiểu Học & Trung Học ',
                'company_id' => 17,
                'salary_from' => null,
                'salary_to' => 10000000,
                'experience' => 0,
                'gpa_from' => 3,
                'job_type' => 1
            ],
            [
                'name' => 'Middle/Senior PHP Developer (Upto 30M)',
                'company_id' => 1,
                'salary_from' => 15000000,
                'salary_to' => 20000000,
                'experience' => 2,
                'gpa_from' => 3,
                'job_type' => 1
            ],
            [
                'name' => 'Trưởng Nhóm Lập Trình Viên PHP',
                'company_id' => 2,
                'salary_from' => 10000000,
                'salary_to' => 15000000,
                'experience' => 2,
                'gpa_from' => 3,
                'job_type' => 2
            ],
            [
                'name' => 'Content Marketing',
                'company_id' => 2,
                'salary_from' => 10000000,
                'salary_to' => 20000000,
                'experience' => 0,
                'gpa_from' => 2,
                'job_type' => 2
            ],
            [
                'name' => 'Chuyên Viên Lập Trình PHP',
                'company_id' => 2,
                'salary_from' => 10000000,
                'salary_to' => 20000000,
                'experience' => 3,
                'gpa_from' => 2,
                'job_type' => 3
            ],
            [
                'name' => 'Chuyên Viên Designer (UI-UX)',
                'company_id' => 2,
                'salary_from' => 10000000,
                'salary_to' => 20000000,
                'experience' => 1,
                'gpa_from' => 2.8,
                'job_type' => 2
            ],
            [
                'name' => 'Technical Leader (PHP)',
                'company_id' => 2,
                'salary_from' => 40000000,
                'salary_to' => 50000000,
                'experience' => 3,
                'gpa_from' => 3.2,
                'job_type' => 1
            ],
            [
                'name' => 'Chuyên Viên Kinh Doanh Khách Hàng Doanh Nghiệp',
                'company_id' => 2,
                'salary_from' => 40000000,
                'salary_to' => 50000000,
                'experience' => 3,
                'gpa_from' => 3.2,
                'job_type' => 1
            ],
        ];

        foreach ($currentJobs as $currentJob) {
            CurrentJob::create($currentJob);
        }
    }
}
