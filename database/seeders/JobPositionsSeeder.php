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
            ['name' => 'Nhân viên kinh doanh'],
            ['name' => 'Nhân viên IT'],
            ['name' => 'Nhân viên hành chính'],
            ['name' => 'Nhân viên giáo dục'],
            ['name' => 'Nhân viên tư vấn'],
            ['name' => 'Nhân viên truyền thông'],
            ['name' => 'Nhân viên kế toán'],
            ['name' => 'Nhân viên kiểm toán'],
            ['name' => 'Nhân viên xây dựng'],
            ['name' => 'Nhân viên bất động sản'],
            ['name' => 'Nhân viên thương mại'],
            ['name' => 'Nhân viên dịch vụ'],
            ['name' => 'Nhân viên vận tải'],
            ['name' => 'Nhân viên du lịch'],
            ['name' => 'Nhân viên thể thao'],
            ['name' => 'Nhân viên nghệ thuật'],
            ['name' => 'Nhân viên y tế'],
            ['name' => 'Nhân viên môi trường'],
            ['name' => 'Nhân viên nông nghiệp'],
            ['name' => 'Nhân viên công nghệ'],
            ['name' => 'Nhân viên thời trang'],
            ['name' => 'Nhân viên thực phẩm'],
            ['name' => 'Nhân viên điện tử'],
            ['name' => 'Nhân viên máy móc'],
            ['name' => 'Nhân viên nội thất'],
            ['name' => 'Nhân viên vật liệu xây dựng'],
            ['name' => 'Nhân viên thiết bị công nghiệp'],
            ['name' => 'Nhân viên dược phẩm'],
            ['name' => 'Nhân viên hóa chất'],
            ['name' => 'Nhân viên thú y'],
            ['name' => 'Nhân viên thủy sản'],
            ['name' => 'Lập trình viên'],
            ['name' => 'Nhân viên bán hàng'],
            ['name' => 'Trưởng phòng'],
            ['name' => 'Giám đốc'],
        ];

        foreach ($data as $item) {
            \App\Models\JobPosition::create($item);
        }
    }
}
