<template>
    <section id="recent">
        <b-container>
            <h1 class="title__top"> Recent Articles.</h1>
            <!-- <div class=#recent__body">
                       <p v-for="item in items" :key="item ">{{item.text}}</p>
            </div> -->

            <!-- <h2 class="title__bottom">Our business divisions.</h2> -->
        </b-container>
    </section>
</template>
<script>
export default {
    data() {
        // return {
        //     items: [
        //         {
        //             text: " Recent Articles. ",
        //         },
        //     ],
        // };
    },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#recent {
    max-width: 1680px;
    height: 294px;
    background: #000;
    color: #fff;
    font-family: sans-serif;
}

#recent .container {
    max-width: 1265px;
}

#recent h1,
#recent h2,
#recent p {
    margin: 0;
}

#recent h1,
#recent h2 {
    text-align: center;
    font-family: "Lora", serif;
    font-size: 60px;
    line-height: 60px;
    font-weight: 200;
    letter-spacing: -2px;
}

#recent h1{
   position: relative;
    top: 5.5rem;
}

#recent ul.top__link {
    position: relative;
    top: 13px;
}

#recent p {
    text-align: center;
    font-size: 15px;
    text-indent: 25px;
    padding: 0 30px;
    line-height: 23px;
    letter-spacing: 1px;
}

#recent .top__link a span {
    color: #333;
}

#recent .top__link a:hover span {
    color: #00adef;
}

#recent .top__link a i{
    position: relative;
    left: 18px;
    font-size: 15px;
}

#recent .top__link a i,
#recent .top__link a span,
#recent p:last-child {
    color: #fff;
    text-align: center;
}

#recent .top__link li.active span {
    color: #00adef;
}




</style>
