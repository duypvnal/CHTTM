<template>
  <GlobalHeader :users="this.users"/>
  <el-container class="search-container">
    <div class="job-header">
      <div class="box-search-job" id="box-search-job">
        <div class="container">
          <el-input @keydown.enter="onSearch" placeholder="Vị trí tuyển dụng" prefix-icon="Search"
                    v-model="searchValue">
          </el-input>
          <el-button @click="onSearch" icon="Search" type="success">Tìm kiếm</el-button>
        </div>
      </div>
    </div>
  </el-container>
  <el-container>
    <div class="job-list-search-result">
      <h3>Tuyển dụng {{ jobs.length }} việc làm</h3>
      <div v-for="item in jobs" class="job-item-search-result">
        <div class="avatar"><img :src="item.company.image" alt=""/></div>
        <div class="body">
          <div class="body-content">
            <div class="title-block">
              <h3 class="title">
                                <span>
                                    {{ item.name }}
                                </span>
              </h3>
              <div class="company-name">
                {{ item.company.name }}
              </div>
            </div>
            <div class="salary-block">
              <span>
                {{ displaySalary(item.salary_form, item.salary_to) }}</span>
            </div>
          </div>
          <div class="info">
            <div class="label-content">
              <el-tag type="success"> {{ displayJobType(item.job_type) }}</el-tag>
              <el-tag> {{ displayGender(item.gender) }}</el-tag>
              <el-tag type="warning"> {{ displayExperience(item.experience) }}</el-tag>
              <el-tag type="info"> Còn {{ daysRemaining(item.due_date) }} ngày để ứng tuyển</el-tag>
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
import {defineComponent} from "vue";
import GlobalHeader from "../layout/GlobalHeader.vue";
import store from "../stores/_loader.js";
import moment from "moment";

export default defineComponent({
  components: {GlobalHeader},
  data() {
    return {
      isOpenDialogLogin: false,
      isOpenDialogRegister: false,
      formLabelWidth: '120px',
      jobs: [],
      userSelect: '',
      searchValue: '',
      users: [],
      currentDate: moment()
    }
  },
  computed: {},
  methods: {
    async getJobs() {
      try {
        const response = await axios.get(
            "http://localhost:8000/api/get-job-suggests",
            {},
        );
        this.jobs = response.data.data;
        console.log(this.jobs)
      } catch (error) {
        console.error("Error fetching Jobs:", error);
      }
    },
    daysRemaining(value) {
      const dueDate = moment(value);
      return dueDate.diff(this.currentDate, 'days');
    },
    displayJobType(value) {
      switch (value) {
        case 0:
          return 'Full-time';
        case 1:
          return 'Part-time';
        case 2:
          return 'Hybrid';
        case 3:
          return 'Remote';
        default:
          return '';
      }
    },
    displaySalary(minSalary, maxSalary) {
      const formatNumber = (number) => {
        return number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
      };
      if (minSalary && maxSalary) {
        return `${formatNumber(minSalary)} - ${formatNumber(maxSalary)} triệu`;
      } else if (minSalary && !maxSalary) {
        return `Từ ${formatNumber(minSalary)} triệu`;
      } else if (!minSalary && maxSalary) {
        return `Tới ${formatNumber(maxSalary)} triệu`;
      } else {
        return 'Thương lượng';
      }
    },
    displayGender(value) {
      switch (value) {
        case 0:
          return 'Nữ';
        case 1:
          return 'Nam';
        default:
          return 'Không yêu cầu';
      }
    },
    displayExperience(value) {
      if (value) {
        return `${value} năm kinh nghiệm`;
      }
      return 'Không yêu cầu kinh nghiệm';
    },
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
    onApply() {
    },
  },
  async mounted() {
    await this.getAllUsers()
    await this.getJobs()
    this.userSelect = store.getters["auth/getUser"]?.id ?? '';
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
  border-radius: 8px;
  box-shadow: 0 8px 16px 0 rgba(1, 18, 34, .04);
  cursor: pointer;
  display: flex;
  gap: 20px;
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
    border: 1px solid #e9eaec;
    border-radius: 8px;
    display: flex;
    height: 120px;
    margin: 0 auto;
    -o-object-fit: contain;
    object-fit: cover;
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
        justify-content: flex-end;

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
    justify-content: flex-end;
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 0;
    white-space: nowrap;
    width: 200px;
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