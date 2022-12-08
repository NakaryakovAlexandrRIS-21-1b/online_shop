<template>
    <div class = "v-catalog-item">
        <v-popup 
        class = "popup"
        v-if = "PopupVisible"
        :added = "Added"
        @Close = "ClosePopup"
        @AddToCart = "productClick(product_data.idx)"
        >
         <div class="popup-background">
            <div class = "popup-wrapper">
                <img 
                    :src="require('../assets/images/' + product_data.image)" 
                    alt="img" 
                    class = "v-catalog-item-img">
                <div class = "popup-context">
                    <h3 class = "product-name-pop">{{product_data.name}}</h3>
                    <p class = "product-context">{{product_data.context}} </p>
                </div>
            </div>
        </div>
        </v-popup>
        <img 
            :src="require('../assets/images/' + product_data.image)" 
            alt="img" 
            class = "v-catalog-item-img">
        <p class = "product-name">{{product_data.name}}</p>
        <p class = "product-price">Price: {{product_data.price}} ₽</p>
        <div class = "buttons">
            <button
                class = "show-info btn"
                @click="ShowPopup"
                >Show info
            </button>
        <button 
            class = "add-to-cart-btn btn" 
            @click ="productClick(product_data.idx)"
                >{{Added}}
        </button>
        </div>
        
    </div>
</template>
<script>
import vPopup from "./v-popup"
export default {
    name: "v-catalog-item",
    components: {
        vPopup
    },
    computed: {

    },
    methods: {
    productClick(idx) {
        fetch(`http://localhost/queries/addToCart.php?idx=${idx}`)
        this.Added = "Also in cart"

      },
    ShowPopup(){
        this.PopupVisible = true
    },
    ClosePopup(){
        this.PopupVisible = false    
    },
    },
    props: {
        product_data: {
            type: Object,
            default() {
                return {}
            }
        }
    },

    data() {
        return {
            PopupVisible: false,
            Added: "Add to cart",
        }
    }
}
</script>

    
