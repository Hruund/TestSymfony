<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class_pdoGestion.php");
include("vues/v_entete.php") ;

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoGestion::getPdoGestion();	 
switch($uc)
{
	case 'accueil' :
	{
		include("vues/v_navbar_nc.php");
		include("vues/v_accueil.php");
		break;
	}
	case 'Ajouter abonnement' :
	{
		include("controleurs/c_ajouterAbo.php");
		break;
	}
	case 'Supprimer abonnement' :
	{
		include("controleurs/c_deleteAbo.php");
		break;
	}
	case 'Connexion' :
	{
		include("controleurs/c_gestionAbo.php");
		break;
	}
	case 'Gestion' :
	{
		include("controleurs/c_gestionAbo.php");
		break;
	}
}
?>