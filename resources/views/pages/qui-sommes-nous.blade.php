<x-app-layout>
  <link rel="stylesheet" href="{{ asset('css/qui-sommes-nous.css') }}">
  
 
 
<!DOCTYPE html>
<html lang="fr">
 <head> 
    <meta charset="UTF-8">
    <title>Qui sommmes nous? APPEL+</title>
    <link rel="stylesheet" href="quisommesnous.css"/>

 </head>  
    <body>
            <main>
                <section class="introduction">
                <h2> 
                    Qui sommes-nous ?
                </h2>
                     <div class="content">
                        <div class="texte">
                            <h3>Bienvenue chez APPEL+, l’Association Poitevine Pour l’Égalité et la Liberté des LBGTQIA+ !</h3>
                            <p>Nous sommes un groupe local et engagé pour permettre à tout.e.s les poitevin.e.s de vivre pleinement leur identité de genre et leur orientation sexuelle. À l’image du drapeau qui nous unit, nous œuvrons pour que les couleurs de chacun.e soient défendues et que toute personne sur le territoire puisse obtenir de l’aide et une voix. </p>
                            <h4>Un accueil 7j/7</h4>
                            <p>Nos locaux sont là pour vous offrir un environnement sûr et bienveillant où chacun.e se sent respecté.e, soutenu.e et valorisé.e.</p>
                            <h4>Des évènements réguliers</h4>
                            <p>La solidarité au sein de notre communauté est une force, c'est pourquoi nous sommes très actifs à l’échelle locale. Nous organisons des événements pour sensibiliser et faire avancer l’égalité pour tous.</p>
                            <h4>Des bénévoles pour tous.tes</h4>
                            <p>APPEL+ fonctionne depuis 2015 grâce à nos bénévoles, dévoués à transmettre nos valeurs. Nous sommes fier.ère.s de partager notre histoire, nos luttes, nos succès et nos rêves avec le plus grand nombre.</p>
                            <p>Que vous soyez un.e membre de longue date de la communauté LGBTQIA+ ou que vous découvriez votre identité, APPEL+ est prêt à vous accueillir. N’hésitez pas à rejoindre l’un de nos événements, à nous contacter ou à passer nous voir directement.</p> 
                            <p>Nous avons hâte de vous rencontrer !</p>
                        </div>
                        <figure><img src="{{ asset('images/fondqui.webp') }}" alt=""></figure>
                    </div>
                </section>
                <section class="bureau">  
                    <h3>Le bureau des +</h3>
                    <ul class="galerie">
                        <li> <figure>
                        <img src="{{ asset('images/personne1.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne2.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne3.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne4.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne5.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne6.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne7.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne8.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne9.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne10.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne11.png') }}" alt="">
                        </li></figure>
        
                        <li> <figure>
                        <img src="{{ asset('images/personne12.png') }}" alt="">
                        </li></figure>
                    </ul>
                </section>  
                <section class="valeurs">
                   <article class="nosval">
                        <div>
                            <h3>Nos valeurs</h3>
            
                                <ul class="picto">
                                <li><figure>
                                    <img src="{{ asset('images/accueil.png') }}" alt="">
                                    <figcaption>Accueil</figcaption>
                                </figure></li>
                
                                <li><figure>
                                    <img src="{{ asset('images/soutien.png') }}" alt="">
                                    <figcaption>Soutien</figcaption>
                                </figure></li>
                
                                <li><figure>
                                    <img src="{{ asset('images/integration.png') }}" alt="">
                                    <figcaption>Intégration</figcaption>
                                </figure></li>
                
                                <li><figure>
                                    <img src="{{ asset('images/bienveillance.png') }}" alt="">
                                    <figcaption>Bienveillance</figcaption>
                                </figure></li>
                
                                <li><figure>
                                    <img src="{{ asset('images/lutte.png') }}" alt="">
                                    <figcaption>Lutte</figcaption>
                                </figure></li>
                        </div>
                    </ul>
                </section>
            </main>
    </body>
</html>

</x-app-layout>
	