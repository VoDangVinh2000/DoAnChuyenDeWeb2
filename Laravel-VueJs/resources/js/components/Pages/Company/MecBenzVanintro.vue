<template>
    <section id="mec__benz__vans">
        <b-container>
            <b-row>
                <b-col md="4">
                    <div class="title">
                        <h1>Mercedes-Benz Vans.</h1>
                    </div>
                </b-col>
                <b-col md="4">
                    <div class="left">
                        <b-card-text>
                            Mercedes-Benz Vans is a global full-line supplier of
                            vans and related services – the product range in the
                            commercial segment includes the Sprinter van,
                            midsize van Vito (in the USA “Metris”) and the small
                            van Citan, who will get a successor in the second
                            half of 2021. Mercedes-Benz Vans is represented in
                            the private segment with the V-Class MPV and the
                            Marco Polo recreational and camper vans. In the
                            coming year, the product range will be expanded by
                            the T-Class, a small van for private customers. With
                            the eVito, the eSprinter and the EQV all-electric
                            premium MPV, Mercedes-Benz Vans underlines how it is
                            driving forward the development of alternative
                            drives. Mercedes-Benz Vans reached unit sales of
                            374,700 vehicles in 2020.
                        </b-card-text>
                    </div>
                </b-col>
                <b-col md="4">
                    <div class="right">
                        <b-card-text>
                            EQV 300: Stromverbrauch kombiniert: 26,4–26,3
                            kWh/100 km; CO₂-Emissionen kombiniert: 0 g/km.⁶
                        </b-card-text>
                        <b-link href="#"> Learn more </b-link>
                    </div>
                </b-col>
            </b-row>
            <div class="bottom__vans">
                <h2>Our strategy.</h2>
            </div>
        </b-container>
    </section>
</template>
<script>
export default {};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#mec__benz__vans {
    max-width: 1680px;
    height: 725px;
    background: #ffffff;
    color: #000000;
}

#mec__benz__vans .container {
    max-width: 1265px;
    height: 100%;
}

h1,
h2,
p,
a {
    margin: 0;
    text-decoration: none;
}

h1,h2 {
    font-size: 2rem;
    font-family: "Lora", serif;
    letter-spacing: -1px;
    font-weight: 300;
}
h2{
    text-align: center;
    position: relative;
    top: 15.5rem;
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

.left,
.right {
    padding: 0 30px;
}
</style>
