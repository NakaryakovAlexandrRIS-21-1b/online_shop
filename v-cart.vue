<template>
    <div class = "v-cart" >
        <h1>Cart</h1>
        <div 
            class = "NoCart">
                There are no items in cart...
        </div>
        <div class = "v-item">
            <v-cart-item 
            
            />
        </div>
        <div class = "Total">
            <h1>
                Total: 0 ₽
            </h1>
        </div>
    </div>
</template>
<script>
import vCartItem from './v-cart-item'
export default {
    name: "v-cart",
    components: {
        vCartItem
    },
    computed: {
      
    },
    props: {
       
    },
    methods:{
       
    },

    data() {
        return {
        }
    }
}
</script>


