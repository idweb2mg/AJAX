<?php
//================================================
// ajax.php
//================================================
require_once('inc/init.inc.php') ;
$tab = array() ;
$tab['resultat'] = '' ;

if(!empty($_POST['mode']) && $_POST['mode'] == 'modifier')
{
	if(!empty($_POST['region']))
	{
		$contenu = addslashes($_POST['contenu']) ;
		$mysqli->query("UPDATE contenu set contenu = '$contenu' WHERE region='$_POST[region]'") or die($mysqli->error) ;

	}

}

echo json_encode($tab) ;