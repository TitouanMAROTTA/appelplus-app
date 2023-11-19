<link rel="stylesheet" href="{{ asset('css/events.css') }}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evenements à venir') }}
        </h2>
    </x-slot>

    <div class="evenements">


    <!-- ======================= -->
    @if (1)
        
        
        <a href="{{ route('event.create') }}" class="inner-shadow">Créer un évènement</a>

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
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt="">
                            
                            <div>
                                <h3>{{ $event->title }}</h3>
                                <p class="truncateTextToMaxLength100">{{ $event->content }}</p>
                            </div>
                        </div>

                        <div class="date">
                            <p class="month truncateTextToMaxLength3">{{ $event->date->format('F')}}</p>
                            <p class="number">{{ $event->date->format('j')}}</p>
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
                    <p class="card-date inner-shadow">{{ $event->date->format('j F Y')}}</p>

                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEUA/wAAAADX19cA2wAAVwAAUgAAGgAAWwAASwAAVgAA4gAA3QAARgAAugDU1NT39/cDBq/KAAABK0lEQVR4nO3PiQ2DMADAwAB96bf/tmWJqrrIN4E9LtfTxG7LOu5jZvtxeP53xE9tHfI69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehr0Nfh74OfR36OvR16OvQ16GvQ1+Hvg59Hfo69HXo69DXoa9DX4e+Dn0d+jr0dejr0Nehb/7Dx3H43LeJvY7DZXLvsc7t/fkCwNkSni/v0mIAAAAASUVORK5CYII=" alt="">
                        <p class="card-title">{{ $event->title}}</p>
                        <p class="card-text truncateTextToMaxLength300">{{ $event->content}}</p>
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
    }
    
            // Truncated text for 100 caracters (truncateTextToMaxLength100)
            const maxLength100 = 100;

            // Get all elements with the specified class
            const textContainersToMaxLength100 = document.querySelectorAll('.truncateTextToMaxLength100');

            textContainersToMaxLength100.forEach(textContainerToMaxLength100 => {
                const originalText = textContainerToMaxLength100.textContent.trim();
                const truncatedTextToMaxLength100 = truncateTextToLength(originalText, maxLength100);
                textContainerToMaxLength100.innerHTML = truncatedTextToMaxLength100;
            });



            // Truncated text for 300 caracters (truncateTextToMaxLength300)
            const maxLength300 = 250;

            // Get all elements with the specified class
            const textContainersToMaxLength300 = document.querySelectorAll('.truncateTextToMaxLength300');

            textContainersToMaxLength300.forEach(textContainerToMaxLength300 => {
                const originalText = textContainerToMaxLength300.textContent.trim();
                const truncatedTextToMaxLength300 = truncateTextToLength(originalText, maxLength300);
                textContainerToMaxLength300.innerHTML = truncatedTextToMaxLength300;
            });



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
