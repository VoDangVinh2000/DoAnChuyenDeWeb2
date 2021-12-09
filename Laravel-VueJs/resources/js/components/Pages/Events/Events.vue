<template>
    <div id="events">
        <MDBDropdown btnGroup align="lg-end" v-model="dropdown25" class="drop-down-header" style="display:none;">
            <MDBDropdownToggle @click="dropdown25 = !dropdown25" style="width:100%;background: gray;">
                Lựa chọn
            </MDBDropdownToggle>
            <MDBDropdownMenu>
                <MDBDropdownItem href="#">IAA MOBILITY 2021</MDBDropdownItem>
                <MDBDropdownItem href="#">Circle of Excellence</MDBDropdownItem>
                <MDBDropdownItem href="#">Driving Events</MDBDropdownItem>
                <MDBDropdownItem href="#">G-Class Experience</MDBDropdownItem>
                <MDBDropdownItem href="#">AMG Driving Academy</MDBDropdownItem>
                <MDBDropdownItem href="#">Classic Car Travel</MDBDropdownItem>
                <MDBDropdownItem href="#">Motorsport Tickets</MDBDropdownItem>
            </MDBDropdownMenu>
        </MDBDropdown>
        <b-nav toggleable type="secondary" class="bg-secondary header-title">
            <b-nav-item><span>IAA MOBILITY 2021</span></b-nav-item>
            <b-nav-item><span>Circle of Excellence</span></b-nav-item>
            <b-nav-item><span>Driving Events</span></b-nav-item>
            <b-nav-item><span>G-Class Experience</span></b-nav-item>
            <b-nav-item><span>AMG Driving Academy</span></b-nav-item>
            <b-nav-item><span>Classic Car Travel</span> </b-nav-item>
            <b-nav-item><span>Motorsport Tickets</span></b-nav-item>
        </b-nav>

        <!-- Background image -->
        <div
            class="p-5 bg-image img-content"
            style="
                background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/slider_0_copy/sliderchilditems/slideritem_0/image/MQ7-0-image-20191115103522/01-mercedes-benz_events_titel-3-3400x1440.jpeg');">
            <div class="mask">
                <div class="h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Mercedes-Benz Events.</h1>
                        <h7 class="mb-3"
                            ><span
                                >Together with Mercedes-Benz, discover diverse
                                events from the fields of <br />
                                travel, driving events, sport, culture, classics
                                and lifestyle, as well as <br />
                                regular vehicle topics.</span
                            ></h7
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
        <b-container id="myID" class="bottomMenu hide" data-aos="fade-up">
            <div class="home">
                <h6>
                    <span id="back-home"> Home</span>
                    <i class="fas fa-greater-than"></i>
                    <span style="color: #00adef; cursor: pointer">
                        Mercedes-Benz-Event</span
                    >
                </h6>
            </div>
            <div class="bv-example-row" data-aos="fade-up">
                <b-row>
                    <b-col class="introduce">
                        <h3>Mercedes-Benz Event highlights.</h3>
                        <p>
                            Today meConvention, tomorrow Circle of Excellence –
                            experience the best Mercedes-Benz Events as if you
                            were there by watching our live streams, get your
                            exclusive motorsport tickets, and take part in
                            driving safety trainings open to a select few only.
                            Be it the AMG Driving Academy or one of the exciting
                            classic-car tours – Mercedes-Benz Events are
                            highlights packed with driving enjoyment, power and
                            dynamism.
                        </p>
                    </b-col>
                    <b-col
                        class="p-5 bg-image img-introduce"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/paragraph_copy/paragraph-right/paragraphimage/image/MQ6-6-image-20191104150820/02-mercedes-benz-events-teaser-2560x1440.jpeg');
                            height: 350px;
                            background-size: cover;
                        "
                    >
                    </b-col>
                </b-row>
            </div>
        </b-container>
        <div class="product-event">
            <div class="bv-example-row" data-aos="fade-up">
                <b-row>
                    <b-col
                        class="p-5 bg-image img-product"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_1880768572_/image/MQ6-8-image-20201109155525/07-mercedes-benz-g500-2019-w463-2560x1440-09-2020.jpeg');
                            height: 270px;
                            width: 100%;
                            background-size: cover;
                        "
                    >
                        <span
                            ><p>G-class Experiencs Center.</p>
                            <p style="font-size: 1rem">
                                Experiencs the various facets of the G-class
                            </p>
                        </span>
                    </b-col>
                    <b-col
                        class="p-5 bg-image img-product"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_0/image/MQ6-8-image-20191031163514/mbcom_events_driving-events_eventubersicht_neu0718_2560x1440.jpeg');
                            height: 270px;
                            background-size: cover;
                        "
                        ><span
                            ><p>Mercedes-Benz Driving Events.</p>
                            <p style="font-size: 1rem">
                                The Driving Events are always a source of
                                thrills and adventure: improve your driving
                                skills, on and off
                            </p>
                        </span>
                    </b-col>
                    <b-col
                        class="p-5 bg-image img-product"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_1/image/MQ6-8-image-20191015163057/01-mercedes-amg-driving-academy-2560x1440-2560x1440.jpeg');
                            height: 270px;
                            background-size: cover;
                        "
                        ><span
                            ><p>Mercedes-AMG Driving Academy.</p>
                            <p style="font-size: 1rem">
                                Exploring and pushing personal limits,
                                experiencing thrilling performance, and enjoying
                                every moment to
                            </p>
                        </span>
                    </b-col>
                </b-row>
            </div>
            <div class="bv-example-row">
                <b-row>
                    <b-col
                        class="p-5 bg-image img-product img-product-fail"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_1_1512235882/image/MQ6-8-image-20191015153039/Keyvisual_Nizza_Nostal_029.jpeg');
                            background-size: cover;
                        "
                        ><span
                            ><p>Classic Car Travel.</p>
                            <p style="font-size: 1rem">
                                Hit Europe’s dreamy roads behind the wheel of a
                                classic Mercedes-Benz roadster.
                            </p>
                        </span>
                    </b-col>
                    <b-col
                        class="p-5 bg-image img-product hidden-cars"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_0/image/MQ6-8-image-20191031163514/mbcom_events_driving-events_eventubersicht_neu0718_2560x1440.jpeg');
                            background-size: cover;
                            z-index: -1;
                        "
                        ><span
                            ><p>G-class Experiencs Center.</p>
                            <p style="font-size: 1rem">
                                Experiencs the various facets of the G-class
                            </p>
                        </span>
                    </b-col>
                    <b-col
                        class="p-5 bg-image img-product hidden-cars"
                        style="
                            background-image: url('https://www.mercedes-benz.com/en/events/_jcr_content/root/grid_3_copy/grid-par/griditem_1/image/MQ6-8-image-20191015163057/01-mercedes-amg-driving-academy-2560x1440-2560x1440.jpeg');
                            height: 270px;
                            background-size: cover;
                            z-index: -1;
                        "
                    ></b-col>
                </b-row>
            </div>
            <div class="footer-event">
                <div class="footer-title">
                    <span
                        ><i class="fas fa-gas-pump"></i> Kraftstoffverbrauch
                        kombiniert</span
                    >
                    <span
                        ><i class="fas fa-leaf"></i> CO₂-Emissionen
                        kombiniert</span
                    >
                    <span
                        ><i class="fas fa-gas-pump"></i> Stromverbrauch im
                        kombinierten Testzyklus</span
                    >
                </div>
                <div class="footer-detail" data-aos="fade-up">
                    <p>Product may vary after press date on 26.09.2014.</p>
                    <p>
                        1 Die angegebenen Werte wurden nach dem vorgeschriebenen
                        Messverfahren ermittelt. Es handelt sich um die
                        „NEFZ-CO₂-Werte“ i. S. v. Art. 2 Nr. 1
                        Durchführungsverordnung (EU) 2017/1153. Die
                        Kraftstoffverbrauchswerte wurden auf Basis dieser Werte
                        errechnet. Der Stromverbrauch wurde auf der Grundlage
                        der VO 692/2008/EG ermittelt. Weitere Informationen zum
                        offiziellen Kraftstoffverbrauch und den offiziellen
                        spezifischen CO₂-Emissionen neuer Personenkraftwagen
                        können dem „Leitfaden über den Kraftstoffverbrauch, die
                        CO₂-Emissionen und den Stromverbrauch aller neuen
                        Personenkraftwagenmodelle“ entnommen werden, der an
                        allen Verkaufsstellen und bei der Deutschen Automobil
                        Treuhand GmbH unter www.dat.de unentgeltlich erhältlich
                        ist.
                    </p>
                    <p>
                        4 Angaben zu Kraftstoffverbrauch, Stromverbrauch und
                        CO₂-Emissionen sind vorläufig und wurden vom Technischen
                        Dienst für das Zertifizierungsverfahren nach Maßgabe des
                        WLTP-Prüfverfahrens ermittelt und in NEFZ-Werte
                        korreliert. Eine EG-Typgenehmigung und
                        Konformitätsbescheinigung mit amtlichen Werten liegen
                        noch nicht vor. Abweichungen zwischen den Angaben und
                        den amtlichen Werten sind möglich.
                    </p>
                    <p>
                        6 Stromverbrauch und Reichweite wurden auf der Grundlage
                        der VO 692/2008/EG ermittelt. Stromverbrauch und
                        Reichweite sind abhängig von der Fahrzeugkonfiguration.
                        Weitere Informationen zum offiziellen
                        Kraftstoffverbrauch und den offiziellen spezifischen
                        CO₂-Emissionen neuer Personenkraftwagen können dem
                        „Leitfaden über den Kraftstoffverbrauch, die
                        CO₂-Emissionen und den Stromverbrauch aller neuen
                        Personenkraftwagenmodelle“ entnommen werden, der an
                        allen Verkaufsstellen und bei der Deutschen Automobil
                        Treuhand GmbH unter www.dat.de unentgeltlich erhältlich
                        ist.
                    </p>
                    <p>
                        7 Angaben zu Stromverbrauch und Reichweite sind
                        vorläufig und wurden vom Technischen Dienst für das
                        Zertifizierungsverfahren nach Maßgabe der
                        UN/ECE-Regelung Nr. 101 ermittelt. Die EG-Typgenehmigung
                        und eine Konformitätsbescheinigung mit amtlichen Werten
                        liegen noch nicht vor. Abweichungen zwischen den Angaben
                        und den amtlichen Werten sind möglich.
                    </p>
                    <p>
                        8 Alle technischen Angaben sind vorläufig und wurden
                        intern nach Maßgabe der jeweils anwendbaren
                        Zertifizierungsmethode ermittelt. Es liegen bislang
                        weder bestätigte Werte vom TÜV noch eine
                        EG-Typgenehmigung noch eine Konformitätsbescheinigung
                        mit amtlichen Werten vor. Abweichungen zwischen den
                        Angaben und den amtlichen Werten sind möglich.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    
</template>
<script>
import {
    MDBDropdown,
    MDBDropdownToggle,
    MDBDropdownMenu,
    MDBDropdownItem,
  } from 'mdb-vue-ui-kit';
  import { ref } from 'vue';
  export default {
    components: {
      MDBDropdown,
      MDBDropdownToggle,
      MDBDropdownMenu,
      MDBDropdownItem,
    },
    setup() {
      const dropdown25 = ref(false);
      return {
        dropdown25,
      };
    },
  };
  
</script>
<style scoped>
#events {
    font-family: Arial, Helvetica, sans-serif;
}
#events .header-title {
    height: 80px;
    padding: 15px 95px;
    display: flex;
    font-size: 1.1rem;
    justify-content: space-between;
    /* left: 0;
    max-width: 100%;
    overflow: visible;
    position: fixed !important;
    top: 0;
    width: 100%;
    z-index: 1000; */
}
#events .img-content{
    width:100%;
    height:711px;
    background-size: contain;
    background-repeat: no-repeat;
}
#events .header-title span {
    color: rgba(211, 207, 197, 0.863);
    cursor: pointer;
}
#events .header-title span:hover {
    color: white;
}
#events .text-white {
    position: relative;
    left: 54px;
}
#events .home {
    padding: 40px 0;
}
#events .home #back-home:hover {
    color: #00adef;
    cursor: pointer;
}
#events .bv-example-row p {
    padding-right: 30px;
}
#events .product-event {
    width: 100%;
    height: 100%;
    background: black;
    padding: 0 10px;
    position: relative;
    top: 40px;
    overflow: hidden;
}
#events .product-event .img-product {
    margin: 1px;
    overflow: hidden;
}
#events .product-event .footer-event .footer-title span {
    position: relative;
    padding: 0 30px;
    top: 100px;
    color: white;
}
#events .product-event .footer-event .footer-detail {
    position: relative;
    padding: 0 30px;
    margin-bottom: 179px;
    top: 140px;
    background: black;
    color: white;
}

#events .product-event .img-product span {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 85%;
    text-align: center;
    left: 0;
    background: black;
    opacity: 0.5;
    color: white;
    font-size: 1.2rem;
}

#events .product-event .img-product span:hover {
    transition: all 0.6s;
    transform: translateY(-100px);
}
/* .hide {
  opacity: 0;
  left: -100%;
} */
@media all and (max-width: 1450px) {
    #events .header-title {
        font-size: 0.8rem;
    }
    #events .img-content{
        position: relative;
        margin-bottom: -99px;
    }
}
@media all and (max-width: 1280px){
     #events .img-content{
       margin-bottom: -178px;
    }
}
@media all and (max-width: 1180px){
    #events .drop-down-header{
        display: block !important;
    }
    #events .header-title {
      display: none;
    }
     #events .img-content{
        margin-bottom: -218px;
    }
}
@media all and (max-width: 1000px){
     #events .img-content{
         margin-bottom: -292px;
    }
    #events .hidden-cars{
        display: none;
    }
    #events .row{
        height: 1120px;
        display: flex;
        flex-direction: column;
		padding: 0 20px;
    }
    #events .introduce{
        max-height: 250px !important;
    }
    #events .img-introduce{
        max-height: 431px !important;
        background-size: contain;
        background-repeat: no-repeat;
    }
    #events .product-event{
        position: relative;
        top: -400px;
    }
    #events .img-product{
            margin: -34px 0px;
    }
    #events .img-product-fail{
        max-height: 463px;
        overflow: hidden;
    }
    #events .footer-event {
        position: relative;
        top: -737px;
        max-height: 711px;
    }
    #events .footer-title span{
        display: flex;
        flex-direction: row;
    }
    #events .product-event .img-product span{
        /* position: absolute;
        width: 100%;
        height: 100%; */
        top: 90%;
        /* text-align: center;
        left: 0;
        background: black;
        opacity: 0.5;
        color: white;
        font-size: 1.2rem; */
    }
}
@media all and (max-width: 800px){
         #events .img-content{
         margin-bottom: -377px;
    }
}
@media all and (max-width: 720px){
    #events .mask{
        display: none;
    }
    #events .img-content{
         margin-bottom: -418px;
    }
}
@media all and (max-width: 600px){
         #events .img-content{
         margin-bottom: -468px;
    }
}

@media all and (max-width: 400px){
         #events .img-content{
        margin-bottom: -553px;
    }
}
@media all and (max-width: 300px){
         #events .img-content{
       margin-bottom: -600px;
    }
}
@media all and (max-width: 200px){
         #events .img-content{
         margin-bottom: -649px;
    }
}
</style>
