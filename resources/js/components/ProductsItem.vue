<template>
    <div v-if="!deleted" class="col-md-4 justify-content-center">
        <div class="card">
            <div class="card-header">
                {{ product.name }}
            </div>
            <div class="card-body">
                <img :src="product.image" width="400">
                <p>{{ product.description }}</p>
                <a @click.prevent="deleteProduct(product.id)">
                    <button class="btn btn-rounded btn-danger">
                        Delete</button>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props :{
            product: Object
        },
        data(){
            return {
                deleted: false
            }
        },
        methods: {
            deleteProduct(id){
                axios.get('/api/product/'+this.product.id+'/delete')
                    .then((response) => {
                        if(response.data.success === true){
                            this.deleted = true;
                        }
                    }).catch((error) => {
                    console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>
