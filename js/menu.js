/*******************
ANIMATION ICONE MENU
*******************/

// Animer la petite icone
function tournericone(){
	document.getElementsByClassName('petiteicone')[0].classList.toggle('tourner');
	document.querySelector('nav').classList.toggle('deplacermenu');
}