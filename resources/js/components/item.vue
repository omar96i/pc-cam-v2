<template>
<div class="card col-12 my-3 shadow">
  <img :src="`http://127.0.0.1:8000/images/${product.image_url}`" style="width: auto; height: 250px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">{{product.name}}</h2>
    <p class="card-text">{{product.description}}</p>
    <div class="card-title">${{product.value}}</div>
  </div>
</div>
</template>
<script>
    export default {
        props:['product']
    }
</script>
