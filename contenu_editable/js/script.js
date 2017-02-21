// script.js
var className = document.getElementsByClassName("contentEditable") ;

for (var i = 0; i < className.length; i++) {
	className[i].addEventListener("dblclick", function(){
		var region = this.id ;
		//console.log(region) ;
		var maRegion = document.getElementById(region) ;
		var ancien = maRegion.innerHTML;
		console.log(ancien) ;

		maRegion.innerHTML = '<textarea style="width: 100%;" id="editeur1">' + ancien + '</textarea><br/><button id="valider">Valider</button>' ;

		var editeur = document.getElementById('editeur1') ;

		document.getElementById('valider').addEventListener("click", function(){
			var nouveau = editeur.value ;
			//alert(nouveau) ;
			maRegion.innerHTML = nouveau ;
			ajax('modifier',region, nouveau) ;

		}) ;

	}) ;
} // FIN for (var i = 0; i < className.length; i++)

function ajax(mode, region, contenu){
	if(XMLHttpRequest)
		var xhttp = new XMLHttpRequest() ;
	else
		var xhttp = new ActiveXObject("Microsoft.XHTMLHTTP") ;
	// déclaration du fichier cible & des paramètres
	var fichier = 'ajax.php' ;
	var parametres = "mode="+mode+"&region="+region+"&contenu="+contenu ;
	// OPEN
	xhttp.open("POST",fichier, true) ;
	// setRequestHeader (car en mode POST)
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded") ;
	// mise en place de l'événement sur le changement d'état
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			console.log(xhttp.responseText) ;
			var result = JSON.parse(xhttp.responseText) ;
		}
	}
	// SEND
	xhttp.send(parametres);
} // FIN function ajax(mode, region, contenu)