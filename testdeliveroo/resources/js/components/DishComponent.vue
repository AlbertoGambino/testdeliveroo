<template>
            <div class="col-md-3">
                <div class="card" v-on:click="greet">
                        <div class="card-container">

                            <div class="dish-description">                                  
                                <div class="card-component-name">

                                    <h1>Nome</h1>

                                    <!-- {{dish.name}} -->

                                </div>
                                
                                <div class="card-components-descriptions">

                                    <p>Descrizione</p>

                                </div>

                                <div class="card-components-price">

                                    <p>Prezzo</p>

                                </div>

                            </div>

                            <div class="dish-img">

                                <span>immagine</span>

                                <!-- <img :src=" dish.img_cover " alt=""> -->

                            </div>

                        </div>
                </div>
            </div>
</template>


<style scoped>

    .card{
        margin: 30px;
        flex-basis: 400px;
        background-color: white;
        border: 1px solid black;
    }

    .card-container{
        display: flex;
    }

    .dish-description{
        width: 65%;
    }

    .dish-img{
        width: 35%;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .dish-img span{
        border: 1px solid black;

    }

    
    .card-components-descriptions{
        background-color: aqua;
    }
    .card-component-name{
        background-color: brown;
        
    }


</style>

<script>
    export default {

        methods: {
            greet: function (event) {
            // `this` inside methods points to the Vue instance
            alert('Click' + '!')
            }
        }

    }
</script>