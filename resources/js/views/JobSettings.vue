<template>
    <GlobalHeader :users="this.users" />
    <div class="container">
        <div class="page-img">
            <img src="https://static.topcv.vn/v4/image/suggest-job-setting/banner.png" alt="">
        </div>
        <div class="box-header">
            <h4>Bạn vui lòng hoàn thiện các thông tin dưới đây</h4>
            <span class="required">(*) Các thông tin bắt buộc</span>
        </div>
        <el-form ref="form" class="form" @submit="submit">
            <div class="box-content">
                <div class="box-info">
                    <div class="title">
                        <span>Thông tin cá nhân</span>
                    </div>
                    <el-form-item class="form-item" label="Giới tính">
                        <el-radio-group v-model="form.gender">
                            <el-radio label="Nam" :value="0"></el-radio>
                            <el-radio label="Nữ" :value="1"></el-radio>
                            <el-radio label="Khác" :value="2"></el-radio>
                        </el-radio-group>
                    </el-form-item>
                </div>
                <div class="box-need-work">
                    <div class="title">
                        <span>Nhu cầu công việc</span>
                    </div>
                    <el-form-item class="form-item" label="Vị trí công việc">
                        <el-input required v-model="form.position" placeholder="Vị trí"></el-input>
                    </el-form-item>
                    <el-form-item class="form-item" label="Ngành nghề">
                        <el-select v-model="form.jobItems" multiple filterable remote reserve-keyword
                            :remote-method="remoteMethod" placeholder="Chọn ngành nghề" :loading="loading">
                            <el-option v-for="(item, index) in options" :key="index" :label="item" :value="item">
                            </el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item class="form-item" label="Kỹ năng">
                        <el-select v-model="form.skills" multiple filterable remote reserve-keyword
                            :remote-method="remoteSkillsMethod" placeholder="Chọn kỹ năng" :loading="loading">
                            <el-option v-for="(item, index) in skillOptions" :key="index" :label="item" :value="item">
                            </el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item class="form-item" label="Kinh nghiệm">
                        <el-select v-model="form.exp" placeholder="Kinh nghiệm">
                            <el-option
                            v-for="(item, index) in expOptions"
                            :key="index"
                            :label="item.label"
                            :value="item.value">
                            </el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item class="form-item" label="Mức lương mong muốn">
                        <el-select v-model="form.salary" placeholder="Chọn mức lương mong muốn">
                            <el-option
                            v-for="(item, index) in salaryOptions"
                            :key="index"
                            :label="item.label"
                            :value="item.value">
                            </el-option>
                        </el-select>
                    </el-form-item>
                </div>
                <div class="btn-wrap">
                    <el-button  type="submit">Cập nhật</el-button>
                </div>
            </div>
        </el-form>
    </div>
</template>
<script>
import { defineComponent } from "vue";
import GlobalHeader from "../layout/GlobalHeader.vue";
import { jobOptions, skillOptions, expOptions, salaryOptions } from '../../helper'
import store from "../stores/_loader.js";
export default defineComponent({
    components: { GlobalHeader },
    data() {
        return {
            form: {
                gender: 0,
                position: null,
                jobItems: [],
                skills: [],
                salary: null,
                exp: null,
            },
            options: [],
            skillOptions: [],
            expOptions: expOptions,
            salaryOptions: salaryOptions,
            loading: false,
        }
    },
    methods: {
        remoteMethod(query) {
            if (query !== '') {
                this.loading = true;
                setTimeout(() => {
                    this.loading = false;
                    this.options = jobOptions.filter(item => {
                        return item.toLowerCase()
                            .indexOf(query.toLowerCase()) > -1;
                    });
                }, 200);
            } else {
                this.options = jobOptions;
            }
        },
        remoteSkillsMethod(query) {
            if (query !== '') {
                this.loading = true;
                setTimeout(() => {
                    this.loading = false;
                    this.skillOptions = skillOptions.filter(item => {
                        return item.toLowerCase()
                            .indexOf(query.toLowerCase()) > -1;
                    });
                }, 200);
            } else {
                this.skillOptions = skillOptions;
            }
        },
        submit() {

        },
    },
})
</script>
<style lang="scss" scoped>
.container {
    width: 1174px;
    margin: auto;
    .page-img {
        display: flex;
        justify-content: center;
    }

    .box-header {
        border-bottom: 1px solid #f4f5f5;
        padding: 16px 24px;
        width: 50%;
        margin: auto;

        h4 {
            color: #212f3f;
            font-size: 19px;
            font-weight: 700;
            margin: 0 0 8px;
        }

        span.required {
            color: #de4637;
            font-size: 15px;
        }
    }
    .box-content {
        padding: 24px 24px 28px;
        width: 50%;
        margin: auto;
        .title {
            color: #212f3f;
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 16px;
        }
        :deep(.el-button.el-button--submit) {
            background-color: #00b14f;
            color: #fff;
            width: 172px;
            font-weight: 700;
            padding: 10px 20px;
            margin: auto;
        }
    }

    .box-info {
        border-bottom: 1px solid #f4f5f5;
        padding-bottom: 24px;
    }

    .form-item {
        display: flex;
        flex-direction: column;

        :deep(.el-form-item__label) {
            display: block;
            width: 100%;
            color: #212f3f;
            font-size: 15px;
            margin-bottom: 16px;
            height: unset;
            line-height: unset;
        }
    }

    .box-need-work {
        padding-top: 20px;
    }
    .btn-wrap {
        padding-left: calc(50% - 86px);
    }
}
</style>