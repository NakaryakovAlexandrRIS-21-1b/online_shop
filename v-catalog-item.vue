<template>
    <div class = "v-catalog-item">
        <v-popup 
        class = "popup"
       
        >
         <div class="popup-background">
            <div class = "popup-wrapper">
                <img 
                    :src="../assets/images" 
                    alt="img" 
                    class = "v-catalog-item-img">
                <div class = "popup-context">
                    <h3 class = "product-name-pop"></h3>
                    <p class = "product-context"></p>
                </div>
            </div>
        </div>
        </v-popup>
        <img 
            :src="../assets/images/" 
            alt="img" 
            class = "v-catalog-item-img">
        <p class = "product-name"></p>
        <p class = "product-price">Price: ₽</p>
        <div class = "buttons">
            <button
                class = "show-info btn"
                
                >Show info
            </button>
        <button 
            class = "add-to-cart-btn btn">
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
    
    data() {
        return {
            PopupVisible: false,
            Added: "Add to cart",
        }
    }
}
</script>

    
