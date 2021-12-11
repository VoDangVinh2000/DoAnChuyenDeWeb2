<template>
  <div>
    <b-alert
      v-model="showTop"
      class="position-fixed fixed-top m-0 rounded-0"
      style="z-index: 2000"
      variant="success"
      dismissible
    >
      Đã sửa
    </b-alert>
  </div>
  <MDBTabs v-model="activeTabId1">
    <!-- Tabs navs -->
    <MDBTabNav tabsClasses="mb-3">
      <MDBTabItem tabId="ex1-1" href="ex1-1"
        >Danh sách các chủ đề mới</MDBTabItem
      >
      <MDBTabItem tabId="ex1-2" href="ex1-2"
        >Danh sách các chủ đề phổ biến</MDBTabItem
      >
    </MDBTabNav>
    <!-- Tabs navs -->
    <!-- Tabs content -->
    <MDBTabContent>
      <MDBTabPane tabId="ex1-1">
        <Listpost />
      </MDBTabPane>
      <MDBTabPane tabId="ex1-2">Content #2</MDBTabPane>
    </MDBTabContent>
    <!-- Tabs content -->
  </MDBTabs>
</template>

<script>
import Addpost from "SrcComponent/components/Admin/Layouts/Innovation/Addpost.vue";
import Listpost from "SrcComponent/components/Admin/Layouts/Innovation/Listpost.vue";
import {
  MDBTabs,
  MDBTabNav,
  MDBTabContent,
  MDBTabItem,
  MDBTabPane,
} from "mdb-vue-ui-kit";
import { ref } from "vue";
export default {
  name: "Innovation_admin",
  data() {
    return {
      activeTabId1: 0,
      notice: "",
      showBottom: false,
      showTop: false,
    };
  },
  created() {
    this.activeTabId1 = ref("ex1-1");
    var href = new URL(window.location.href);
    this.notice = href.searchParams.get("notice");
    if (this.notice != null) {
      this.showTop = true;
    }
  },
  components: {
    Addpost,
    Listpost,
    MDBTabs,
    MDBTabNav,
    MDBTabContent,
    MDBTabItem,
    MDBTabPane,
  },
};
</script>

<style scoped>
</style>
