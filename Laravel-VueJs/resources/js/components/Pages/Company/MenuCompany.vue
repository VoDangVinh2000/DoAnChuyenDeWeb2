<template>
    <section id="menu__company">
        <b-container>
            <b-nav>
                <li v-for="(item, i) in menu" :key="i">
                    <b-link href="#" :class="item.active">{{ item.link }}</b-link>
                </li>
            </b-nav>
        </b-container>
    </section>
</template>
<script>
export default {
    data() {
        return {
            menu: [
                { link: "About us", active : "active" },
                { link: "Career" },
                { link: "Media" },
                { link: "Daimler AG Investors" },
            ],
        };
    },
};
</script>

<style scoped>
#menu__company {
    max-width: 1680px;
    height: 90px;
    background: #1f1f1f;
    position: sticky;
    z-index: 100;
    top: -1px;
}

#menu__company .container {
    height: 100%;
}

#menu__company li {
    list-style-type: none;
}
#menu__company a.active{
    color: #fff;
    position: relative;
}

#menu__company a.active::before {
    content: '';
    position: absolute;
    left: 0px;
    color: #fff;
    width: 100%;
    bottom: 0;
    border-bottom: 1px solid #fff;
}

#menu__company a:visited {
    color: #fff;
}

#menu__company a {
    height: 100%;
    font-size: 16px;
    display: flex;
    align-items: center;
    text-decoration: none;
    font-size: 16px;
    color: hsla(0, 0%, 100%, 0.5);
    padding: 0 25px;
}

#menu__company a:hover {
    color: #fff;
}

#menu__company .nav {
    justify-content: center;
    height: 100%;
}

#menu__company .nav .nav-item > .nav-link {
    background: #fff;
}
</style>
