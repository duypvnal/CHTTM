<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Kinh doanh'],
            ['name' => 'IT phần mềm'],
            ['name' => 'Hành chính'],
            ['name' => 'Gíao dục/Đào tạo'],
            ['name' => 'Tư vấn'],
            ['name' => 'Truyền thông'],
            ['name' => 'Kế toán'],
            ['name' => 'Kiểm toán'],
            ['name' => 'Xây dựng'],
            ['name' => 'Bất động sản'],
            ['name' => 'Thương mại'],
            ['name' => 'Dịch vụ'],
            ['name' => 'Vận tải'],
            ['name' => 'Du lịch'],
            ['name' => 'Thể thao'],
            ['name' => 'Nghệ thuật'],
            ['name' => 'Y tế'],
            ['name' => 'Môi trường'],
            ['name' => 'Nông nghiệp'],
            ['name' => 'Công nghệ'],
            ['name' => 'Thời trang'],
            ['name' => 'Thực phẩm'],
            ['name' => 'Điện tử'],
            ['name' => 'Máy móc'],
            ['name' => 'Nội thất'],
            ['name' => 'Vật liệu xây dựng'],
            ['name' => 'Thiết bị công nghiệp'],
            ['name' => 'Dược phẩm'],
            ['name' => 'Hóa chất'],
            ['name' => 'Dinh dưỡng'],
            ['name' => 'Thú y'],
            ['name' => 'Thủy sản'],
            ['name' => 'Nước uống'],
            ['name' => 'Cà phê'],
            ['name' => 'Rượu'],
            ['name' => 'Bia'],
            ['name' => 'Nước ngọt'],
            ['name' => 'Nước ép'],
            ['name' => 'Nước suối'],
            ['name' => 'Nước khoáng'],
            ['name' => 'Nước tinh khiết'],
            ['name' => 'Nước lọc'],
            ['name' => 'Nước giải khát']
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
