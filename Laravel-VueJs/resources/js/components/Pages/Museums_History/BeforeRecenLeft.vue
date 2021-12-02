<template>
    <section id="our__goal">
        <b-container>
            <b-row>
                <b-col md="4">
                    <div class="left">
                        <h2>
                            Mercedes-Benz Classic.
                        </h2>
                        <b-card-text>
                            Experience a journey through time in the Mercedes-Benz Museum, fulfill your dream of a Mercedes-Benz classic car or learn more about our brand clubs.
                        </b-card-text>
                        <b-img :src="img1" />
                    </div>
                </b-col>
                <b-col md="8">
                    <div class="right">
                        <b-img :src="img" />
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
import intro from "../../../../assets/img-museums/06-mercedes-benz-classic-2560x1440.webp";
import intro1 from "../../../../assets/img-museums/05-mercedes-benz-classic-2560x1440.webp"

export default {
    data() {
        return {
            img: intro,
            img1: intro1
        };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#our__goal {
    max-width: 1680px;
    padding: 50px 0;
    background-color: #000;
    color: #fff;
}

.container {
    max-width: 1265px;
}

h2,
p,
a {
    margin: 0;
    text-decoration: none;
}

h2 {
    font-size: 2rem;
    font-family: "MBCorpo Title, DaimlerCAC-Regular", Helvetica, Arial, sans-serif;
    letter-spacing: -1px;
    font-weight: 300;
}

a {
    width: 110px;
    height: 45px;
    color: #fff;
    background: #00adef;
    display: flex;
    align-items: center;
    justify-content: center;
}
a:hover {
    background: #0088c6;
    color: #fff;
}

p {
    text-indent: 0px;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 20px;
    text-align: start;
    font-family: sans-serif;
    padding: 33px 0;
    padding-right: 20px;
}

.right{
    width: 100%;
    background-image: url("../../../../assets/img-museums/06-mercedes-benz-classic-2560x1440.webp");
}

img{
    width: 100%;
}
</style>
