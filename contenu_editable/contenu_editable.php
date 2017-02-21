<?php
/* =================================================== */
/* htdocs/ajax/contenu_editable/contenu_editable.php
/* =================================================== */
require_once('inc/init.inc.php') ;
$contenu = array() ;

$content = $mysqli -> query("SELECT * FROM contenu") ;
while ($region= $content -> fetch_assoc()) {
	//echo '<prev>' ; var_dump($region) ;echo '</prev>' ;
	$contenu[$region['region']] = $region['contenu'] ;
}


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">	
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Sansita" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="conteneur">
				<div id="regionHeader1" class="contentEditable float">
					<?php echo $contenu['regionHeader1'] ;   ?>
				</div>
				<div id="regionHeader2" class="contentEditable float">
					<?php echo $contenu['regionHeader2'] ;   ?>
				</div>
				<div id="regionHeader3" class="contentEditable float">
					<?php echo $contenu['regionHeader3'] ;   ?>					
				</div>
				<div class="clear"> </div>
			</div>
		</header>
		<nav>
			<div class="conteneur"></div>
		</nav>
		<section>
			<div class="conteneur"></div>
		</section>
		<footer>
			<div class="conteneur">
				<div id="regionFooter1" class="contentEditable">
					<?php echo $contenu['regionFooter1'] ;   ?>
				</div>
				<br/>
				<div id="regionFooter2" class="contentEditable">
					<?php echo $contenu['regionFooter2'] ;   ?>					
				</div>				
			</div>
		</footer>
		
		<script src="js/script.js"> </script>
	</body>
</html>
