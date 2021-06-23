    <div class="sidebar">



        <section class="sidebar-nav">

            <div class="title">
                <h1 class="company-name">
                    Bentornato <br>
                    {{-- {{ Auth::user()->company_name }} --}}

                    --nome compagnia--
                </h1>
            </div>

            <div class="restaurants">
                <h4>
                    Le tue attività
                </h4>

                <div class="restaurant-user-list">

                   <ul>

                        {{-- @foreach ($restaurants as $restaurant) --}}


                            <a href="">


                                    <li>

                                        {{-- {{$restaurant -> name}} --}}
                                        --foreach-restaurant--
                                    </li>

                            </a>
                            <a href="">


                                    <span class="span-edit">Modifica</span>

                            </a>

                            <a href="">


                                    <span class="span-destroy">Elimina</span>

                            </a>

                        {{-- @endforeach --}}

                   </ul>

                </div>

            </div>
            <div class="restaurant-crud">

                    <a href="">
                        {{-- {{ route('restaurants.create') }} --}}
                        Aggiungi un'attività

                    </a>

            </div>

            {{-- aggiunta legenda crud --}}

            <div class="crud-legend">
                <h4>Legenda comandi:</h4>

                <ul>

                    <li>Cancella <span>&#10060;</span></li>
                    <li>Modifica <span>&#9997;</span></li>
                    <li>Nascondi <span>&#9940;</span></li>

                </ul>
            </div>


            <div class="nav-links">
                <a class="navbar-brand" href="">

                    {{-- {{ route('restaurants.index') }} --}}
                    Home
                </a>
               <div>
                    <a class="navbar-brand" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
               </div>
            </div>

        </section>

      {{--   <section class="sidebar-main">




        </section> --}}



    </div>
