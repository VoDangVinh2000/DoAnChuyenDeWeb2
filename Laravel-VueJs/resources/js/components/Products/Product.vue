
<template>
    <div>
        <div class="container">
            <div class="row type">
                <!-- Các Loại xe -->
                <div class="col-md-3">
                    <p> <a href="#" class="text-muted h5 box" v-for="itemSubgroup in data_subgroup" :key="itemSubgroup.id">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 77.9 25.5"
                            class="dh-io-vmos_3DKIy size"
                        >
                            <path
                                d="M12.559 14.698c-3.01 0-5.401 2.391-5.401 5.401S9.549 25.5 12.559 25.5s5.401-2.391 5.401-5.401c-.089-3.01-2.479-5.401-5.401-5.401zm0 8.766c-1.859 0-3.453-1.505-3.453-3.453 0-1.859 1.505-3.453 3.453-3.453s3.453 1.505 3.453 3.453c-.088 1.947-1.593 3.453-3.453 3.453z"
                            ></path>
                            <circle cx="12.559" cy="20.099" r="2.479"></circle>
                            <path
                                d="M76.66 13.193l-.885-3.984.443-1.505-7.083-1.151S58.333 1.152 56.209.887C49.215.002 40.361-.353 34.163.976c0 0-2.922 1.062-11.156 6.817 0 0-13.458.885-18.416 2.745l-2.036.797-2.125 3.01.177 2.125-.62.708s.443 3.896.354 3.896l5.666.974h.177a7.38 7.38 0 01-.266-1.948c0-3.63 3.01-6.64 6.64-6.64s6.64 3.01 6.64 6.64c0 .708-.089 1.328-.266 1.948h37.806a6.911 6.911 0 01-.266-1.948c0-3.63 3.01-6.64 6.64-6.64s6.64 3.01 6.64 6.64c0 .443 0 .797-.089 1.151h.266l7.526-1.24.443-5.755c.002 0-.529-.443-1.238-1.063zM5.034 14.521l-3.01 1.151s.62-2.125 2.036-3.01c.796-.443 3.541-1.062 3.541-1.062l-2.567 2.921zm57.992-5.578c-6.64.708-14.874.531-30.191 1.328-5.578.266-10.005.443-10.713.531-3.01.266-9.031.354-10.89.62 2.302-.885 7.88-1.417 12.395-1.594 5.047-3.719 9.562-6.552 10.89-6.906 1.417-.443 4.515-1.062 8.677-.974l-.62 7.083c.885 0 2.568-.089 2.656-.089l.62-6.817c2.479.089 7.968.354 10.447.885l-.443 5.578c.266 0 1.417 0 1.859-.089l.443-5.047c4.692 2.125 7.614 5.312 7.614 5.312 0-.086-1.062.002-2.744.179z"
                            ></path>
                            <path
                                d="M63.026 14.698c-3.01 0-5.401 2.391-5.401 5.401s2.391 5.401 5.401 5.401 5.401-2.391 5.401-5.401-2.391-5.401-5.401-5.401zm0 8.766c-1.859 0-3.453-1.505-3.453-3.453 0-1.859 1.505-3.453 3.453-3.453 1.859 0 3.453 1.505 3.453 3.453 0 1.947-1.594 3.453-3.453 3.453z"
                            ></path>
                            <circle cx="63.026" cy="20.099" r="2.479"></circle>
                            </svg>
                             <span> {{itemSubgroup.subgroup_name}}</span>
                        </a>
                    </p>

                </div>
                <!-- Hiển thị sản phẩm -->
                <div class="col-md-9">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Product.vue",
    data(){
        return {
            data_subgroup: [],
        };
    },
    methods: {
        async getDataSubgroup(){
            const url = "/api/all-subgroup";
            const reponse = await fetch(url);
            const data = await reponse.json();
            console.log(data);
            return data;
        },
    },
    async created() {
        this.data_subgroup = await this.getDataSubgroup();
    }
};
</script>

<style scoped>

.size {
    width: 50px;
    height: 30px;
}
.center {
    text-align: center;
}
.col-md-3 a{
    text-decoration: none
}
.col-md-3 p{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
}

.col-md-3 .box:focus{
    font-size: 1.5rem;
    fill: black;
      color:black !important;
    position: relative;
}
.col-md-3 .box:focus::before{
    content: "";
    position: absolute;
    top: 25%;
    left: -30px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtio81g27eHB9hRmugVQlCXTsbZ05MVDlYclahMQHxH2uj45grCtwCPomj332LnfA_lgc&usqp=CAU);
    background-size: cover;
}
.type{
    flex-direction: column;
}
@media all and (max-width: 600px) {
    .col-md-3 .box:focus::before{
        display: none;
    }
    .col-md-3 p{
    display: block;
    }
  .col-md-3{
    display: flex;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: center;
    }
     .col-md-3 a{
         font-size: 0.6rem !important;
         margin: 0 10px !important;
     }
    .col-md-3 a:hover{
    flex-shrink: 0;
	margin: 0 10px;
	height: calc(100px + 6vw);
	width: calc(100px + 6vw);
	border: calc(4px + 0.2vw) solid transparent;
	background-origin: border-box;
	background-clip: content-box, border-box;
	background-size: cover;
	box-sizing: border-box;
	box-shadow: 0 0 5px 5px #ccff99;
    border-radius: 20%;
    position: relative;
    }

    .size{
        display: none;
    }
    .container{
        margin-top:20px !important;
    }
}
@media all and (max-width: 990px){
         .col-md-3 a{
         font-size: 0.8rem !important;
         margin: 0 -10px;
     }
}



</style>
