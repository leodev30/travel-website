<div class="white">
<br>


<div  class="col-sm-12"  id="bgContent"  class="tt">
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/TourDaDat/edit'.$tourdadats['maDon']; ?>" enctype="multipart/form-data">


  <div class="col-sm-1"></div>
  <div class="col-sm-10"><h3 align="center"> Thay đổi thông tin Đơn Hàng</h3></div>
  <div class="col-sm-1"></div>

   
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="maTour">Mã Tour</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="maTour" value="<?php echo $tourdadats['maTour'];?>">
  </div>
 <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="taiKhoan">Mã Tài Khoản</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="taiKhoan" value="<?php echo $tourdadats['taiKhoan'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="tinhTrang">Tình Trạng: </label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="tinhTrang" value="<?php echo $tourdadats['tinhTrang'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">

    <label for="maDon">Mã Đơn:</label>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="maDon" value="<?php echo $tourdadats['maDon'];?>">
  </div>
  

  <div class="col-sm-4"></div>
<div class="col-sm-8"><button type="submit" class="btn btn-danger">Sửa</button></div>
</form>
</div>
<br>
<div class="col-sm-1"></div>
</div>
