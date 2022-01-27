<template>
<div class="container col-12 my-5">
    <div class="row justify-content-center">
        <form class="formulario card col-6 p-5 shadow" @submit.prevent="send()">
            <div class="text-center">
                <h3>NOSOTROS TE CONTACTAMOS</h3>
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">NOMBRES</label>
                <input type="text" v-model="datos.name" class="form-control" id="nombres" aria-describedby="emailHelp" name="nombres">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">APELLIDOS</label>
                <input type="text"  v-model="datos.last_name" class="form-control" id="apellidos" aria-describedby="emailHelp" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">TELEFONO</label>
                <input type="number"  v-model="datos.phone" class="form-control" id="telefono" aria-describedby="emailHelp" name="telefono">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email"  v-model="datos.email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">DESCRIPCION</label>
                <textarea class="form-control"  v-model="datos.message" name="descripcion"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">ENVIAR</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
    export default {
       data(){
           return{
                datos:{

                }
           }
       },
       methods: {
           send(){
               axios.post("http://127.0.0.1:8000/api/contacts", this.datos).then(r=>{
                   this.datos={}
               })
           }
       },
    }
</script>
