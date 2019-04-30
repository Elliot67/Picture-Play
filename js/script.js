/********
Preloader
********/

window.addEventListener('load', function(){
	document.getElementById('preloader').style.display = "none";
});


/*******************
ANIMATION ICONE MENU
*******************/

// Dans son propre fichier


/********
LE SLIDER
********/

var deplacement = 0;
var nb_slide = 5
function slider(){
	deplacement += (100 / nb_slide);
	if(deplacement >= 100){
		/* On arrive à la fin du slider --> C'est reparti pour un tour ! */
		document.getElementById('slider_image').style.transform = "translateX(0%)";
		deplacement = 0;
	}
	else{
		document.getElementById('slider_image').style.transform = "translateX(-"+deplacement+"%)";
	}
}

setInterval(slider, 4000);


/**************
LES PRESTATIONS
**************/

// On réinitialise tout à chaque changement de taille de l'écran, pour être sur
// de n'avoir aucun problèmes entre les deux affichages des prestations
window.addEventListener("resize", function(){
	if (window.matchMedia("screen and (max-width: 1200px)").matches){
		for(i = 1; i <= 4; i++){
			document.getElementById(i).style.width = '';
			document.getElementById(i).style.height = '';
			document.getElementsByClassName('contenu')[i-1].style.display = 'initial';
		}
	}
	if (window.matchMedia("screen and (min-width: 1200px)").matches){
		for(i = 1; i <= 4; i++){
			document.getElementsByClassName('contenu')[i-1].style.display = 'none';
			document.getElementById('back').style.display = 'none';
			document.getElementsByClassName('nom_prestations')[i-1].style.top = '5%';
			document.getElementById(i).style.width = '50%';
			document.getElementById(i).style.height = '50%';
		}
	}
});

var numero = undefined;

function agrandir(num){
if (window.matchMedia("screen and (min-width: 1200px)").matches){ // Media queries en js
	let un = document.getElementById('1');
	let deux = document.getElementById('2');
	let trois = document.getElementById('3');
	let quatre = document.getElementById('4');

	numero = num-1;

/*
	w = width, h = height
	p = petit, m = moyen, g = grand
*/
	function wp(obj){
		obj.style.width = '0%';
	}
	function wm(obj){
		obj.style.width = '50%';
	}
	function wg(obj){
		obj.style.width = '100%';
	}

	function hp(obj){
		obj.style.height = '0%';
	}
	function hm(obj){
		obj.style.height = '50%';
	}
	function hg(obj){
		obj.style.height = '100%';
	}


	if(num == 1){
		wg(un);
		hg(un);

		wp(deux);
		hg(deux);

		wg(trois);
		hp(trois);

		wp(quatre);
		hp(quatre);
	}

	if(num == 2){
		wp(un);
		hg(un);

		wg(deux);
		hg(deux);

		wp(trois);
		hp(trois);

		wg(quatre);
		hp(quatre);
	}

	if(num == 3){
		wg(un);
		hp(un);

		wp(deux);
		hp(deux);

		wg(trois);
		hg(trois);

		wp(quatre);
		hg(quatre);
	}

	if(num == 4){
		wp(un);
		hp(un);

		wg(deux);
		hp(deux);

		trois.style.width = '0.01%';
		hg(trois);

		quatre.style.width = '99.9%';
		hg(quatre);
	}

	// Afficher le contenu
	document.getElementById('back').style.display = 'initial';
	document.getElementsByClassName('contenu')[numero].style.display = 'initial';
	document.getElementsByClassName('nom_prestations')[numero].style.top = '25%';
}
}

function back(){
if (window.matchMedia("screen and (min-width: 1200px)").matches){ // Media queries en js
	// Cacher le contneu
	document.getElementsByClassName('contenu')[numero].style.display = 'none';
	document.getElementById('back').style.display = 'none';
	document.getElementsByClassName('nom_prestations')[numero].style.top = '40%';

	for(i = 1; i <= 4; i++){
		document.getElementById(i).style.width = '50%';
		document.getElementById(i).style.height = '50%';
	}
	event.stopPropagation();
}
}


/***********
Les articles
***********/

// Déplacement des articles sur le slider
let nombreArticle = 3; // NOMBRE D'ARTICLES PRESENT SUR LA PAGE
let positionArticle = 0;

document.getElementById('prec').addEventListener('click', function(){
	articlePrec();
});
document.getElementById('suiv').addEventListener('click', function(){
	articleSuiv();
});

function articlePrec(){
	if(positionArticle != 0){
		positionArticle += 90;
		document.getElementById('ensembleArticle').style.transform = 'translateX('+positionArticle +'vw)';
		document.getElementById('prec').style.transform = 'translate(2em,50%)';
		setTimeout(function(){ // Animation des flèches
			resetArticle();
		},500);
	}
}
function articleSuiv(){
	if(positionArticle != (nombreArticle-1) * -90){
		positionArticle -= 90;
		document.getElementById('ensembleArticle').style.transform = 'translateX('+positionArticle+'vw)';
		document.getElementById('suiv').style.transform = 'translate(-2em,50%)';
		setTimeout(function(){ // Animation des flèches
			resetArticle();
		},500);
	}
}

// Pour reset la petite animation des flèches
function resetArticle(){
	document.getElementById('prec').style.transform = 'translate(0,50%)';
	document.getElementById('suiv').style.transform = 'translate(0,50%)';
}


// Animation des 3 petits points
let petitsPoints = document.getElementsByClassName('petitsPoints');
for( let i = 0; i < petitsPoints.length; i++){
	petitsPoints[i].addEventListener('mouseover', function(){
		let points = '';
		var intervalPoints = setInterval(function(){
			if(points.length != 3){
				points += '.';
			}
			else{
				points = '';
			}
			petitsPoints[i].innerHTML = 'Lire l\'article'+points;
		},300);

		// Arrêter l'animation des petits points
		petitsPoints[i].addEventListener('mouseout', function(){
			clearInterval(intervalPoints);
			petitsPoints[i].innerHTML = 'Lire l\'article...';
		});
	});
}


// On adapte la taille de la partie article en fonction de
// l'enfant qui est en absolute (car slider)

window.addEventListener('load', function(){ // Au chargement
	redimensionArticle();
});

window.addEventListener("resize", function(){ // Au changement de taille de la fenêtre
	redimensionArticle();
});
function redimensionArticle(){
	document.getElementById('toutArticle').style.height = document.getElementById('ensembleArticle').offsetHeight+'px';
}
