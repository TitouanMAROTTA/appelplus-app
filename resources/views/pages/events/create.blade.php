<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un nouvel évènement') }}
        </h2>
    </x-slot>


    <p>sur cette page vous allez pouvoir créer un nouvel évènement</p>
    

                
    <form method="post" action="{{ route('event.create') }}">
        @csrf



        <button type="submit">redirect to "events.blade.php"</button>
    </form>


</x-app-layout>
