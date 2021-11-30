<template>
    <section id="menu__company">
        <b-container>
            <b-nav>
                <b-nav-item active href="#">About us</b-nav-item>
                <b-nav-item href="#">Career</b-nav-item>
                <b-nav-item href="#">Media</b-nav-item>
                <b-nav-item href="#">Daimler AG Investors</b-nav-item>
            </b-nav>
        </b-container>
    </section>
</template>
<script>
export default {};
</script>
<style scoped>
#menu__company {
    max-width: 1680px;
    height: 90px;
    background: #1f1f1f;
    position: relative;
}

#menu__company .container{
    height: 100%;
}

#menu__company li {
    list-style-type: none;
    padding: 17px;
}

#menu__company .nav{
    justify-content: center;
    height: 100%;
}
</style>
