<template>

    <div class="card-container">

        <div class="card">

            <div class="card-component-img">

                <img :src=" restaurant.img_cover " alt="">

            </div>
            <div class="card-components-descriptions">

                <div class="card-component-name">

                    {{restaurant.name}}

                </div>
                <div class="card-component-categories">

                </div>
                <div class="card-component-description">

                    {{restaurant.description}}

                </div>
                <div class="card-component-time">

                    25-30 min

                </div>

            </div>

        </div>



    </div>

</template>

<style>

    .card-component-img img{

        width: 100%;
        height: 100%;
    }
    .card-components-descriptions{

        display: flex;
        flex-direction: column;
    }



</style>

<script>
    export default {
        props: {

            restaurant: Object
        },
        mounted() {
            console.log(this.restaurant)
        }
    }
</script>