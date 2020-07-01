class Pdogestion
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=Gestion';   		
      	private static $user='root' ;    		
      	private static $mdp='0550002D' ;	
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
}