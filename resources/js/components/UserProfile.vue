<template>

</template>
<script>
export default{
    data(){
        return{
            user: null
        }
    },
    mounted(){
        axios
            .get('http://localhost:8000/api/v1/userGetData')
          console.log(this.href.substring(this.href.lastIndexOf('/') + 1));
    }
}
</script>
