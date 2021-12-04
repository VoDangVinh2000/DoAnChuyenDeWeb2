<template>
    <section id="banner">
        <div class="img__banner">
            <b-img :src="img" alt="banner" />
        </div>
    </section>
</template>
<script>
import Images from "../../../../assets/img-company/Banner.jpeg";
export default {
    data() {
        return {
            img: Images,
        };
    },
};
</script>
<style scoped>
#banner {
    max-width: 1680px;
    background: #ffffff;
}
#banner .img__banner {
    width: 100%;
    height: 100%;
}

#banner .img__banner img {
    width: 100%;
    height: 100%;
}
</style>
