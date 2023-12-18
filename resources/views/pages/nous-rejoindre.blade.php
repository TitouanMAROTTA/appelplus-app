<x-app-layout>
	<link rel="stylesheet" href="{{ asset('css/nous-rejoindre.css') }}">
	<link rel="stylesheet" href="{{ asset('css/scroll-to-top-button.css') }}">

	<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Nous rejoindre</title>
			<!-- feuille de style pédagogique, à retirer dès que possible -->
		</head>
		<!-- Bouton j'adhère à l'association demander à Sarah de le mettre-->
		
		<body>
			<!-- Orange : E37A30 Jaune : E9B840 Vert : 6BE059 Bleu : 376ED5 violet : 993FD1 rouge : E05257-->

			<main class="qui-sommes-nous">

				<p>APPEL + agit au quotidien pour :</p>

				<section class="p1">
					<h2>ACCUEILLIR</h2>
					<p>Les personnes LGBTQIA+ victimes de discriminations ou ayant des questions sur leur santé, leurs droits, leur situation familiale.</p>
					<p>Les demandeur.euse.s du droit d'asile en France, au titre de l'orientation sexuelle ou de l'identité de genre.</p>
				</section>

				<section class="p2">
					<h2>INFORMER</h2>
					<p>Informer et orienter le public LGBTQIA+ et leur entourage.</p>
					<p>Mener des actions de prévention contre les IST, VIH, la dépression et le risque suicidaire.</p>
					<p>Perpétuer et commémorer la mémoire des personnes LGBTQIA+.</p>
				</section>

				<section class="p3">
					<h2>LUTTER</h2>
					<p>Contre toute forme d'exclusion, de discrimination sociale, profesionnelle ou de toute autre nature, fondée sur l'orientation sexuelle et/ou l'identité de genre.</p>
					<p>Pour l'accès à l'égalité des droits personnels et sociaux des personnes LGBTQIA+.</p>
				</section>

				<section class="p4">
					<h2>SOUTENIR</h2>
					<p>Les personnes victimes de discriminations, d'exclusion, les personnes malades ou séropositives et leur entourage.</p>
					<p>Animer des moments de convivialité pour favoriser l'épanouissement des personnes LGBTQIA+.</p>
				</section>

				<!-- Tableau avec formulre abonnement-->
				<table class="tableau">
					<caption>Les formules que APPEL+ propose :</caption>
					<thead>
						<tr>
							<th scope="col" id="formule">FORMULE</th>
							<th scope="col" id="montant">MONTANT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Tarif d'association</th>
							<td>40.0€</td>
						</tr>
						<tr>
							<th scope="row">Tarif plein</th>
							<td>25.0€</td>
						</tr>  
						<tr>
							<th scope="row">Tarif réduit - de 26 ans ou étudiant</th>
							<td>5.0€</td>
						</tr>
						<tr>
							<th scope="row">Tarif libre -Adhésion avec don</th>
							<td>à partir de 5.0€</td>
						</tr>
					</tbody>
				</table>
			
			</main>
			<!-- Bouton j'adhère à l'associaiton demander à Sarah de le mettre-->

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