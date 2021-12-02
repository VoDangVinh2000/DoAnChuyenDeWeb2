<template>
    <section id="mec__benz__car">
        <b-container>
            <b-row>
                <b-col md="4">
                    <div class="img">
                        <b-img :src="img"></b-img>
                    </div>
                </b-col>
                <b-col md="4" >
                    <div class="title_left">
                        <h2>Opening hours.</h2>
                        <b-card-text>
                            Tue to Sun, from 9 a.m. to 6 p.m. 
                        </b-card-text>
                        <b-card-text>
                            Last admission is at 5 p.m. 
                        </b-card-text>
                        <b-card-text>
                            Closed on Mondays. 
                        </b-card-text>
                        <b-card-text>
                            Please see our opening times for public holidays. 
                        </b-card-text>
                         <b-button size="lg">  To the Mercedes-Benz Museum  </b-button>
                    </div>
                </b-col>
                <b-col md="4" >
                    <div class="title_right">
                        <h2>Exhibitions & events.</h2>
                        <b-card-text>
                            Classics & Coffee
                        </b-card-text>
                        <b-card-text>
                            Special exhibition: Future Mobility
                        </b-card-text>
                        <b-card-text>
                            experimenta
                        </b-card-text>
                        <b-link> Learn more </b-link>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
import intro from "../../../../assets/img-museums/01-at-the-mercedes-benz-museum-with-2560x1440.webp";
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

#mec__benz__car {
    max-width: 1680px;
    height: 418px;
    background: #000;
    color: #fff;
}

#mec__benz__car .container {
    max-width: 1265px;
}

h1,
p,
a {
    margin: 0;
    text-decoration: none;
}

h1 {
    font-size: 2rem;
    font-family: "Lora", serif;
    letter-spacing: -1px;
    font-weight: 300;
}

p {
    text-indent: 25px;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 20px;
    text-align: start;
    font-family: sans-serif;
}

.row {
    position: relative;
    top: 55px;
}

a {
    width: 110px;
    height: 45px;
    color: #fff;
    background: #00adef;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    top: 30px;
}
a:hover {
    background: #0088c6;
    color: #fff;
}

.title_left,
.title_right {
    padding: 0 30px;
}
img{
    width: 100%;
}
</style>
