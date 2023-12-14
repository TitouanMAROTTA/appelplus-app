<link rel="stylesheet" href="{{ asset('css/events.css') }}">

<x-app-layout>


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
        <h2>Evenements à venir</h2>

        <div class="evenements-a-venir-main">
            <ul class="events">
                @foreach ($events as $event)
                    <li id={{ $event->id }}>
                        <div class="left_side">
                            <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt=""> -->
                            <img src="{{ asset('images/fondqui.webp') }}" alt="">

                            <div>
                                <h3 class="truncateTextToMaxLength15" title="{{ $event->title }}">{{ $event->title }}</h3>
                                <p class="truncateTextToMaxLength100">{{ $event->description }}</p>
                            </div>
                        </div>

                        <div class="date">

                        <p class="month truncateTextToMaxLength3">{{ $event->date}}</p>
                            <p class="month truncateTextToMaxLength3">{{ $event->start_date->format('F')}}</p>
                            <p class="number">{{ $event->start_date->format('j')}}</p>

                            
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="evenements-a-venir-secondary-container">
                <div class="evenements-a-venir-secondary">
                    <div class="gros_carre_gris">
                        
                    </div>

                    <div class="petit_carre_gris">
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>





    <section class="evenements-passes">
        <h2>Récapitulatif des évènements passés</h2>

        <ul class="cards">
            @foreach ($events as $event)
                <li class="card" id={{ $event->id }}>

                    <div class="content">
                        <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt=""> -->
                        <img src="{{ asset('images/fondqui.webp') }}" alt="">
                        
                        <p class="card-title">{{ $event->title}}</p>
                        <p class="card-text truncateTextToMaxLength250">{{ $event->description}}</p>
                    </div>

                    <a href="{{ route('event.index') }}" class="inner-shadow">Voir le récap</a>
                </li>
            @endforeach
        </ul>
    </section>










</div>
</x-app-layout>






















<script>

    // ========================================================
    // ==================TRUNCATED TEXT========================
    // ========================================================

    // Function to get a truncated text with "..." at the end
    function truncateTextToLength(text, maxLength) {
        if (text.length > maxLength) {
            return text.substring(0, maxLength) + '...';
        } else {
            return text;
        }
    }//faire attention à ce que le caractère ne soit pas coupé au milieu, avec un emoji par exemple - utiliser fonction de normalization unicode poru les regrouper

            // ========================================================
            // ================= Truncated text WITH '...' ============
            // ========================================================
    
            // Truncated text for 250 caracters (truncateTextToMaxLength250)
            const maxLength250 = 250;

            // Get all elements with the specified class
            const textContainersToMaxLength250 = document.querySelectorAll('.truncateTextToMaxLength250');

            textContainersToMaxLength250.forEach(textContainerToMaxLength250 => {
                const originalText = textContainerToMaxLength250.textContent.trim();
                const truncatedTextToMaxLength250 = truncateTextToLength(originalText, maxLength250);
                textContainerToMaxLength250.innerHTML = truncatedTextToMaxLength250;
            });


            // Truncated text for 100 caracters (truncateTextToMaxLength100)
            const maxLength100 = 100;

            // Get all elements with the specified class
            const textContainersToMaxLength100 = document.querySelectorAll('.truncateTextToMaxLength100');

            textContainersToMaxLength100.forEach(textContainerToMaxLength100 => {
                const originalText = textContainerToMaxLength100.textContent.trim();
                const truncatedTextToMaxLength100 = truncateTextToLength(originalText, maxLength100);
                textContainerToMaxLength100.innerHTML = truncatedTextToMaxLength100;
            });


            // Truncated text for 15 caracters (truncateTextToMaxLength15)
            const maxLength15 = 15;

            // Get all elements with the specified class
            const textContainersToMaxLength15 = document.querySelectorAll('.truncateTextToMaxLength15');

            textContainersToMaxLength15.forEach(textContainerToMaxLength15 => {
                const originalText = textContainerToMaxLength15.textContent.trim();
                const truncatedTextToMaxLength15 = truncateTextToLength(originalText, maxLength15);
                textContainerToMaxLength15.innerHTML = truncatedTextToMaxLength15;
            });



            // ========================================================
            // ============== Truncated text WITHOUT '...' ============
            // ========================================================


            // Truncated text for 3 caracters (truncateTextToMaxLength3)
            const maxLength3 = 3;

            // Get all elements with the specified class
            const textContainersToMaxLength3 = document.querySelectorAll('.truncateTextToMaxLength3');

            textContainersToMaxLength3.forEach(textContainerToMaxLength3 => {
                const originalText = textContainerToMaxLength3.textContent.trim();
                const truncatedTextToMaxLength3 = originalText.substring(0, maxLength3);
                textContainerToMaxLength3.innerHTML = truncatedTextToMaxLength3;
            });
</script>
