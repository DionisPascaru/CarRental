import Vue from "vue";
import HomePage from "./components/HomePage";
import Alert from "./components/Alert";
import Cart from "./components/Cart";
import AddToCart from './components/AddToCart';
import Checkout from './components/Checkout';
import Datepicker from "vuejs-datepicker";

require('./bootstrap');
Vue.component('hello-world', HomePage);
Vue.component('alert', Alert)
Vue.component('cart', Cart)
Vue.component('add-to-cart', AddToCart);
Vue.component('checkout', Checkout);
Vue.component('datepicker', Datepicker);


const app = new Vue({
    el: '#app',
    data(){
        return {
            cart: []
        }
    },
    methods: {
        addToCart(productId){
            if(!this.isProductAdded(productId)){
                this.cart.push(productId);
                localStorage.setItem('productToCart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(productId) {
            const productIndex = this.cart.some(product => product.id === productId);
            return productIndex;
        }
    }
});
