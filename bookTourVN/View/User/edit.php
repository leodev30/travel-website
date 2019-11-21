<div class="white">
<br>


<div  class="col-sm-12" id="bgContent"  class="tt">
<form name="frmthem" method="post" action="<?php WEBROOT . 'index.php/user/edit'.$users['maTaiKhoan']; ?>" enctype="multipart/form-data">


  <div class="col-sm-1"></div>
  <div class="col-sm-10"><h3 align="center"> Thay đổi thông tin tài khoản</h3></div>
  <div class="col-sm-1"></div>

  <div class="col-sm-2"></div>
   <div class="col-sm-2">

    <label for="taiKhoan">Tên tài khoản:</label>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="taiKhoan" value="<?php echo $users['taiKhoan'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="matKhau">Mật khẩu:</label>
  </div>
  <div class="col-sm-8">
  <input type="password" class="form-control" name="matKhau" value="<?php echo $users['matKhau'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="matKhau">Họ Tên:</label>
  </div>
   <div class="col-sm-8">
  <input type="text" class="form-control" name="hoTen" value="<?php echo $users['hoTen'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="email">Email:</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="email" value="<?php echo $users['email'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="SDT">Số điện thoại:</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="SDT" value="<?php echo $users['SDT'];?>">
  </div>
  <?php
  if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="1"))
  {?>
    
    <div class="col-sm-2"></div>
    <div class="col-sm-2">

     <label for="quyen">Quyền:</label>
    </div>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="quyen" value="<?php echo $users['quyen'];?>">
    </div>
    <?php 
      }
    ?>
  

  <div class="col-sm-6"></div>
<div class="col-sm-6"><button onclick="trolai()" type="submit" class="btn btn-danger">Sửa</button></div>
</form>
</div>
<br>
<div class="col-sm-1"></div>
</div>
