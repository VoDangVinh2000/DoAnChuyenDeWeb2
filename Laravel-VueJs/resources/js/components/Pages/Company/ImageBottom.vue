<template>
    <section id="img__bottom">
        <b-row>
            <b-col md="4" v-for="(item, i) in btImg" :key="i">
                <div class="group">
                    <b-img :src="item.img"></b-img>
                    <h2>{{ item.text }}</h2>
                </div>
            </b-col>
        </b-row>
    </section>
</template>
<script>
import imgbottom01 from "../../../../assets/img-company/bottom-img-01.webp";
import imgbottom02 from "../../../../assets/img-company/bottom-img-02.webp";
import imgbottom03 from "../../../../assets/img-company/bottom-img-03.webp";
export default {
    data() {
        return {
            btImg: [
                { img: imgbottom01, text: "Carrer." },
                { img: imgbottom02, text: "Media." },
                { img: imgbottom03, text: "Daimler AG Investors" },
            ],
        };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");
#img__bottom {
    max-width: 1680px;
    background-color: #000;
    position: relative;
    overflow: hidden;
}

.row {
    width: 100%;
}
.group {
    max-width: 560px;
    max-height: 315px;
    padding: 3px;
    cursor: pointer;
}

img {
    width: 105%;
}

h2 {
    margin: 0;
    position: absolute;
    bottom: 0;
    color: #fff;
    font-family: "Lora", serif;
    font-size: 22px;
    font-weight: 200;
    letter-spacing: -2px;
    background-color: rgba(0, 0, 0, 0.3);
    width: 100%;
    height: 65px;
    padding-top: 20px;
    padding-left: 20px;
    transition: 0.5s all ease;
}

.group:hover h2 {
    height: 150px;
    background-color: rgba(0, 0, 0, 0.6);
}
</style>
