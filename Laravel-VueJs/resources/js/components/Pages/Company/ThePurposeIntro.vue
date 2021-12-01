<template>
    <section id="purpose">
        <b-container>
            <b-row>
                <b-col md="4">
                    <div class="left">
                        <h2>
                            Our goal: to build the world’s most desirable cars.
                        </h2>
                        <b-card-text>
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
                        <b-link href="#"> Learn more </b-link>
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
import introPurpose from "../../../../assets/img-company/the-purpose.webp";
export default {
    data() {
        return {
            img: introPurpose,
        };
    },
};
</script>
<style scoped>
#purpose {
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
    padding-right: 20px;
}

.right{
    width: 100%;
}

img{
    width: 100%;
}
</style>
