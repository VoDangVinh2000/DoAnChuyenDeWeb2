<template>
    <section id="glance__intro">
        <b-container>
            <b-nav class="top__link">
                <b-nav-item href="/cars-home"
                    ><span>Home</span><i class="fas fa-chevron-right"></i
                ></b-nav-item>
                <b-nav-item href="/company" active
                    ><span>About us</span></b-nav-item
                >
            </b-nav>
            <h1 class="title__top">The Mercedes-Benz AG at a glance.</h1>
            <div class="glance__body">
                <b-row>
                   <b-col md="4" v-for="item in items" :key="item">
                       <p>{{item.text}}</p>
                   </b-col>
                </b-row>
            </div>

            <h2 class="title__bottom">Our business divisions.</h2>
        </b-container>
    </section>
</template>
<script>
export default {
    data() {
        return {
            items: [
                {
                    text: " Mercedes-Benz AG is responsible for the global business of Mercedes-Benz Cars and Mercedes-Benz Vans, with over 170,000 employees worldwide. Ola Källenius is Chairman of the Board of Management of Mercedes-Benz AG. The company focuses on the development, production and sales of passenger cars, vans and vehicle-related services. Furthermore, the company aspires to be the leader in the fields of electric mobility and vehicle software. The product portfolio comprises the Mercedes-Benz brand with the sub-brands of Mercedes-AMG, Mercedes-Maybach, Mercedes-EQ, G-Class and the smart brand. The Mercedes me brand offers access to the digital services from Mercedes-Benz. ",
                },
                {
                    text: " Mercedes-Benz AG is one of the world's largest manufacturers of luxury passenger cars. In 2020, it sold around 2.1 million passenger cars and nearly 375,000 vans. In its two business segments, Mercedes-Benz AG is continually expanding its worldwide production network with around 35 production sites on four continents, while gearing itself to meet the requirements of electric mobility. At the same time, the company is constructing and extending its global battery production network on three continents. ",
                },
                {
                    text: " As sustainability is the guiding principle of the Mercedes-Benz strategy and for the company itself, this means creating lasting value for all stakeholders: for customers, employees, investors, business partners and society as a whole. The basis for this is Daimler’s sustainable business strategy. The company thus takes responsibility for the economic, ecological and social effects of its business activities and looks at the entire value chain. ",
                },
            ],
        };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#glance__intro {
    max-width: 1680px;
    height: 827px;
    background: #fff;
    color: #000000;
    font-family: sans-serif;
}

#glance__intro .container {
    max-width: 1265px;
}

#glance__intro h1,
#glance__intro h2,
#glance__intro p {
    margin: 0;
}

#glance__intro h1,
#glance__intro h2 {
    text-align: center;
    font-family: "Lora", serif;
    font-size: 2.42857rem;
    line-height: 3.14286rem;
    font-weight: 200;
    letter-spacing: -2px;
}

#glance__intro h1{
   position: relative;
    top: 5.5rem;
}

#glance__intro ul.top__link {
    position: relative;
    top: 13px;
}

#glance__intro p {
    text-align: start;
    font-size: 13px;
    text-indent: 25px;
    padding: 0 30px;
    line-height: 23px;
    letter-spacing: 1px;
}

#glance__intro .top__link a span {
    color: #333;
}

#glance__intro .top__link a:hover span {
    color: #00adef;
}

#glance__intro .top__link a i{
    position: relative;
    left: 18px;
    font-size: 14px;
}

#glance__intro .top__link a i,
#glance__intro .top__link a span,
#glance__intro p {
    color: #333;
}

#glance__intro .top__link li.active span {
    color: #00adef;
}

#glance__intro .title__bottom {
    position: relative;
    top: 14.5rem;
}

#glance__intro .glance__body {
    position: relative;
    top: 10rem;
}
</style>
