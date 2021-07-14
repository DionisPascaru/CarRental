<template>
    <div>
        <button
            @click="addToCart"
            :disabled="isProductAdded()"
            class="btn btn-primary m-auto">
            {{ isProductAdded() ? 'Added to cart' : 'Add to cart' }}
        </button>
    </div>
</template>

<script>

export default {
    name: 'AddToCart',
    props: ['productId'],
    methods: {
        addToCart(){
            this.$root.addToCart(this.productId);
        },
        isProductAdded(){
            return this.$root.isProductAdded(this.productId.id);
        }
    }
}
</script>

<style scoped>

</style>
