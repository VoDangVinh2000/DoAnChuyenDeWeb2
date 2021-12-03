<template>
    <Design 
      data-aos="fade-up"
              data-aos-offset="5"
              data-aos-delay="50"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
    />

</template>

<script>
import Design from 'SrcComponent/components/Pages/Design/Design.vue';
import Header from "SrcComponent/components/Products/Header.vue";

export default {
    name : "Pages/Design.vue",
    components : {
     Design,
     Header
    }
}
</script>

<style scoped>

</style>
