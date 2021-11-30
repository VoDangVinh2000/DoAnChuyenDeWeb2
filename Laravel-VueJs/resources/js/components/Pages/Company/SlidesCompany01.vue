<template>
    <section id="slide__01">
        <b-carousel
            id="carousel-no-animation"
            controls
            img-width="1680"
            background="#ffffff"
            v-model="slide"
            @sliding-start="onSlideStart"
            @sliding-end="onSlideEnd"
        >
            <b-carousel-slide
                v-for="(item, index) in isSlides"
                :key="index"
                :img-src="item.img"
                :class="item.active"

            >
            </b-carousel-slide>
        </b-carousel>
    </section>
</template>
<script>
import img01 from "../../../../assets/img-company/slides-01.jpeg";
import img02 from "../../../../assets/img-company/slides-02.jpeg";
import img03 from "../../../../assets/img-company/slides-03.jpeg";
import img04 from "../../../../assets/img-company/slides-04.webp";
import img05 from "../../../../assets/img-company/slides-05.webp";

export default {
    data() {
        return {
            slide: 0,
            sliding: null,
            isSlides: [
                { img: img01, active: "active" },
                { img: img02 },
                { img: img03 },
                { img: img04 },
                { img: img05 },
            ],
        };
    },
};
</script>
<style scoped>
#slide__01 {
    max-width: 1680px;
}
</style>
