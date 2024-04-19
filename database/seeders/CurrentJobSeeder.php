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
                'due_date' => '2024-05-31',
                'salary_form' => null,
                'salary_to' => 35000000,
                'quantity' => 2,
                'level' => 1,
                'experience' => 5,
                'gender' => null,
                'job_position_ids' => [1, 7, 4, 3],
                'skill_ids' => [1, 19],
                'job_type' => 0
            ],
            [
                'name' => 'Giáo Viên Tin Học',
                'company_id' => 17,
                'due_date' => '2024-04-30',
                'salary_form' => null,
                'salary_to' => null,
                'quantity' => 10,
                'level' => 1,
                'experience' => 1,
                'gender' => null,
                'job_position_ids' => [],
                'skill_ids' => [],
                'job_type' => 0
            ],
            [
                'name' => 'Giáo Viên Tiếng Anh (THCS & THPT)',
                'company_id' => 17,
                'due_date' => '2024-04-15',
                'salary_form' => null,
                'salary_to' => null,
                'quantity' => 20,
                'level' => 1,
                'experience' => 1,
                'gender' => false,
                'job_position_ids' => [],
                'skill_ids' => [],
                'job_type' => 0
            ],
            [
                'name' => 'Trợ Giảng Tiếng Anh (Giáo Viên Tiếng Anh Nguồn) - Khối Tiểu Học & Trung Học ',
                'company_id' => 17,
                'due_date' => '2024-04-15',
                'salary_form' => null,
                'salary_to' => 10000000,
                'quantity' => 12,
                'level' => 1,
                'experience' => 1,
                'gender' => false,
                'job_position_ids' => [],
                'skill_ids' => [2, 16, 14],
                'job_type' => 1
            ],
            [
                'name' => 'Middle/Senior PHP Developer (Upto 30M)',
                'company_id' => 1,
                'due_date' => '2024-05-31',
                'salary_form' => 20000000,
                'salary_to' => 30000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 4,
                'gender' => null,
                'job_position_ids' => [1, 7, 4, 3],
                'skill_ids' => [1, 19, 12, 13],
                'job_type' => 3
            ],
            [
                'name' => 'Trưởng Nhóm Lập Trình Viên PHP',
                'company_id' => 2,
                'due_date' => '2024-05-31',
                'salary_form' => 25000000,
                'salary_to' => 35000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 4,
                'gender' => null,
                'job_position_ids' => [1, 7, 4, 3],
                'skill_ids' => [1, 19, 12, 13],
                'job_type' => 0
            ],
            [
                'name' => 'Content Marketing',
                'company_id' => 2,
                'due_date' => '2024-05-31',
                'salary_form' => 10000000,
                'salary_to' => 20000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 1,
                'gender' => false,
                'job_position_ids' => [1],
                'skill_ids' => [2, 16, 20],
                'job_type' => 0
            ],
            [
                'name' => 'Chuyên Viên Lập Trình PHP',
                'company_id' => 2,
                'due_date' => '2024-05-31',
                'salary_form' => 18000000,
                'salary_to' => 25000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 2,
                'gender' => null,
                'job_position_ids' => [3, 4],
                'skill_ids' => [2, 16, 20],
                'job_type' => 3
            ],
            [
                'name' => 'Chuyên Viên Designer (UI-UX)',
                'company_id' => 2,
                'due_date' => '2024-02-20',
                'salary_form' => 10000000,
                'salary_to' => 20000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 2,
                'gender' => null,
                'job_position_ids' => [3],
                'skill_ids' => [2, 16, 20],
                'job_type' => 4
            ],
            [
                'name' => 'Technical Leader (PHP)',
                'company_id' => 2,
                'due_date' => '2024-05-31',
                'salary_form' => 40000000,
                'salary_to' => 50000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 2,
                'gender' => null,
                'job_position_ids' => [8],
                'skill_ids' => [2, 16, 20, 9, 12, 4],
                'job_type' => 3
            ],
            [
                'name' => 'Chuyên Viên Kinh Doanh Khách Hàng Doanh Nghiệp',
                'company_id' => 2,
                'due_date' => '2024-05-31',
                'salary_form' => 40000000,
                'salary_to' => 50000000,
                'quantity' => 3,
                'level' => 1,
                'experience' => 2,
                'gender' => null,
                'job_position_ids' => [2],
                'skill_ids' => [],
                'job_type' => 3
            ],
        ];

        foreach ($currentJobs as $currentJob) {
            CurrentJob::create([
                'name' => $currentJob['name'],
                'company_id' => $currentJob['company_id'],
                'due_date' => $currentJob['due_date'],
                'salary_form' => $currentJob['salary_form'],
                'salary_to' => $currentJob['salary_to'],
                'quantity' => $currentJob['quantity'],
                'level' => $currentJob['level'],
                'experience' => $currentJob['experience'],
                'gender' => $currentJob['gender'],
                'job_position_ids' => json_encode($currentJob['job_position_ids']),
                'skill_ids' => json_encode($currentJob['skill_ids']),
                'job_type' => $currentJob['job_type'],
            ]);
        }
    }
}
