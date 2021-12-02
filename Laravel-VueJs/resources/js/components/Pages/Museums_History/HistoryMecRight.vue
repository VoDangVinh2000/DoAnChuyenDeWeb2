<template>
    <section id="our__corporate">
        <b-container>
            <b-row>
                <b-col md="8">
                    <div class="left">
                        <b-img :src="img"></b-img>
                    </div>
                </b-col>
                <b-col md="4">
                    <div class="right">
                        <h2>History of Mercedes-Benz.</h2>
                        <b-card-text>
                            Learn more about the history of the company, the historical vehicles and personalities. 
                        </b-card-text>
                        <b-link href="#"> To the history </b-link>
                        <b-img :src="img1"></b-img>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
import intro from "../../../../assets/img-museums/03-mercedes-benz-classic-2560x1440.webp";
import intro1 from "../../../../assets/img-museums/mercedes-benz-classic-history-title-2560x1440.webp";

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
#our__corporate {
    max-width: 1680px;
    padding: 50px 0;
    background-color: #000;
    color: #fff;
}

.container {
    max-width: 1300px;
    padding-left: 48px;
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
    text-indent: 25px;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 20px;
    text-align: start;
    font-family: sans-serif;
    padding: 33px 0;
}

.left {
    width: 100%;
}
.right {
    padding-left: 50px;
}
img {
    width: 100%;
}
</style>
