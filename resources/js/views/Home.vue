<template>
    <div id="home">
        <el-container>
            <HeaderComponent/>
        </el-container>
        <el-container>
            <div class="carousel">
                <el-carousel height="500px">
                    <el-carousel-item v-for="item in images" :key="item">
                        <img
                            style="width: 100%"
                            :src="item"
                            alt="image-banner"
                        />
                    </el-carousel-item>
                </el-carousel>
            </div>
        </el-container>
        <el-container>
            <div class="top-company">
                <h3 class="title-company">Top ngành nghề nổi bật</h3>
                <div>
                    <el-row>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/kinh-doanh-ban-hang.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Kinh doanh / Bán hàng</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/it-phan-mem.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>IT phần mềm</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/hanh-chinh-van-phong.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Hành chính / Văn phòng</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/giao-duc-dao-tao.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Giáo dục / Đào tạo</h5>
                            </div>
                        </el-col>
                    </el-row>

                    <el-row style="margin-top: 40px">
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/tu-van.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Tư vấn</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/marketing-truyen-thong-quang-cao.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Marketing</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/van-tai-kho-van.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Vận tải / Kho vận</h5>
                            </div>
                        </el-col>
                        <el-col :span="5">
                            <div class="col-item">
                                <img
                                    src="https://www.topcv.vn/v4/image/welcome/top-categories/ke-toan-kiem-toan.png?v=2"
                                    alt="image-banner" style="width: 100%"/>
                                <h5>Kế toán / Kiểm toán</h5>
                            </div>
                        </el-col>
                    </el-row>
                </div>
            </div>
        </el-container>
        <el-container>
            <el-footer>Footer</el-footer>

        </el-container>
    </div>
</template>

<script>

import {defineComponent} from "vue";
import HeaderComponent from "../layout/Header.vue";

export default defineComponent({
    components: {HeaderComponent},
    data() {
        return {
            images: [
                'https://www.vietnamworks.com/_next/image?url=https%3A%2F%2Fimages.vietnamworks.com%2Flogo%2Fbeiersdorf_hrbn_125556.jpg&w=3840&q=75',
                'https://www.vietnamworks.com/_next/image?url=https%3A%2F%2Fimages.vietnamworks.com%2Flogo%2Fniteco_hrbn24_125508.jpg&w=3840&q=75',
                'https://www.vietnamworks.com/_next/image?url=https%3A%2F%2Fimages.vietnamworks.com%2Flogo%2Fmondelez_hrbn24_125912.png&w=3840&q=75',
                'https://www.vietnamworks.com/_next/image?url=https%3A%2F%2Fimages.vietnamworks.com%2Flogo%2Fvinhome_hrbn24_125417.jpg&w=3840&q=75',
                'https://www.vietnamworks.com/_next/image?url=https%3A%2F%2Fimages.vietnamworks.com%2Flogo%2FBosch_hrbn24_125472.jpg&w=3840&q=75',
            ],

        }
    },
})
</script>
<style>
#home {
    height: 100vh;
    width: 100vw;

    .carousel {
        height: 100%;
        width: 100%;
    }

    .top-company {
        width: 100%;
        padding: 0 100px 0 100px;

        .title-company {
            font-size: 26px;
            color: #00b14f;
            font-family: sans-serif;
        }

        .el-row {
            justify-content: center;

            .el-col {
                align-content: center;
                background-color: #f3f5f7;
                margin-left: 15px;
                margin-right: 15px;
                border-radius: 15px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                cursor: pointer;


                .col-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                img {
                    width: 100px !important;
                    object-fit: cover;
                    height: 100px;
                }

                h5 {
                    width: 100%;
                    text-align: center;
                    font-size: 16px;
                    font-family: sans-serif;
                    font-weight: 600;
                }
            }
        }
    }
}
</style>
