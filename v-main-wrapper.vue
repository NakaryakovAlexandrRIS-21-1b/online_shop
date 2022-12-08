<template>
    <div class="v-main-wrapper">
        <div class = "cart_catalog">
                Cart
        </div>
        <div 
            class = "cart_catalog">
                Back to catalog
        </div>
        <div >Loading...</div>
        <v-catalog 
            
        />
        <v-cart 
            
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
    
</style>