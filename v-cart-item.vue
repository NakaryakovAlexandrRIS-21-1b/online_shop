<template lang="">
    <div class = "v-cart-item">
        <div class = "v-cart-item img">
            <img 
                :src="../assets/images/" 
                alt="img" 
                class = "v-catalog-item-img"
            >
        </div>
        <div class = "v-item-info" >
            <p class = "product-name"></p>
            <p class = "product-price">Price:  ₽</p>
        </div>
        <div class = "v-item-quantity">
            <p>quantity</p>
            <button >+</button>
            <p>{{product_data.quantity}}</p>
            <button >-</button>
        </div>
        <div>
            <button >Delete</button>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        
    },
    methods:{
       
    }

}
</script>
