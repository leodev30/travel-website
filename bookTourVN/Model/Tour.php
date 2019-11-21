<?php
require_once (ROOT."/Helper/Database.php");
//require_once ("../Helper/Database.php");
class Tour{
		private static $ocon=null;
		public function __construct()
		{
			
			$ocon=Database::getConnection();

		}
		public function getAll(){
			
			$sql = "SELECT * FROM tourcosan";
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetchAll();

		}
		public function getBymaTour($maTour){
			
			$sql = "SELECT * FROM tourcosan where maTour="."'$maTour'";
			// echo $sql;
			$result = Database::getConnection()->prepare($sql);
			$result->execute();
			return $result->fetch();

		}
		
		public function add($maUuDai,$maTour,$diemDi,$diemDen,$ngayDi,$ngayVe,$phuongTien,$soNguoi,$huongDanVien,$khachSan,$giaTour)
		{
			
			$sql = "INSERT INTO tourcosan(maUuDai,maTour,diemDi,diemDen,ngayDi,ngayVe,phuongTien,soNguoi,huongDanVien,khachSan,giaTour) VALUES ('".$maUuDai."','".$maTour."','".$diemDi."','".$diemDen."','".$ngayDi."','".$ngayVe."','".$phuongTien."','".$soNguoi."','".$huongDanVien."','".$khachSan."','".$giaTour."')";
			// echo $sql;
			
			 return Database::getConnection()->exec($sql);
					
		}
		public function edit($maUuDai,$maTour,$diemDi,$diemDen,$ngayDi,$ngayVe,$phuongTien,$soNguoi,$huongDanVien,$khachSan,$giaTour)
		{
			$sql="UPDATE tourcosan SET maUuDai='".$maUuDai."', maTour='".$maTour."', diemDi='".$diemDi."', diemDen='".$diemDen."', ngayDi='".$ngayDi."', ngayVe='".$ngayVe."', phuongTien='".$phuongTien."', soNguoi='".$soNguoi."', huongDanVien='".$huongDanVien."', khachSan='".$khachSan."', giaTour='".$giaTour."' where maTour="."'$maTour'";
			// echo"<br>".$sql;
			 return Database::getConnection()->exec($sql);
		}
		public function delete($maTour){
			$sql="DELETE FROM tourcosan where maTour=".$maTour;
			$result = Database::getConnection()->prepare($sql);
			return $result->execute();
		}
		public function find($value){ 
			$sql = "SELECT * FROM tourcosan Where  diemDi LIKE '%".$value."%' OR maUuDai LIKE '%".$value."%' ";
			
			$result = Database::getConnection()->prepare($sql);
			$result->execute();

			return $result->fetchAll();
		}

		public function datTour( $maTour)
		{
			$sql = "INSERT INTO dondattour(maTour, taiKhoan, tinhTrang, maDon) VALUES ('".$maTour."','".$_SESSION["user"]."','Chua Thanh Toán','Tự Đặt')";
			// echo $sql;
			// die();
			 return Database::getConnection()->exec($sql);
		}
		
	}
	
	
	
  ?>























































































































