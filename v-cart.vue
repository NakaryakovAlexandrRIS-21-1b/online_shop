<template>
    <div class = "v-cart" >
        <h1>Cart</h1>
        <div 
            v-if="!prod.length" 
            class = "NoCart">
                There are no items in cart...
        </div>
        <div class = "v-item">
            <v-cart-item 
                v-for = "(product, index) in prod"
                :key = "product.article"
                :product_data = "product"
                @deleted = "Delet"
                @PlusItem = "PlusItem(index)"
                @MinusItem = "MinusItem(index)"
            />
        </div>
        <div class = "Total">
            <h1>
                Total: {{CartCost}} ₽
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
        CartCost(){
            let Cost = 0
            for(let product of this.prod){
                Cost += product.price*product.quantity
            }
            return Cost
        },
        
    },
    props: {
        prod: {
            type: Object,
                default(){
                    return {}
                }
        },
        
    },
    methods:{
        Delet(){
            this.$emit('getCart')
        },
    },

    data() {
        return {
        }
    }
}
</script>


