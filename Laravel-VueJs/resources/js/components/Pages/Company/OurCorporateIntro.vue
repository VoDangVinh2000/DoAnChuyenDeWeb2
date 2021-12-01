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
                        <h2>Our corporate governance.</h2>
                        <b-card-text>
                            As part of the new corporate structure of the
                            Daimler AG holding company, the Mercedes-Benz Cars
                            and Mercedes-Benz Vans divisions were consolidated
                            under Mercedes-Benz AG on November 1, 2019. Dr.
                            Bernd Pischetsrieder was elected as Chairman of the
                            Supervisory Board of Mercedes-Benz AG. The
                            Supervisory Board appointed Ola Källenius as
                            Chairman of the Board of Management of Mercedes-Benz
                            AG. Ola Källenius is also Chairman of the Board of
                            Management of Daimler AG. Following is an overview
                            of the eight members of the Board of Management of
                            Mercedes-Benz AG and the allocation of
                            responsibilities.
                        </b-card-text>
                        <b-link href="#"> Learn more </b-link>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
import intro from "../../../../assets/img-company/our-coparate.webp";

export default {
    data() {
        return {
            img: intro,
        };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");
#our__corporate {
    max-width: 1680px;
    padding: 50px 0;
    background-color: #ffffff;
    color: #000000;
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
    font-family: "Lora", serif;
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
