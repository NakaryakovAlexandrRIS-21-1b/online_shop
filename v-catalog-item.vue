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

    
<style>
    .v-catalog-item {
        flex-basis: 25%;
        box-shadow: 0 0 8px 0 #e0e0e0;
        padding: 16px;
        margin: 16px;
    }
    .v-catalog-item-img {
        object-fit: cover;
    }
    .product-name {
        font-weight: bold;
    }
    .product-price {
        font-weight: bold;
    }
    .btn {
        font-weight: bold;
    }
    .buttons{
        padding-left: 25px;
        padding-right: 25px;
        display: flex;
        justify-content: space-between;
    }
    .show-info{
        border-radius: 3px ;
        padding: 3px;
        border: solid 1px;
        color: #000000;
        height: 40px;
        width: 70px;
        margin-right: 5px;
    }
    .add-to-cart-btn{
        border-radius: 3px ;
        background-color: #81ff96a8;
        padding: 3px;
        border: solid 1px;
        color: #000000;
        height: 40px;
        width: 100px;
        margin-left: 5px;
    }
    .popup{
        position: absolute;
        top: auto;
        bottom: auto;
        width: 400px;
        margin-left: auto;
        margin-right: auto;
        background: #ffffff;
        box-shadow: 0 0 17px 0;
        z-index: 10;
    }
    .popup-context{
        margin-top: 10px;


    }
    .popup-wrapper{
        display: flex;
        font-weight: bold;
    }
    .popup-backgroud{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>