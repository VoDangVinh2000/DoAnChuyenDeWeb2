<template>
    <!-- Gọi các cpn tạo ra trang home !-->
<Footer1/>
<Footer2/>
</template>

<script>
import Footer1 from '../../components/Products/Footer1.vue'
import Footer2 from '../../components/Products/Footer2.vue'
export default {
    name: "CarsHome",
    components: { Footer1,Footer2 }
}
</script>

<style scoped>

</style>
