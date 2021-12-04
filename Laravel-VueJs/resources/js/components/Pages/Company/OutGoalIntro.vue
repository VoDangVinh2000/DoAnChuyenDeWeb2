<template>
    <section id="our__goal">
        <b-container>
            <b-row>
                <b-col xl="4" lg="12" md="12">
                    <div class="left">
                        <h2 data-aos="fade-up" data-aos-duration="1800">
                            Our goal: to build the world’s most desirable cars.
                        </h2>
                        <b-card-text
                            data-aos="fade-up"
                            data-aos-duration="1800"
                            data-aos-delay="300"
                        >
                            The Mercedes-Benz strategy is made up of six
                            pillars. At its heart is the transformation of the
                            company to become the number 1 for electric mobility
                            and all-encompassing digitalisation. At the same
                            time, there is a clear focus on the structural
                            improvement of profitability, with sustainability as
                            a guiding principle. The basis for the success of
                            our new strategy is provided by our highly qualified
                            and motivated team.
                        </b-card-text>
                        <b-link
                            data-aos="fade-up"
                            data-aos-duration="1800"
                            data-aos-delay="300"
                            href="#"
                        >
                            Learn more
                        </b-link>
                    </div>
                </b-col>
                <b-col xl="8" lg="12" md="12">
                    <div
                        class="right"
                        data-aos="fade-up"
                        data-aos-duration="1800"
                    >
                        <b-img :src="img" />
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
import intro from "../../../../assets/img-company/intro-our-goal.webp";
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

#our__goal {
    max-width: 1680px;
    padding: 50px 0;
    background-color: #ffffff;
    color: #000000;
    overflow: hidden;
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
    padding-right: 20px;
}

.right {
    width: 100%;
}

img {
    width: 100%;
}

@media screen and (max-width: 1280px) {
    .container {
        max-width: 1180px;
    }
}

@media screen and (max-width: 1024px) {
    .container {
        max-width: 964px;
    }

    .left {
        margin-bottom: 15px;
    }
}

@media screen and (max-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media screen and (max-width: 580px) {
    .container {
        max-width: 500px;
    }

    h2 {
        font-size: 1.4rem;
    }
}

@media screen and (max-width: 480px) {
    .container {
        max-width: 380px;
    }

    h2 {
        font-size: 1.2rem;
    }
    a {
        width: 100%;
    }
}

@media screen and (max-width: 380px) {
    .container {
        max-width: 340px;
    }

    h2 {
        font-size: 1.2rem;
    }
}
</style>
