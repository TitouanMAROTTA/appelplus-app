<!-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Footer Responsive</title>
  <link rel="stylesheet" href="https://use.typekit.net/xsu5wgc.css">
  <link rel="stylesheet" href="style.css">
</head> -->

<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

<body>
    <div class="external">
        <div class="container first">
            <h5>Envie d'apporter votre soutien à l'association ?</h5>
            <ul>
                <li><button class="give-button" href="#">Faire un don</button></li>
                <li><button class="join-button" href="#">Devenir adhérent</button></li>
            </ul>
        </div>
    </div>

    <footer class="footer-section">
        <div class="container second">
            <div class="footer-address">
                <a href="/"><img src="{{ asset('images/logo-APPEL.svg') }}" class="img-fluid" alt="logo"></a>
            <p class="address">8 rue de l'égalité</p>
                <p class="address">86000 POITIERS</p>
                <div class="wrap">
                    <x-lien-nous-contacter></x-lien-nous-contacter>class="black_button">Nous contacter</a>
                </div>
            </div>
            <!--<div class="footer-social-icon">
                <span>Follow us</span>
                <a href="../../icons_svg/facebook.svg"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
            </div>-->
            <div class="footer-widget">
                <ul>
                    <li><a href="/">accueil</a></li>
                    <li><x-lien-nous-rejoindre>nous rejoindre</x-lien-nous-rejoindre></li>
                    <li><x-lien-qui-sommes-nous>qui sommes-nous ?</x-lien-qui-sommes-nous></li>
                    <li><x-lien-nos-evenements>nos événements</x-lien-nos-evenements></li>
                    <li><x-lien-l-actualite>l'actualité</x-lien-l-actualite></li>
                </ul>
            </div>
            <div id="connexion">
                <p>Déjà adhérent ?  Je me connecte !</p>
                <div class="wrap">
                    <x-lien-login></x-lien-login>class="black_button">Me connecter</a>
                </div>
            </div>
        </div>
            <div class="external">
                <div class="container">
                    <div class="footer-menu">
                        <ul>
                            <li><p class="copyright-text">Copyright &copy; 2023 All Right Reserved Appel+</p></li>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="#">Mentions Légales</a></li>
                            <li><x-lien-nous-contacter></x-lien-nous-contacter>>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
  
</body>
<!-- </html> -->