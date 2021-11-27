<template>
  <footer id="footer__1">
    <!-- Top Footer -->
    <section id="top__footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 brand__items" v-for="item in data" :key="item.id">
            <h3 class="title">{{item.topics}}</h3>
            <hr class="brand__line" />
            <ul class="brand__links" >
              <li v-for="item2 in JSON.parse(item.subfooter)" :key="item2"><a href="">{{item2.name}}</a></li>
              <!-- <li><a href="#">Design</a></li>
              <li><a href="#">Exhibitions</a></li>
              <li><a href="#">Museum & History</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Driving Events</a></li>
              <li><a href="#">Mercedes me Portal</a></li> -->
            </ul>
          </div>
          <!-- <div class="col-md-3 brand__items">
            <h3 class="title">Shopping</h3>
            <hr class="brand__line" />
            <ul class="brand__links">
              <li><a href="#">Dealer Search</a></li>
              <li><a href="#">Mercedes-Benz Accessoires</a></li>
              <li><a href="#">Mercedes-Benz Collection </a></li>
              <li><a href="#">Mercedes me connect Store </a></li>
              <li><a href="#">Service & Parts </a></li>
              <li><a href="#">Formula 1 Store </a></li>
              <li><a href="#">Mercedes-Benz Classic Center </a></li>
            </ul>
          </div>
          <div class="col-md-3 brand__items">
            <h3 class="title">All about cars</h3>
            <hr class="brand__line" />
            <ul class="brand__links">
              <li><a href="#">Model Overview </a></li>
              <li><a href="#">Configurator </a></li>
              <li><a href="#">Test Drive </a></li>
              <li><a href="#">Mercedes-Maybach </a></li>
              <li><a href="#">Mercedes me connect </a></li>
              <li><a href="#">Mercedes-Benz Ex-Factory Driving Aids </a></li>
              <li><a href="#">WLTP </a></li>
              <li><a href="#">RDE </a></li>
              <li><a href="#">Semiconductors supply situation </a></li>
              <li><a href="#">Li-Ion UN38.3 </a></li>
            </ul>
          </div>
          <div class="col-md-3 brand__items">
            <h3 class="title">Discover more</h3>
            <hr class="brand__line" />
            <ul class="brand__links">
              <li><a href="#">Daimler AG </a></li>
              <li><a href="#">Mercedes-Benz AG </a></li>
              <li><a href="#">Newsroom </a></li>
              <li><a href="#">Press </a></li>
              <li><a href="#">Career </a></li>
              <li><a href="#">heycar </a></li>
              <li><a href="#">SHARE NOW </a></li>
              <li><a href="#">Vulnerability Reporting Policy </a></li>
              <li><a href="#">Mercedes-Benz Energy </a></li>
              <li><a href="#">Mercedes-Benz Bank </a></li>
              <li><a href="#">Fleet Sales </a></li>
              <li><a href="#">Mercedes-Benz Global Training </a></li>
              <li><a href="#">Customer Centre Sindelfingen </a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Botom Footer -->
    <section id="bottom__footer">
      <div class="container_fluid">
        <h3 class="title">Stay informed</h3>
        <hr class="brand__line" />
        <p class="bottom__footer__descriptons">
          Follow us and use the following social media platforms to get in
          contact with us and to share your passion for the brand, products and
          services of Mercedes-Benz.
        </p>
        <ul class="social__media">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </section>
  </footer>
</template>

<script>
export default {
    name: "Footer1.vue",
    data(){
      return {
        data: [],
      };
    },
    methods: {
        async getData(){
            const url = "/api/all-footer";
            const response = await fetch(url);
            const data = await response.json();
            return data;
        },
    },
    async created() {
      this.data = await this.getData();
    },


};

</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#footer__1 {
  background: #000;
  color: #fff;
  font-family: "Lora", serif;
}

h3.title {
  font-size: 29px;
  font-weight: 300;
  letter-spacing: -2px;
}

.brand__items {
  padding: 0;
  padding-top: 32px;
}

hr.brand__line {
  border-top: 1px solid #313131;
  margin: 30px 0;
}

ul {
  padding: 0;
  margin: 0;
}

li {
  list-style-type: none;
}

a {
  text-decoration: none;
  color: #999;
  font-size: 14px;
  font-family: sans-serif;
  line-height: 22px;
  transition: 0.4s all ease;
}

a:hover {
  color: #00adef;
  text-decoration-line: underline;
}

#top__footer {
  /* margin: 0 32px; */
}

#bottom__footer{
    /* margin: 0 32px; */
}

p.bottom__footer__descriptons{
    color: #999;
    font-size: 14px;
    width: 45%;
     font-family: sans-serif;
}

ul.social__media{
    display: flex;
    margin-top: 1.5rem;
}

ul.social__media li{
   margin: 10px 26px;
}

ul.social__media li a i{
  font-size: 25px;
}
</style>
