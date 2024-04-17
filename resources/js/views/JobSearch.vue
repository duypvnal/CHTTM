<template>
    <GlobalHeader />
    <el-container class="search-container">
        <div class="job-header">
            <div class="box-search-job" id="box-search-job">
                <div class="container">
                    <el-input @keydown.enter="onSearch" placeholder="Vị trí tuyển dụng" prefix-icon="Search" v-model="searchValue">
                    </el-input>
                    <el-button @click="onSearch" icon="Search" type="success">Tìm kiếm</el-button>
                </div>
            </div>
        </div>
    </el-container>
    <el-container>
        <div class="job-list-search-result">
            <div v-for="item in jobs" class="job-item-search-result">
                <div class="avatar"><img :src="item.avatar"/></div>
                <div class="body">
                    <div class="body-content">
                        <div class="title-block">
                            <h3 class="title">
                                <span>
                                    {{ item.jobTitle }}
                                </span>
                            </h3>
                            <div class="company-name">
                                {{ item.companyName }}
                            </div>
                        </div>
                        <div class="salary-block">
                            <span>{{ item.minSalary }} - {{ item.maxSalary }} triệu</span>
                        </div>
                    </div>
                    <div class="info">
                        <div class="label-content">
                            <label>
                                {{ item.region }}
                            </label>
                            <label>
                               Còn {{ item.time }} ngày để ứng tuyển
                            </label>
                        </div>
                        <div class="icon">
                            <el-button class="btn-apply" @click="onApply" type="success">Ứng tuyển</el-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </el-container>
</template>
<script>
import { defineComponent } from "vue";
import GlobalHeader from "../layout/GlobalHeader.vue";
export default defineComponent({
    components: { GlobalHeader },
    data() {
        return {
            isOpenDialogLogin: false,
            isOpenDialogRegister: false,
            formLabelWidth: '120px',
            jobs: [
                {
                    avatar: 'https://cdn-new.topcv.vn/unsafe/150x/https://static.topcv.vn/company_logos/g7V1Ak5wr4rE8e7XHCrRgtTUIRKd5Moa_1676008072____e6c6679a30771aba54e69a427eec9c22.png',
                    jobTitle: 'Nhân Viên Kinh Doanh/Telesales Nữ (Chỉ Làm 6.5H/Ngày, Data Tiềm Năng Có Sẵn, Không Yêu Cầu Kinh Nghiệm)',
                    companyName: 'Công ty TNHH WESAAM',
                    region: 'Hồ Chí Minh',
                    minSalary: 8,
                    maxSalary: 15,
                    time: 24,
                },
            ],
            userSelect: '',
            searchValue: '',
        }
    },
    computed: {
    },
    methods: {
        async getAllUsers() {
            try {
                const response = await axios.get(
                    "http://localhost:8000/api/users",
                    {},
                );
                this.users = response.data.data;
            } catch (error) {
                console.error("Error fetching categories:", error);
            }
        },
        onSearch() {
            console.log(this.searchValue);
        },
        onApply() {},
    },
    async mounted() {
        await this.getAllUsers()
    }
})
</script>
<style lang="scss" scoped>
.search-container {
    width: 100vw;
    .box-search-job {
        background: url('https://static.topcv.vn/v4/image/search-job/bg-search-left-opacity.png'), url('https://static.topcv.vn/v4/image/search-job/bg-search-right.png'), linear-gradient(90deg, #212f3f, #00b14f);
        background-position: 0 0, 100% 0, 50%;
        background-repeat: no-repeat;
        background-size: auto 340px, auto 340px, 100% 100%;
        font-family: Inter, sans-serif;
        font-style: normal;
        padding: 16px 0;
    }

    .job-header {
        width: 100%;
    }

    .container {
        width: 1170px;
        margin: auto;
        height: 104px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;

        :deep(.el-input__wrapper) {
            height: 48px;
        }

        :deep(.el-button--success) {
            height: 50px;
            background-color: #00c056;
            border: none;
            margin-left: 32px;
        }
    }
}

.job-list-search-result {
    width: 1174px;
    margin: auto;
    margin-top: 40px;
}

.job-item-search-result {
    background: #fff;
    border: 1px solid transparent;
    border-radius: 8px;
    box-shadow: 0 8px 16px 0 rgba(1, 18, 34, .04);
    cursor: pointer;
    display: flex;
    gap: 16px;
    grid-template-columns: 1fr 5fr;
    margin-bottom: 12px;
    padding: 12px;
    position: relative;
    transition: all .1s;
    background-color: #f2fbf6;
    border: 1px solid #acf2cb;

    &:hover {
        background-color: #f2fbf6;
        border: 1px solid #00b14f;
    }
    .avatar {
        align-items: center;
        aspect-ratio: 1 / 1;
        background: #fff;
        background-color: #fff;
        border: 1px solid #e9eaec;
        border-radius: 8px;
        display: flex;
        height: 120px;
        margin: 0 auto;
        -o-object-fit: contain;
        object-fit: contain;
        padding: 8px;
        position: relative;
        width: 120px;
        img {
            border-radius: 5px;
            height: 100%;
            -o-object-fit: contain;
            object-fit: contain;
            width: 100%;
        }
    }
    .body {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        .info {
            display: flex;
            flex-direction: row;
            margin-top: 24px;
            justify-content: space-between;
            .label-content {
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                label {
                    background: #e9eaec;
                    border-radius: 3px;
                    color: #212f3f;
                    font-size: 12px;
                    font-weight: 400;
                    line-height: 16px;
                    margin-bottom: 0;
                    margin-top: 0;
                    padding: 4px 8px;
                }
            }
            .icon {
                width: 150px;
                display: flex;
                justify-content: center;
                .btn-apply {
                    align-items: center;
                    background: #00b14f;
                    border-radius: 3px;
                    color: #fff;
                    display: flex;
                    font-size: 12px;
                    font-weight: 400;
                    height: 28px;
                    line-height: 16px;
                    outline: none;
                    padding: 6px 16px;
                    transition: .3s;
                }
            }
        }
    }

    .body-content {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .title-block {
        width: 80%;
    }

    .salary-block {
        color: #00b14f;
        display: flex;
        font-size: 14px;
        font-weight: 600;
        gap: 10px;
        justify-content: center;
        line-height: 20px;
        margin-bottom: 0;
        margin-top: 0;
        white-space: nowrap;
        width: 150px;
    }

    .title {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        color: #00b14f;
        display: -webkit-box;
        flex: 1;
        font-weight: 600;
        line-height: 0;
        margin-bottom: 4px;
        margin-right: 24px;
        margin-top: 0;
        overflow: hidden;
        overflow-wrap: break-word;
        text-overflow: ellipsis;

        span {
            color: #00b14f;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
        }
    }
}
</style>