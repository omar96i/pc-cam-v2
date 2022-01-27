<template>
<div class="container col-11 my-5 px-5">
    <div class="row">
         <div v-for="producto in productos" :key="producto.id" class="col-4">
            <item :product="producto" />
        </div>
    </div>
</div>
</template>

<script>
import item from './item.vue'
    export default {
        components:{
            item
        },
        data(){
            return{
                productos:{}
            }
        },
        mounted() {
            axios.get("http://127.0.0.1:8000/api/getProducts").then(r=>{
                this.productos=r.data.productos
            })
        },
    }
</script>
