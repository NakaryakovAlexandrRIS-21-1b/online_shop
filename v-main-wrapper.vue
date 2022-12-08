<template>
    <div class="v-main-wrapper">
        <div class = "cart_catalog"
            v-if = "!IsCart"
            @click="Switch">
                Cart
        </div>
        <div 
            class = "cart_catalog"
            v-if = "IsCart"
            @click="Switch">
                Back to catalog
        </div>
        <div v-if="!products.length">Loading...</div>
        <v-catalog 
            :prod = "products"
            v-if = "(!IsCart && products.length)"
        />
        <v-cart 
            :prod = "cart_items"
            v-if = "IsCart"
            @Delet = "getCart"
            @getCart = "getCart"
         />
    </div>
</template>

<script>
import vCatalog from "./v-catalog"
import vCart from "./v-cart"

export default{
    name: 'v-main-wrapper',
    components: {
        vCatalog,
       vCart
    },
    computed: {
        
    },
    created(){
        fetch('http://localhost/queries/getProducts.php').then((response) => response.json())
            .then((queryData) => {
                this.products = queryData
            })
    },
    methods:{

        getCart(){
            fetch(`http://localhost/queries/getCart.php`).then((response) => response.json())
            .then((queryData) => {
                this.cart_items = queryData
            })
        },
        Switch(){
            if(this.IsCart) {
                this.IsCart = false
            }
            else {
                this.IsCart = true
                }
            this.getCart()
        }
    },
    props: {
    },
    data() {
        return {
            IsCart: false,
            products: [
            ],
            cart_items: [
            ]
        }
    },
}
</script>

<style>
    .v-main-wrapper{
        max-width: 900px;
        margin: 0 auto;
    }
    .cart_catalog{
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 16px;
        border: solid 1px;
        font-weight: bold;
    }
</style>