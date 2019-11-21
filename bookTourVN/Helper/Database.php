<?php
class Database{

	private static $ocon=null;
	/*public function Database()
	{
			$conn=null;
	}*/
	private function __construct()
	{
	}
		
		
	public static function getConnection() {
		

		if(self::$ocon==null) {
			self::$ocon=new PDO("mysql:host=localhost;dbname=booktourvn", 'root', '');
			self::$ocon->exec("set names utf8");
        }
			
			
			return self::$ocon;
		}
	public function db_close()
	{
		$this->ocon->close();
	}
}

?>