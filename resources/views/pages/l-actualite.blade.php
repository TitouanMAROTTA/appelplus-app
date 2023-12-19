<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/l-actualite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll-to-top-button.css') }}">

        <main role="work-in-progress" class="work-in-progress">
            <div class="card has-text-centered is-wide">
                <div class="card-content">
                    <h1>Work in progress</h1>
                        <p>Cette page est en cours de réalisation.</p>
                        <p>Vous y retrouverez les actualitées. (voir maquette)</p>
                </div>
            </div>
        </main>
        
        <div class="div-centered">
            <h2>Actualité de PictaVox : JT qui présente l'histoire de Pauline</h2>
            <iframe width="1730" height="666" src="https://www.youtube.com/embed/ujdP92XACV0" title="Reportage Pauline Laroche | Le 20H - PictaVox (20/12/2023)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <!-- Scroll to Top Button -->
        <div id="scrollToTopBtn" onclick="scrollToTop()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="11" stroke="#007BFF" stroke-width="2" fill="none"/>
                <path d="M12 8v8M8 12l4-4 4 4"/>
            </svg>
        </div>

        <script src="{{ asset('js/scroll-to-top-button.js') }}"></script>
    
</x-app-layout>
	