<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll-to-top-button.css') }}">

            <main>
                <div class="evenements">

                    <!-- ======================= -->
                    @if ($authorized === true)
                    
                        <!-- Renvoie vers la page "de gestion des evenements" -->
                        <a href="{{ route('eventadmin.index') }}" class="inner-shadow">Gérer les évènements</a>

                        @isset($success)
                            <p class="success">{{ $success }}</p>
                        @endisset

                    @endif

                    <section class="evenements-a-venir">
                        <br><br>
                        <h2>Evénements à venir</h2>
                        <br><br>

                        <div class="evenements-a-venir-main">
                            <ul class="events">
                                @if(count($eventsFuture) > 0)
                                    @foreach ($eventsFuture as $index => $event)
                                        @php
                                            // Détermine une classe CSS en fonction de l'index de la boucle pour changer de couleur avec condition ternaire
                                            $colorClass = ($index % 3 == 0) ? 'red' : (($index % 3 == 1) ? 'yellow' : 'green');
                                        @endphp

                                        <a href="event-unique">
                                            <li id="{{ $event->id }}" class="event-item">
                                                    <div class="left_side">
                                                        <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt=""> -->
                                                        <img src="{{ asset('images/fondqui.webp') }}" alt="">
        
                                                        <div class="event-details">
                                                            <div class=short-text-container-250px>
                                                                <h3 class="short-text-title {{ $colorClass }}" title="{{ $event->title }}">{{ $event->title }}</h3>
                                                            </div>
        
                                                            <div class=short-text-container-250px>
                                                                <p class="short-text-description">{{ $event->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="date">
                                                        <p class="month {{ $colorClass }}">{{ $event->start_date->format('F')}}</p>
                                                        <p class="number {{ $colorClass }}">{{ $event->start_date->format('j')}}</p>
                                                    </div>
                                            </li>
                                        </a>
                                    @endforeach
                                @else
                                    <li>
                                        <p>Aucun événement recensé.</p>
                                    </li>
                                @endif
                            </ul>

                            <div class="evenements-a-venir-secondary-container">
                                <div class="evenements-a-venir-secondary">
                                    <div class="gros_carre_gris">
                                        <img src="{{ asset('images/calendrier.webp') }}" alt="">
                                    </div>

                                    <div class="petit_carre_gris">
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </section>

                    <section class="evenements-passes">
                        <br>
                        <h2>Récapitulatif des événements passés</h2>
                        <br><br>

                        <ul class="cards">
                            @if(count($eventsPast) > 0)
                                @foreach ($eventsPast as $index => $event)
                                    @php
                                        // Détermine une classe CSS en fonction de l'index de la boucle pour changer de couleur
                                        $colorClass = ($index % 3 == 0) ? 'red' : (($index % 3 == 1) ? 'yellow' : 'green');
                                        $backgroundColorClass = ($index % 3 == 0) ? 'redBackground' : (($index % 3 == 1) ? 'yellowBackground' : 'greenBackground');
                                    @endphp
                                    <li class="card" id="{{ $event->id }}">

                                        <div class="content">
                                            <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt=""> -->
                                            <img src="{{ asset('images/fondqui.webp') }}" alt="">
                                            
                                            <div class="card-title-container">
                                                <p class="card-title {{ $colorClass }}" title="{{ $event->title }}">{{ $event->title}}</p>
                                            </div>
                                            <p class="card-text">{{ $event->description}}</p>
                                        </div>

                                        <!-- <a href="{{ route('event.index') }}" class="inner-shadow {{ $backgroundColorClass }}">Voir le récap</a> -->
                                        <a href="event-unique" class="inner-shadow {{ $backgroundColorClass }}">Voir le récap</a>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <p>Aucun événement recensé.</p>
                                </li>
                            @endif
                        </ul>
                    </section>

                    <section class="notre-programmation">
                        <br><br><br>
                        <h2>Retrouvez toute notre programmation sur notre compte Instagram !</h2>
                        <br><br>
                        <div class="img-center-container">
                            <img src="{{ asset('images/notre-programmation.webp') }}" alt="">
                        </div>
                    </section>

                    

                </div>
            </main>

            <!-- Scroll to Top Button -->
            <div id="scrollToTopBtn" onclick="scrollToTop()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="11" stroke="#007BFF" stroke-width="2" fill="none"/>
                    <path d="M12 8v8M8 12l4-4 4 4"/>
                </svg>
            </div>

            <script src="script.js"></script>
            <script src="{{ asset('js/scroll-to-top-button.js') }}"></script>
</x-app-layout>
