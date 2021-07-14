<template>
    <div :class="[alert, alertType]" role="alert" v-if="isHidden">
        <button v-on:click="isHidden = !isHidden" type="button" class="btn-close" aria-label="Close"></button>
        <p>{{ alertMessage }}</p>
    </div>
</template>

<script>
export default {
    name: 'Alert',
    // props: {
    //     type: {
    //         type : String,
    //         required: true,
    //         validator: function(value){
    //             return ['primary', 'success', 'danger'].indexOf(value) !== -1
    //         }
    //     }
    // },
    props: {
      type: String,
      message: String,
      isHidden: false
    },
    computed: {
        alertType(){
            return `alert-${ this.type }`
        },
        alertMessage(){
            return this.message;
        }
    },
    data(){
        return {
            alert: 'd-flex alert'
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .alert p {
        margin-left: 20px;
        margin-bottom: 0;
        color: #000;
    }
</style>
