<template >
    <div class = "v-catalog">
        <h1>Catalog</h1>
        <div class="selector">
            <select 
            class = "select" >
            </select>
        </div>
        <div class = "catalog-list">
            <v-catalog-item 
                
            />

        </div>
    </div>
    
</template>

<script>
    import vCatalogItem from "./v-catalog-item"

    export default {
        name: "v-catalog",
        components: {
            vCatalogItem
        },
        computed: {

        },
        props: 
            ['prod'],
        methods: {
        
        },
        
        data() {
            return {
                sortedCatalog: [],
                selected:"All",
                options:[
                    "All",
                    "Male",
                    "Female"
                ]
            }
        }
    }
</script>

    
