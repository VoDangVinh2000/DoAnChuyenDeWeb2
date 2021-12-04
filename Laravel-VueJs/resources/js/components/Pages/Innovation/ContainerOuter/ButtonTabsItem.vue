<template>
  <MDBTabItem :tabId="tabId" :href="href">
    <MDBBtn color="dark" rounded>{{ category_post_name }}</MDBBtn>
  </MDBTabItem>
</template>

<script>
import { MDBTabItem, MDBBtn } from "mdb-vue-ui-kit";
export default {
  components: {
    MDBTabItem,
    MDBBtn,
  },
  props: {
    tabId: String,
    href: String,
    category_post_name: String,
    category_article_post_id: Number,
  },
  mounted() {

  },
};
</script>

<style scoped>
</style>
