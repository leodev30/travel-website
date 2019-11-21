<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Promotion{
		private static $ocon=null;
		public function __construct()
		{
			
			$ocon=Database::getConnection();

		}
		public function getAll(){
			
			$sql = "SELECT * FROM promotion";
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
	}	
	
?>























































































































