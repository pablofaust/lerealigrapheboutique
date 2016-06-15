<div class="container formulaire">

	<div class="menu">

		<a href="../home"><div class="logo">
			<div class="logo-img">
					<div style="background-image: url('<?php echo $url ?>aventure-ami-joueur/img/logo.png')" ></div>
			</div>
			<h1>Le Realigraphe</h1>
		</div></a>

		<div class="navbar hidden-xs hidden-sm">
			<a href="#"><p>Decouvrir</p></a>
			<a href="#"><p class="active">Offrir</p></a>
			<a href="#"><p>Papoter (avec nous)</p></a>
		</div>

	</div>

	<div class="sous-titre">
	<h2>L'organisation de votre surprise commence maintenant !</h2>
	</div>	

		<form method="post">

			<div class="container formulaire-cadre">

				<label for="prenom" class="prenom-client">Son prénom :</label>
				<input type="text" name="prenom-client" id="prenom" placeholder="Pablo"><br><br>

				<label for="nom" class="nom-client">Son nom :</label>
				<input type="text" name="nom-client" id="nom" placeholder="Faust"><br><br>

				<label for="nom" class="nom-client">Son âge :</label>
				<input type="text" name="nom-client" id="nom" placeholder="22"><br><br><br>

				<label for="adresse" class="adresse-client">Son adresse :</label>
				<input type="text" name="adresse-client" id="adresse" placeholder="26 rue Tilly"><br><br>

				<label for="code-postal" class="code-postal-client">Le code postal :</label>
				<input type="text" name="code-postal-client" id="code-postal" placeholder="92700"><br><br>

				<label for="ville" class="ville-client">La ville :</label>
				<input type="text" name="ville-client" id="ville" placeholder="Colombes"><br><br>

				<label for="ville" class="ville-client">La date du cadeau</label>
				<input type="text" name="ville-client" id="ville" placeholder="29/03/2017">

			</div>

			<div class="destinataire">

				<div class="boutons-offrir">

					<a href="../aventure-ami-joueur"><div class="offrir-joueur">
						<input class="valider" type="submit" name="action" value="Suite">
					</div></a>

					<!-- <a href="#"><div class="offrir-client">
						<input class="valider" type="submit" name="action" value="Vous-même">
					</div></a> -->

				</div>

			</div>

		</form>

	</div>


</div>