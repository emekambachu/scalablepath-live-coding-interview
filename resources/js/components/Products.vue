<template>
    <header class="py-2 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            </div>
        </div>
    </header>

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <products-item v-for="(product, index) in products"
                           :key="product.id" :product="product">
            </products-item>
        </div>
    </div>
</template>

<script>
    import ProductsItem from "./ProductsItem";
    export default {
        components: {
            ProductsItem
        },
        data(){
            return{
                products: []
            }
        },
        methods: {
            getProducts(){
                axios.get('/api/products')
                    .then((response) => {
                        if(response.data.success === true){
                            this.products = response.data.products;
                        }
                        console.log(response.data.products);
                    }).catch((error) => {
                    console.log(error);
                });
            }
        },
        mounted(){
            this.getProducts();
        }
    }
</script>

<style scoped>

</style>
