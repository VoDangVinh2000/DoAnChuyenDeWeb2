<template lang="">
    <div>
        <h1>Thái huy </h1>
    </div>
</template>
<script>
export default {
    data() {
        return {
            load:true
        }
    },
     mounted() {
        //Check expire token of user
        var user = JSON.parse(localStorage.getItem("user"));
        if (user == null) {
            this.load = false;
            window.location.href = "/login";
        }
    },

}
</script>
<style lang="">
    
</style>