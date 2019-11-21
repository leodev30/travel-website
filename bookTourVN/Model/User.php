<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class User{
		private static $ocon=null;
		public function __construct()
		{
			
			$ocon=Database::getConnection();

		}
		public function getAll(){
			
			$sql = "SELECT * FROM useraccount";
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getBymaTaiKhoan($maTaiKhoan){
			
			$sql = "SELECT * FROM useraccount where maTaiKhoan="."'$maTaiKhoan'";
			
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		public function login($taiKhoan,$matKhau)
		{
			$sql = "SELECT *  FROM useraccount";
			$sql.=" WHERE taiKhoan='".$taiKhoan."' and matKhau='".$matKhau."'";
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();
		}
			public function add($taiKhoan,$matKhau,$hoTen,$email,$SDT)
		{
			
			$sql = "INSERT INTO useraccount(taiKhoan,matKhau,hoTen,email,SDT,quyen) VALUES ('".$taiKhoan."','".$matKhau."','".$hoTen."','".$email."','".$SDT."','2')";
			
			
			 return Database::getConnection()->exec($sql);
					
		}
		public function edit($taiKhoan, $matKhau,$hoTen,$email,$SDT, $quyen, $maTaiKhoan)
		{
			$sql="UPDATE useraccount SET taiKhoan= '".$taiKhoan."' ,matKhau='".$matKhau."',hoTen='".$hoTen."',email='".$email."',SDT='".$SDT."', quyen=".$quyen." WHERE useraccount.maTaiKhoan ="."'$maTaiKhoan'";

			// echo $sql;
			return Database::getConnection()->exec($sql);

		}
		public function editPro($taiKhoan, $matKhau,$hoTen,$email,$SDT)
		{
			$sql="UPDATE useraccount SET taiKhoan= '".$taiKhoan."',matKhau='".$matKhau."',hoTen='".$hoTen."',email='".$email."',SDT='".$SDT."'  WHERE  taiKhoan='".$_SESSION["user"]."'";

			echo $sql;
			return Database::getConnection()->exec($sql);

		}
		public function delete($maTaiKhoan){
			$sql =  "DELETE FROM useraccount WHERE useraccount.maTaiKhoan = "."'$maTaiKhoan'";
			// $sql="DELETE FROM useraccount where maTaiKhoan=".$maTaiKhoan;
			// echo $sql;
			// die();
			$result = Database::getConnection()->prepare($sql);
			return $result->execute();
		}
		public function find(string $taiKhoan){
			$userList = array();
			$sql = "SELECT maTaiKhoan, taiKhoan, matKhau, quyen FROM useraccount where taiKhoan='".$taiKhoan."'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$objuser = new User($row['maTaiKhoan'], $row['taiKhoan'], $row['matKhau'], $row['quyen']);
						array_push($userList, $objuser);
					}
			}
			return $userList;
		}
		public function profile(){
			$sql = "SELECT * FROM useraccount  where taiKhoan='".$_SESSION["user"]."'";
			// echo $sql;
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();
		}

			public function datTour($tenTour, $soNgayDi, $soNguoi)
		{
			
			$sql = "INSERT INTO tour(tenTour,soNgayDi,soNguoi) VALUES ('".$tenTour."','".$soNgayDi."','".$soNguoi."')";
			$request=Database::getConnection()->prepare($sql);
			return $request->execute();
			
		}

}
	
	
	
  ?>























































































































