<template>
    <section id="intro">
        <b-container>
            <h1 class="title__top">The best photos.</h1>
            <div class="intro__body">
                       <p v-for="item in items" :key="item ">{{item.text}}</p>
            </div>
        </b-container>
    </section>
</template>
<script>
export default {
    data() {
        return {
            items: [
                {
                    text: " Share your most beautiful pictures and snapshots of Mercedes-",
                },
                {
                    text: "Benz classic cars with the hashtag #MBclassic ",
                }
               
            ],
        };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#intro {
    max-width: 1680px;
    height: 370px;
    background: #000;
    color: #fff;
    font-family: sans-serif;
}

#intro .container {
    max-width: 1265px;
}

#intro h1,
#intro h2,
#intro p {
    margin: 0;
}

#intro h1,
#intro h2 {
    text-align: center;
    font-family: "Lora", serif;
    font-size: 60px;
    line-height: 60px;
    font-weight: 200;
    letter-spacing: -2px;
}

#intro h1{
   position: relative;
    top: 5.5rem;
}

#intro ul.top__link {
    position: relative;
    top: 13px;
}

#intro p {
    text-align: center;
    font-size: 15px;
    text-indent: 25px;
    padding: 0 30px;
    line-height: 23px;
    letter-spacing: 1px;
}

#intro .top__link a span {
    color: #333;
}

#intro .top__link a:hover span {
    color: #00adef;
}

#intro .top__link a i{
    position: relative;
    left: 18px;
    font-size: 15px;
}

#intro .top__link a i,
#intro .top__link a span,
#intro p:last-child {
    color: #fff;
    text-align: center;
}

#intro .top__link li.active span {
    color: #00adef;
}

#intro .title__bottom {
    position: relative;
    top: 14.5rem;
}

#intro .intro__body {
    position: relative;
    top: 10rem;
}
</style>
