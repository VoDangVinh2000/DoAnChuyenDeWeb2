<template>
    <section id="slide__02">
        <b-carousel
            id="carousel-animation-02"
            controls
            :interval="5000"
            img-width="1680"
            background="#ffffff"
            v-model="slide"
            @sliding-start="onSlideStart"
            @sliding-end="onSlideEnd"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-offset="100"
            data-aos-delay="30"
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
import img01 from "../../../../assets/img-company/slides-06.webp";
import img02 from "../../../../assets/img-company/slides-08.jpeg";
import img03 from "../../../../assets/img-company/slides-09.webp";
import img04 from "../../../../assets/img-company/slides-10.webp";
import img05 from "../../../../assets/img-company/slides-11.webp";

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
#slide__02 {
    max-width: 1680px;
    background-color: #000000;
    overflow: hidden;
}
</style>
