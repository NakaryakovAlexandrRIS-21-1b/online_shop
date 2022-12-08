<template >
    <div class = "v-catalog">
        <h1>Catalog</h1>
        <div class="selector">
            <select 
            class = "select"
            v-model = "selected"
            @change="SortByFilter">
                <option 
                v-for = "option in options"
                :key = "option"
                :value = "option"
                >{{option}}
                </option>
            </select>
        </div>
        <div class = "catalog-list">
            <v-catalog-item 
                v-for = "product in sortedCatalog" 
                :key="product.article"
                :product_data = "product"
                @GetCart="GetCart"
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
            SortByFilter(){
                let vm = this
                this.sortedCatalog = []
                this.prod.map(function(item){
                    if(vm.selected != "All"){
                        if(item.category == vm.selected){
                            vm.sortedCatalog.push(item)
                        }
                    }
                    else{
                        vm.sortedCatalog.push(item)
                    }
                })
            },
            
        },
        mounted(){
            this.sortedCatalog = this.prod
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

    
