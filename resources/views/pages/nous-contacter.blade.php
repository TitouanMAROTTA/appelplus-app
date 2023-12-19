<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/nous-contacter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll-to-top-button.css') }}">

        <main role="work-in-progress" class="work-in-progress">
            <div class="card has-text-centered is-wide">
                <div class="card-content">
                    <h1>Work in progress</h1>
                    <p>Cette page est en cours de réalisation.</p>
                    <p>Vous y retrouverez un formulaire de contact. (voir maquette)</p>
                </div>
            </div>
        </main>

        <!-- Scroll to Top Button -->
        <div id="scrollToTopBtn" onclick="scrollToTop()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="11" stroke="#007BFF" stroke-width="2" fill="none"/>
                <path d="M12 8v8M8 12l4-4 4 4"/>
            </svg>
        </div>

        <script src="{{ asset('js/scroll-to-top-button.js') }}"></script>
</x-app-layout>
	