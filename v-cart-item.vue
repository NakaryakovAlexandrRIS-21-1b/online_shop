<template lang="">
    <div class = "v-cart-item">
        <div class = "v-cart-item img">
            <img 
                :src="require('../assets/images/' + product_data.image)" 
                alt="img" 
                class = "v-catalog-item-img"
            >
        </div>
        <div class = "v-item-info" >
            <p class = "product-name">{{product_data.name}}</p>
            <p class = "product-price">Price: {{product_data.price}} ₽</p>
        </div>
        <div class = "v-item-quantity">
            <p>quantity</p>
            <button @click = "PlusItem(product_data.idx)">+</button>
            <p>{{product_data.quantity}}</p>
            <button @click = "MinusItem(product_data.idx)">-</button>
        </div>
        <div>
            <button @click = "DeleteFromCart(product_data.idx)">Delete</button>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        product_data: {
            type: Object,
            default() {
                return {}
            }
        }
    },
    methods:{
        
        async DeleteFromCart(idx){
            await fetch(`http://localhost/queries/deleteFromCart.php?idx=${idx}`)
            await this.$emit("deleted")
        },
        async PlusItem(idx){
            await fetch(`http://localhost/queries/addQuantity.php?idx=${idx}`)
            await this.$emit("deleted")
            
        },
        async MinusItem(idx){
            await fetch(`http://localhost/queries/minusQuantity.php?idx=${idx}`)
            await this.$emit("deleted")
            
        }
    }

}
</script>
<style>
    .v-cart-item {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 0 8px 0 #e0e0e0;
        padding: 16px;
        margin-bottom: 16px;
    }
    .v-item-quantity {
        font-weight: bold;
    }
</style>