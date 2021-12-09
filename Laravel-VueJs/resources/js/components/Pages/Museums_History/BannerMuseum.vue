<template>
    <section id="banner">
        <div class="img__banner">
            <b-img :src="img" alt="banner" />
        </div>
    </section>
</template>
<script>
 import Images from "../../../../assets/img-museums/01-mercedes-benz-classic-history-c-126-2560x1440.webp";
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
    background: #000;
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
