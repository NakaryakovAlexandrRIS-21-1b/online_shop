<template >
    <div class = "popup">
        <div class="popup_content">
            <slot></slot>
        </div>
        <div class="popup_footer">
            <button class="ClosePopup"
            >Close</button>
            <button class = "AddToCart"
            ></button>
        </div>
    </div>
</template>

<script>

export default {

    data(){
        return {
            
        }
    }
}
</script>

