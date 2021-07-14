<template>
    <div>
        <li class="nav-item position-relative">
             <div>
                 <a href="#" class="nav-link" v-on:click="isHidden = !isHidden">Cart {{ cartCount }}</a>
             </div>
             <ul class="list-group position-absolute" v-if="isHidden">
                 <li class="list-group-item d-flex justify-content-between" v-for="product in this.$root.cart" :key="product.id">
                     <div class="">
                         <p>{{ product.title }}</p>
                     </div>
                     <div>
                         <button class="btn btn-danger" @click="deleteProductCart(product.id)">delete</button>
                     </div>
                 </li>
                 <li class="list-group-item bg-primary d-flex justify-content-between">
                     <a href="/checkout">Checkout</a>
                     <p :testTotal="test" class="text-white">{{ this.totalPrice }}$</p>
                 </li>
             </ul>

        </li>
    </div>
</template>

<script>

export default {
    name: 'Cart',

    data(){
        return {
            isHidden: false,
            totalPrice: 0
        }
    },
    computed: {
        cartCount() {
            this.getCartTotalPrice();
            return this.$root.cart.length;
        }
    },
    mounted() {
        if (localStorage.getItem('productToCart'))
            this.$root.cart = JSON.parse(localStorage.getItem('productToCart'));
    },
    methods: {
        deleteProductCart(e) {
            this.$root.cart = this.$root.cart.filter(element => element.id !== e);
            localStorage.setItem('productToCart', JSON.stringify(this.$root.cart));
            this.getCartTotalPrice();
        },
        getCartTotalPrice(){
            this.totalPrice = 0;
            this.$root.cart.forEach(item => {
                this.totalPrice += parseInt(item.price);
            });

            return this.totalPrice;
        }
    }
}

</script>

<style scoped>
    .list-group-item p {
        color: #000;
    }

    .list-group-item a {
        color: #fff;
    }
</style>
