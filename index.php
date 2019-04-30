<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Picture Play</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link media="screen and (min-width: 680px)" rel="stylesheet" type="text/css" href="styles/tablette.css">
	<link media="screen and (min-width: 1200px)" rel="stylesheet" type="text/css" href="styles/ordinateur.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Questrial');
		@import url('https://fonts.googleapis.com/css?family=Montserrat:700');
	</style>
</head>
<body>

	<div id="preloader">
		<div id="preloader_container">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>


<!----------------
MENU DE NAVIGATION
----------------->

<?php require('menu.html'); ?>

<!-------------
 BLOC DU SLIDER
-------------->

<div class="deux" id="cache">
	<img id="logo_principal" src="img/logo_principal.png">
	<div id="image_mobile"></div>
	<div id="slider_image">
		<div class="images"></div>
		<div class="images"></div>
		<div class="images"></div>
		<div class="images"></div>
		<div class="images"></div>
	</div>
	<div id="rectangle"></div>
</div>


<!------------------------------
BLOC DE PRESENTATION DE L'AGENCE
------------------------------->

<div class="titredeux pourmenu"><div class="clickmenu" id="presentation"></div><h1 class="hdeux">Notre agence</h1></div>
<div class="bloc un" id="bloc_presentation">
	<video controls muted poster="img/miniature.jpg">
		<source src="video/presentation.mp4" type="video/mp4">
	</video>
	<div id="bloc_de_droite">
		<p>Picture Play est une agence de communication audiovisuelle. Nous sommes à votre service pour réaliser tous types de prestations vidéo. Ce sont des professionels à votre écoute et qui répondront à vos attentes !</p>
		<p>Créée en 2017, "Picture Play" est une agence très jeune mais qui à beaucoup à offrir. Pour toute information ou demande de devis n'hésitez pas à nous contacter !
		<input type="button" name="nouscontacter" id="nouscontacter" value="Nous contacter !"></p>
	</div>
</div>


<!------------------
BLOC DES PRESTATIONS
------------------->
<!-- courslehmann.free.fr/POv2 -->
<div class="titreun pourmenu"><div class="clickmenu" id="prestations"></div><h1 class="hun">Nos prestations</h1></div>
<div class="bloc deux" id="bloc_prestations">

	<div class="bloc_image" id="1" onclick="agrandir(1)">
		<div class="bloc_noir"></div>
		<img src="img/prest1.jpg" draggable="false">
		<h4 class="nom_prestations">Court métrage</h4>
		<div class="contenu">
			<p>Mettez votre imagination en vidéo</p>
			<ul>
				<li>Préproduction: Réalisation du scénario en accord avec le client, organisation du tournage, ...</li>
				<li>Production: Cadrage, gestion des lumières, acting</li>
				<li>Post-production: Montage, colorimétrie, incrustation d'effets 3D</li>
			</ul>
		</div>
	</div>
	<div class="bloc_image" id="2" onclick="agrandir(2)">
		<div class="bloc_noir"></div>
		<img src="img/prest2.jpg" draggable="false">
		<h4 class="nom_prestations">Motion design</h4>
		<div class="contenu">
			<p>Faites passer un message clair à votre public</p>
			<ul>
				<li>Préproduction: Réalisation du scénario, storyboard, style artistique...</li>
				<li>Production: Cadrage, gestion des lumières, organisation du tournage, ...</li>
				<li>Post-production: Montage, habillage, incrustation d'effets 3D, ...</li>
			</ul>
		</div>
	</div>
	<div class="bloc_image" id="3" onclick="agrandir(3)">
		<div class="bloc_noir"></div>
		<img src="img/prest3.jpg" draggable="false">
		<h4 class="nom_prestations">Film évènementiel</h4>
		<div class="contenu">
			<p>Mettez des images sur vos évènements</p>
			<ul>
				<li>Réunion personnalisée pour connaître vos envies</li>
				<li>Tournage lors de l'évènement en autonomie</li>
				<li>Post production selon vos attentes</li>
			</ul>
		</div>
	</div>
	<div class="bloc_image" id="4" onclick="agrandir(4)">
		<div class="bloc_noir"></div>
		<img src="img/prest4.jpg" draggable="false">
		<h4 class="nom_prestations">Vidéo promotionelle</h4>
		<div class="contenu">
			<p>Mettez votre produit en valeur avec une courte vidéo promotionelle</p>
			<ul>
				<li>Réunion pour définir les points à mettre en valeur</li>
				<li>Préproduction: Réalisation du script, recherche de comédiens, ...</li>
				<li>Production: Cadrage, gestion du tournage</li>
				<li>Post-production: Montage, habillage, ...</li>
			</ul>
		</div>
	</div>

	<img src="img/fleche.png" id="back" onclick="back()">
</div>

<!------------------------------
BLOC DE PRESENTATION DE L'EQUIPE
------------------------------->

<div class="titredeux pourmenu"><div class="clickmenu" id="equipe"></div><h1 class="hdeux">Notre équipe</h1></div>
<div class="bloc un" id="bloc_equipe">
	<div class="container">
		<div class="carte">
			<div class="avant commun"><img src="img/gregoire.jpg"></div>
			<div class="arrière commun">
				<img src="img/gregoire.jpg">
				<h2>Grégoire</h2>
				<h3>Cadreur</h3>
				<p>Cadreur, il vous offre sa vision du monde. Il ne voit qu'au travers de son objectif et donnera un point de vue à couper le souffle</p>
				<a href="https://www.gregoiremacabrey.fr" target="_blank">Portfolio</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="carte" id="william">
			<div class="avant commun"><img src="img/william.jpg"></div>
			<div class="arrière commun">
				<img src="img/william.jpg">
				<h2>William</h2>
				<h3>Monteur</h3>
				<p>Monteur, motion designer et réalisateur, il n'a pas peur de sortir des sentiers battus. Passionné de multimédia depuis son jeune âge, il vit désormais de sa passion. Il donnera à vos vidéos sa touche personnelle.</p>
				<a href="https://www.williamwalspeck.fr" target="_blank">Portfolio</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="carte">
			<div class="avant commun"><img src="img/elliot.jpg"></div>
			<div class="arrière commun">
				<img src="img/elliot.jpg">
				<h2>Elliot</h2>
				<h3>Ingénieur son</h3>
				<p>Ingénieur du son, prêt à recréer le monde réel pour vous. Il aime son métier (sauf quand on lui souffle dans le micro). Il donnera à vos spectateurs une des meilleures immersions dans votre univers</p>
				<a href="https://www.elliotlintz.fr" target="_blank">Portfolio</a>
			</div>
		</div>
	</div>
</div>


<!-------------------
BLOC SUR LES ARTICLES
-------------------->

<div class="titreun pourmenu"><div class="clickmenu" id="blog"></div><h1 class="hun">Notre Blog</h1></div>
<div class="bloc deux" id="bloc_articles">
	<div id="toutArticle">
		<div id="ensembleArticle">
			<article class="article">
				<img src="img/article/main.jpg">
				<h3>Black Magick Pocket 4K</h3>
				<p>Amateur de caméra et d’Hardware vous êtes sur le bon article ! Aujourd’hui gros plan sur le nouveau bébé de chez Blackmagic : la Pocket Cinema Camera 4K</p>
				<a class="petitsPoints" href="article1.php">Lire l'article...</a>
			</article>
			<article class="article grand">
				<img src="img/article/sony-f55.jpg">
				<h3>PMW-F55</h3>
				<p>Envie de tourner des films d’une qualité professionnelles ? Des documentaires aux films hollywoodiens, voici une des meilleures caméras de 2018 la PMW-F55 de canon</p>
				<a class="petitsPoints" href="article2.php">Lire l'article...</a>
			</article>
			<article class="article">
				<img src="img/article/imax.jpg">
				<h3>IMAX</h3>
				<p>Plus grands plus beau et toujours plus impressionnants, le format de pellicule IMAX envahit les salles de cinéma mais qu’est-ce que l’IMAX exactement ?</p>
				<a class="petitsPoints" href="article3.php">Lire l'article...</a>
			</article>
		</div>
		<div class="boutonArticle" id="prec"></div>
		<div class="boutonArticle" id="suiv"></div>
	</div>
</div>


<!-------------------
BLOC DES REALISATIONS
-------------------->

<div class="titredeux pourmenu"><div class="clickmenu" id="realisations"></div><h1 class="hdeux">Nos réalisations</h1></div>
<div class="bloc un" id="bloc_realisations">
	<video controls poster="img/miniature2.jpg">
		<source src="video/real.mp4" type="video/mp4">
	</video>
	<div id="bloc_droite">
		<p>Notre première réalisation est une interview du youtubeur Superflame dans le cadre du concours "Je filme le métier qui me plaît" réalisé fin 2018.</p>
		<p>Le montage à été réalisé à l'aide des logiciels Adobe Premiere Pro et Adobe After Effects.</p>
	</div>
</div>


<!----------
BLOC CONTACT
----------->

<div class="titreun pourmenu"><div class="clickmenu" id="contact"></div><h1 class="hun">Nous contacter</h1></div>
<div class="bloc deux" id="bloc_contact">
	<div id="intermediaire">
		<form id="bloc_formulaire">
			<h3>Sollicitez-nous !</h3>
			<input id="nom" class="formulaire" type="text" name="nom" placeholder="Nom">
			<input id="prenom" class="formulaire" type="text" name="prenom" placeholder="Prénom">
			<input id="mail" class="formulaire" type="text" name="mail" placeholder="Adresse mail">
			<input id="tel" class="formulaire" type="text" name="tel" placeholder="Téléphone">
			<textarea id="message" class="formulaire" placeholder="Votre demande"></textarea>
			<input id="envoyer" type="submit" name="go" value="Envoyer">
		</form>
		<iframe id="plan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.6144277534845!2d7.322005915461159!3d47.75013538604488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47919b6c8099f6fb%3A0x6f4fae4a3b60a5c7!2s10+Rue+Oberkampf%2C+68200+Mulhouse!5e0!3m2!1sfr!2sfr!4v1527962147519" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>


<!---------
BLOC FOOTER
---------->

<?php require('footer.html'); ?>

<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
