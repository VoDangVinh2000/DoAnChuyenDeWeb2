<template>
  <footer id="footer__2">
    <div class="brand__space"></div>
    <section id="top__footer">
      <hr class="brand__line footer2__brand__line__top" />
      <div class="footer__logo">
        <div class="row">
          <div class="col-md-4 logo__img">
            <img
              src="https://www.mercedes-benz.com/content/dam/brandhub/experience-fragments/related-websites-logos/logo_amg.svg"
              alt=""
            />
          </div>
          <div class="col-md-4 logo__img">
            <img
              src="https://www.mercedes-benz.com/content/dam/brandhub/experience-fragments/related-websites-logos/logo_daimler.svg"
              alt=""
            />
          </div>
          <div class="col-md-4 logo__img">
            <img
              src="https://www.mercedes-benz.com/content/dam/brandhub/experience-fragments/related-websites-logos/logo_smart.svg"
              alt=""
            />
          </div>
        </div>
      </div>
      <hr class="brand__line" />
      <p class="descriptons">
        This is the International website of Mercedes-Benz AG. Visitors from the
        U.S., please visit our U.S. website <a href="#">www.mbusa.com</a>
      </p>
    </section>
    <section id="bottom__footer">
        <div class="brand__space" style="height:2rem;"></div>
      <div class="container_fluid">
        <div class="row">
          <div class="col-md-4 brand__left">
            <ul>
              <li><a href="#" class="active">Deutsch</a></li>
              <li><a href="#">English</a></li>
            </ul>
          </div>
          <div class="col-md-8 brand__right">
            <ul>
              <li><a href="#">Provider </a></li>
              <li><a href="#">Legal Notice </a></li>
              <li><a href="#">Cookies</a></li>
              <li><a href="#">Privacy Statement </a></li>
            </ul>
            <ul>
              <li><a href="#">Newsfeed (RSS) </a></li>
              <li><a href="#">Contact </a></li>
              <li><a href="#">Careers </a></li>
              <li><a href="#">Investor Relations </a></li>
              <li><a href="#">Daimler AG </a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </footer>
</template>

<script>
export default {
  name: "Footer2",
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

#footer__2 {
  background: #000;
  color: #fff;
  font-family: "Lora", serif;
}

.footer__logo {
  height: 4rem;
  display: grid;
  align-items: center;
}

.footer__logo .row {
  max-width: 100%;
}

.brand__space {
  width: 100%;
  height: 1px;
}

.logo__img {
  padding: 0;
}

.logo__img img {
  height: 1.5rem;
  width: 100%;
}

hr.brand__line {
  border-top: 1px solid #313131;
  margin: 30px 0;
}

#top__footer {
  margin: 0 32px;
}

#bottom__footer {
  margin: 0 32px;
}

p {
  color: #999;
  font-size: 14px;
  margin-bottom: 0;
  font-family: sans-serif;
  padding-bottom: 1rem;
}

a {
  text-decoration: none;
  color: #fff;
  font-size: 14px;
  font-family: sans-serif;
  line-height: 22px;
  transition: 0.4s all ease;
}

a:hover {
  color: #00adef;
}

ul {
  display: flex;
  padding: 0;
}

.brand__right{
    display: flex;
    padding: 0;
}

.brand__left a{
    color: #fff;
    font-size: 16px;
}

.brand__left a.active{
    color: #02b6fd;
    padding-right: 20px;
    border-right: 1px solid #02b6fd;
}

ul li {
  margin: 10px;
}

ul a {
  text-decoration: none;
  color: #999;
  font-size: 14px;
  font-family: sans-serif;
  line-height: 22px;
  transition: 0.4s all ease;
}
</style>
