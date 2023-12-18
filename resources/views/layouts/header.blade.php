<!-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Header</title>
  <link rel="stylesheet" href="style_header.css">

</head>
<body> -->

        <!-- partial:index.partial.html -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive navbar</title>
</head> -->

<link rel="stylesheet" href="{{ asset('css/header.css') }}">


<body id="header">
    <nav>
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo-APPEL.svg') }}" alt="Logo Image"></a>
        </div>
        <div class="burger_menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><x-lien-nous-rejoindre>Nous rejoindre</x-lien-nous-rejoindre></li>
            <li><x-lien-nos-evenements>Nos événements</x-lien-nos-evenements>
            <li><x-lien-qui-sommes-nous>Qui sommes-nous</x-lien-qui-sommes-nous></li>
            <li><x-lien-l-actualite>L'actualité</x-lien-l-actualite></li>
            <li><x-lien-nous-contacter></x-lien-nous-contacter>>Nous contacter</a></li>
            <li>
                <button class="give-button round-button" href="#">
                    <img src="{{ asset('images/nous-soutenir.webp') }}" alt="" class="button-image">
                    <img src="{{ asset('images/nous-soutenir-inverted.webp') }}" alt="Description de l'image au survol" class="button-image-hover">
                    <span>NOUS SOUTENIR</span>
                </button>
            </li>
        </ul>

        @if(Auth::user())

            <!-- Ajout dropdown pour la partie user -->

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        @endif
    </nav>

    <script src="{{ asset('js/header-nav.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>

</body>
<!-- </html> -->
    <!-- partial -->

<!-- </body> -->
<!-- </html> -->