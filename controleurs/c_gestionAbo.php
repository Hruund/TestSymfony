<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'login':
	{
        include("vues/v_navbar_nc.php");
		include("vues/v_connexion.php");
		break;
	}

	case 'seConnecter':
	{
		$nom = $_REQUEST['nom']; $pwd = $_REQUEST['pwd'];
		if($pdo->connect($nom, $pwd))
		{
            include("vues/v_navbar_c.php");
			include("vues/v_gestionAbo.php");
		}
		else
		{
            include("vues/v_navbar_nc.php");
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
                echo "<strong>Attention !</strong> Vous avez entrez un mauvais mot de passe ou identifiant.";
                echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
                    echo "<span aria-hidden='true'>&times;</span>";
                echo "</button>";
            echo "</div>";
			include("vues/v_connexion.php");
		}
		break;
	}

	case 'voirToutAbo':
	{
  		$AllAbo = $pdo->getLesAbo();
		include("vues/v_gestionAbo.php");
  		break;
	}
	
	case 'voirAboClient' :
	{
  		$abo = $_REQUEST['Abonnement'];
		$lesAboClient = $pdo->getLesAboParClients($abo);
		include("vues/v_gestionAbo.php");
		break;
	}
}
?>