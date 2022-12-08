<template >
    <div class = "popup">
        <div class="popup_content">
            <slot></slot>
        </div>
        <div class="popup_footer">
            <button class="ClosePopup"
            @click = "Close"
            >Close</button>
            <button class = "AddToCart"
            @click = "AddToCart"
            >{{Added}}</button>
        </div>
    </div>
</template>

<script>

export default {
    methods:{
        Close(){
            this.$emit("Close")
        },
        AddToCart(){
            this.$emit("AddToCart")
            this.Added = "Also in Cart"
            this.$emit("Close")
        }
    },
    props:
        ['added'],
    data(){
        return {
            Added: this.added
        }
    }
}
</script>

