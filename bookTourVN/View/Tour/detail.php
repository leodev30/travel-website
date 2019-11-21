<div class="white">
<br>

<div  class="col-sm-12" id="bgContent"  class="tt">
<form name="frmthem" method="disable" action="<?php WEBROOT . 'index.php/tour/detail'.$tours['maTour']; ?>" enctype="multipart/form-data">


  <div class="col-sm-1"></div>
  <div class="col-sm-10"><h3 align="center"> Chi tiết thông tin tour</h3></div>
  <div class="col-sm-1"></div>

    <div class="col-sm-2"></div>
   <div class="col-sm-2">

    <label for="maUuDai">Mã Ưu Đãi</label>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="maUuDai" value="<?php echo $tours['maUuDai'];?>">
  </div>

  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="maTour">Mã Tour</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="maTour" value="<?php echo $tours['maTour'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="diemDi">Điểm đi</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="diemDi" value="<?php echo $tours['diemDi'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="diemDen">Điểm đến:</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="diemDen" value="<?php echo $tours['diemDen'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="ngayDi">Ngày Đi</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="ngayDi" value="<?php echo $tours['ngayDi'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="ngayVe">Ngày về</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="ngayVe" value="<?php echo $tours['ngayVe'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="phuongTien">Phương Tiện</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="phuongTien" value="<?php echo $tours['phuongTien'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="soNguoi">Số Người</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="soNguoi" value="<?php echo $tours['soNguoi'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="huongDanVien">Hướng Dẫn viên</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="huongDanVien" value="<?php echo $tours['huongDanVien'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">

     <label for="khachSan">Khách Sạn</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="khachSan" value="<?php echo $tours['khachSan'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">

     <label for="giaTour">Giá Tour</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="giaTour" value="<?php echo $tours['giaTour'];?>">
  </div>
</form>
<br>
<div class="col-sm-6"></div>
<div class="col-sm-6"><button type="submit" onclick="trolai()" class="btn btn-danger">Quay Lại</button></div>
</div>
</div>

<script type="text/javascript">
        
        function trolai()
        {   
            history.back(-1);
            alert("Bạn đã trở lại thàng công");
            
        }
</script>