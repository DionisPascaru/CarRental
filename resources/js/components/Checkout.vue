<template>
    <div>
        <div class="container">
            <button v-on:click="getOrderData">Get Order Data</button>
            <alert :type="output.type" :message="output.message" :is-hidden="this.showAlert"></alert>r
            <div class="row">
                <div class="col-md-8 p-3">
                    <h2>Car selected</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="productSelected in this.$root.cart" :key="productSelected.id">
                            <td>{{ productSelected.id }}</td>
                            <td>{{ productSelected.title }}</td>
                            <td>{{ productSelected.price }}</td>
                        </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Total: </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="col-md-4">
                    <h2>Order form</h2>
                    <form class="p-3" v-on:submit="sendOrder">
                        <div class="mb-3">
                            <label for="nameID" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameID" v-model="orderData.name">
                        </div>
                        <div class="mb-3">
                            <label for="emalID" class="form-label">Email</label>
                            <input type="text" class="form-control" id="emalID" v-model="orderData.email">
                        </div>
                        <div class="mb-3">
                            <label for="phoneID" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phoneID" v-model="orderData.phone">
                        </div>
                        <div class="mb-3">
                            <label for="ageID" class="form-label">Age</label>
                            <input type="text" class="form-control" id="ageID" v-model="orderData.age">
                        </div>
                        <div class="mb-3">
                            <label for="res-startID" class="form-label">Reservation start</label>
                            <datepicker id="res-startID" class="form-control" v-model="orderData.resStart"></datepicker>
                        </div>
                        <div class="mb-3">
                            <label for="res-endID" class="form-label">Reservation end</label>
                            <datepicker id="res-endID" class="form-control" v-model="orderData.resEnd"></datepicker>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="orderData.checked">
                            <label class="form-check-label" for="flexCheckDefault">
                                Agree delivery terms and conditions
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'Checkout',
    data(){
        return {
            orderData: {},
            output: {},
            showAlert: ''
        }
    },
    methods: {
        sendOrder(e){
            this.showAlert  = true;
            e.preventDefault();
            axios.post('/reservations', {
                name: this.orderData.name,
                email: this.orderData.email,
                phone: parserInt(this.orderData.phone),
                age: parserInt(this.orderData.age),
                article_id: 7,
                reservation_start: '2021-02-16 20:39:10',
                reservation_end: '2021-02-16 20:39:10',
                status: 'pedding',
            })
            .then((response) => {
                this.output = {
                    type: 'success',
                    message: response.data
                }
            })
            .catch((error) =>{
                this.output = {
                    type: 'danger',
                    message: error.message
                }
            })
        },
        getOrderData(){
            let date = new Date().toJSON().slice(0, 19).replace('T', ' ');
            console.log(date);
            console.log(this.orderData.resStart);
            console.log(this.orderData.resEnd);
        }
    }
}
</script>

<style>
    .table {
        background-color: #fff;
    }

     form {
        background-color: #fff;
    }
</style>
