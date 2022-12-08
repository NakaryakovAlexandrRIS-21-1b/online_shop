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

<style >
    .popup{
        padding: 16px;
    }
    .popup_header{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .popup_content{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .popup_footer{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }
    .AddToCart{
        border-radius: 3px ;
        background-color: #81ff96a8;
        padding: 3px;
        border: solid 1px;
        color: #000000;
        height: 40px;
        width: 100px;
        font-weight: bold;
    }
    .ClosePopup{
        border-radius: 3px ;
        background-color: #ff8181;
        padding: 3px;
        border: solid 1px;
        color: #000000;
        height: 40px;
        width: 100px;
        font-weight: bold;
    }
</style>