<x-app-layout>
  <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
  <link rel="stylesheet" href="{{ asset('css/scroll-to-top-button.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style-button.css') }}">


  <!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" href="./style-button.css"> -->
      <!-- <link rel="stylesheet" href="style.css"> -->
      <!-- <link rel="stylesheet" href="https://use.typekit.net/vcy7kge.css"> -->
      <title>APPEL+ | Association LGBTQIA+</title>
    </head>

    <body>
      <aside class="banniere">
        <div>
          <button class="btn-3 btn-blanc"><span><x-lien-nous-rejoindre>Rejoignez-nous</x-lien-nous-rejoindre></span></button>
          <a href="#section1"><img src="{{ asset('images/flèche scroll.webp') }}" alt=""></a>
        </div>
      </aside>

      <main>
        <section id="section1" class="presentation scroll-adjust">
          <div>
            <h1>Notre liberté Notre identité</h1>
            <p>L'association LGBTQIA+ est un groupe dynamique et inclusif qui célèbre la diversité des orientations sexuelles et des identités de genre. Notre mission est de promouvoir l'égalité des droits, la visibilité et le respect pour tous, quel que soit leur genre ou leur orientation. Nous offrons un espace sûr où les membres de la communauté LGBTQIA+ et leurs alliés peuvent se rassembler, partager leurs expériences et trouver un soutien mutuel.</p>
            <button class="btn-3"><span><x-lien-qui-sommes-nous>Découvrir l'asso</x-lien-qui-sommes-nous></span></button>
          </div>
          <figure>
            <img src="{{ asset('images/illustration_lgbtqia.webp') }}" alt="">
          </figure>
        </section>
        <section class="soutenir">
          <h2>Soutenir l'association</h2>
          <ul>
            <li class="btn btn-rouge"><a href="#">Faire un don</a></li>
            <li class="btn"><a href="#"><span><x-lien-nous-rejoindre>Adhérer</x-lien-nous-rejoindre></span></a></li>
            <li class="btn btn-fond-blanc"><a href="#">Partager</a></li>
          </ul>
        </section>
        <section class="evenements trois-colonnes">
          <h2>Évènements à venir</h2>
            <article>
              <a href="#">
              <figure>
                <img src="{{ asset('images/joyeux-gay-pride-festival-lgbt.webp') }}" alt="">
                <figcaption>
                  <p>ven</p>
                  <p>13</p>
                  <p>nov</p>
                </figcaption>
              </figure>
              </a>
            </article>
            <article>
              <a href="#">
              <figure>
                <img src="{{ asset('images/amis-non-binaires-assis-tenant-drapeau-lgbt.webp') }}" alt="">
                  <figcaption>
                  <p>mer</p>
                  <p>29</p>
                  <p>nov</p>
                </figcaption>
              </figure>
              </a>
            </article>
            <article>
              <a href="#">
              <figure>
                <img src="{{ asset('images/jeunes-celebrent-mois-fierte.webp') }}" alt="">
                <figcaption>
                  <p>jeu</p>
                  <p>14</p>
                  <p>déc</p>
                </figcaption>
              </figure>
              </a>
            </article>

            <div>
              <button class="btn-3">
                <span>
                  <x-lien-nos-evenements>Voir plus</x-lien-nos-evenements>
                </span>
              </button>
            </div>
        </section>

        <section class="actualites trois-colonnes">
          <h2>L'actu de la semaine</h2>
          <article>
            <a href="#">
            <figure>
              <img src="{{ asset('images/pexels-brett-sayles-1167034.webp') }}" alt="">
            </figure>
            <h3>Rencontre de rentrée</h3>
            <p>Notre rencontre de rentrée LGBTQIA+ a été un vibrant témoignage de solidarité et d'inclusion, rassemblant la communauté pour célébrer la diversité et promouvoir l'égalité des droits.</p>
            </a>
          </article>
          <article>
            <a href="#">
            <figure>
              <img src="{{ asset('images/bureau.webp') }}" alt="">
            </figure>
            <h3>Changement de bureau !</h3>
            <p>La création d'un nouveau bureau d'association est un moment excitant et prometteur. Tout commence par la passion et l'engagement des membres fondateurs qui partagent une vision commune.</p>
            </a>
          </article>
          <article>
            <a href="#">
            <figure>
              <img src="{{ asset('images/pexels-rosemary-ketchum-2306782.webp') }}" alt="">
            </figure>
            <h3>Récap pride 2023</h3>
            <p>Venez découvrir le Récap de la Pride 2023. Une vidéo qui célèbre l'énergie, la diversité et les moments significatifs de la marche de la fierté LGBTQIA+ de cette année.</p>
            </a>
          </article>

          <div>
            <button class="btn-3">
              <span>
                <x-lien-l-actualite>Consulter l'actu</x-lien-l-actualite>
              </span>
            </button>
          </div>
        </section>

      </main>

      <!-- Scroll to Top Button -->
      <div id="scrollToTopBtn" onclick="scrollToTop()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="11" stroke="#007BFF" stroke-width="2" fill="none"/>
              <path d="M12 8v8M8 12l4-4 4 4"/>
          </svg>
      </div>

      <script src="{{ asset('js/scroll-to-top-button.js') }}"></script>

    </body>
  </html>
</x-app-layout>