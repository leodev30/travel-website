<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class TourDaDat{
		private static $ocon=null;
		public function __construct()
		{
			
			$ocon=Database::getConnection();

		}

		public function getAll(){
			if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="1")){
			$sql = "SELECT * FROM dondattour";
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}else{
				$sql="SELECT * FROM dondattour where taiKhoan='".$_SESSION["user"]."'";
			
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
		}
		public function getBymaDon($maDon){
			
			$sql = "SELECT * FROM dondattour where maDon="."'$maDon'";
			echo $sql;
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}

		
		
		public function delete($maDon){
			$sql =  "DELETE FROM dondattour WHERE dondattour.maDon = "."'$maDon'";
			// $sql="DELETE FROM useraccount where taiKhoan=".$taiKhoan;
			// echo $sql;
			// die();
			$result = Database::getConnection()->prepare($sql);
			return $result->execute();
		}

		public function edit( $tinhTrang, $maDon)
		{
			$sql="UPDATE dondattour SET  tinhTrang='".$tinhTrang."' where maDon="."'$maDon'";
			echo "<br>".$sql;
			return Database::getConnection()->exec($sql);
		}
	}
	
  ?>























































































































