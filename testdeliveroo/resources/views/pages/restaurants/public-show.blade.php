@extends('layouts.public-restaurant-layout')

@section('content')

    <div class="protected-restaurant-show-top-container">

            <div class="restaurant-show-info-container">

                <div class="description-left">

                    <div class="restaurant-logo-name">

                        <div class="restaurant-logo">

                            --logo--
                            <img src="" alt="">


                        </div>
                        <div class="restaurant-name">

                            <h1>--nome-ristorante--</h1>

                        </div>



                    </div>

                    <div class="restaurant-address">

                        --restaurant-address--

                    </div>

                    <div class="restaurant-email">

                        --restaurant-email--

                    </div>

                    <div class="restaurant-telephone">

                        --restaurant-telephone--

                    </div>

                    <div class="restaurant-description">

                        <p>--restaurant--description</p>

                    </div>


                </div>
                <div class="description-right">

                    <div class="card-restaurant">

                        <div class="restaurant-img-cover">

                            <h1>img restaurant</h1>

                            <img src="../storage/img/rest.png" alt="">

                        </div>
                    <div class="tempo-consegna">

                            Consegna in 30 minuti

                    </div>
                    <div class="delivery-cost">

                            --delivery-cost--

                    </div>
                    <div class="allow-cash">

                            --allowcash--

                    </div>

                    </div>



                </div>

            </div>

        </div>
        <div class="categories-spacer">

            --categories?--

        </div>
        <div class="dishes-container">

            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>
            <dish-component></dish-component>

        </div>




@endsection
