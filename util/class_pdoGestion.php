<?php
class PdoGestion
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=Gestion';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
        private static $monPdoGestion = null;

        private function __construct()
	    {
    		PdoGestion::$monPdo = new PDO(PdoGestion::$serveur.';'.PdoGestion::$bdd, PdoGestion::$user, PdoGestion::$mdp); 
			PdoGestion::$monPdo->query("SET CHARACTER SET utf8");
        }
        public function _destruct(){
		    PdoGestion::$monPdo = null;
	    }
        
        public  static function getPdoGestion()
	{
		if(PdoGestion::$monPdoGestion == null)
		{
			PdoGestion::$monPdoGestion= new PdoGestion();
		}
		return PdoGestion::$monPdoGestion;  
	}

	public function connect($nom, $pwd)
	{
		$r="SELECT COUNT(*) FROM Client WHERE login = '".$nom."' and mdp = '".$pwd."';";
		$res = PdoGestion::$monPdo->query($r);
		if ($res->fetchColumn() > 0)
		{
		    return true;
		}
		else
		{
		    return false;
		}
	}

	public function getLesAboParClients($idClient)
	{
		$r="SELECT * FROM `Abonnement` WHERE id_Client = '$idClient'";
		$res = PdoGestion::$monPdo->query($r);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}

	public function getLesAbo()
	{
		$req = "SELECT * FROM `Abonnement`";
		$res = PdoLafleur::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
}
?>