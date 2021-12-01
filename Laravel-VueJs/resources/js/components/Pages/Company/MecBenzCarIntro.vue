<template>
    <section id="mec__benz__car">
        <b-container>
            <b-row>
                <b-col md="4">
                    <div class="title">
                        <h1>Mercedes-Benz Cars.</h1>
                    </div>
                </b-col>
                <b-col md="4">
                    <div class="left">
                        <b-card-text>
                            The Mercedes-Benz Cars range covers every passenger
                            car segment: from the urban microcar by smart, to
                            the exclusive product range by Mercedes-Benz and
                            Mercedes-Maybach, to the performance and sports cars
                            by Mercedes-AMG. With Mercedes-EQ, Mercedes-Benz
                            Cars is driving forward the systematic development
                            of alternative drives: the aim is to electrify the
                            entire portfolio by 2022. The company will offer a
                            range of electrified models in each segment,
                            including 48-volt models, a wide choice of plug-in
                            hybrids, and all-electric vehicles with battery. In
                            this way, the Cars division of Mercedes-Benz AG
                            ensures individual mobility for a vast spectrum of
                            customer needs. The company aims to build the
                            world’s most desirable cars.
                        </b-card-text>
                    </div>
                </b-col>
                <b-col md="4">
                    <div class="right">
                        <b-card-text>
                            In 2020, Mercedes-Benz Cars delivered 2,087,200
                            vehicles, achieving the fifth consecutive year with
                            a wholesale level above two million passenger cars.
                            Since 2016, Mercedes-Benz has maintained its leading
                            global position in terms of sales compared with its
                            core competitors every year.
                        </b-card-text>
                        <b-link> Learn more </b-link>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
export default {};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#mec__benz__car {
    max-width: 1680px;
    height: 445px;
    background: #ffffff;
    color: #000000;
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

.left,
.right {
    padding: 0 30px;
}
</style>
