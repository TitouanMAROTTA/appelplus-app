<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div>
                <!-- <form method="get" action="{{ route('event.index') }}">
                    @csrf

                    <button type="submit">redirect to "events.blade.php"</button>
                </form> -->
                <a href="{{ route('event.index') }}">Click me to redirect to event.index</a>

            </div>
        </div>
    </div>
</x-app-layout>
