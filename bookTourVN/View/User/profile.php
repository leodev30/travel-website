<div class="white">
<br>

<div  class="col-sm-12" id="bgContent"  class="tt">
<form name="frmthem" method="disable" action="<?php WEBROOT . 'index.php/User/profile'.$users['maTaiKhoan']; ?>" enctype="multipart/form-data">

  <div class="col-sm-1"></div>
  <div class="col-sm-10"><h3 align="center"> Chi tiết thông tin người dùng</h3></div>
  <div class="col-sm-1"></div>
  <?php
  if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="2"))
  {?>
    <?php 
      // echo $users["maTaiKhoan"];
            echo "    
            <a class='btn btn-danger btn-xs' href='".WEBROOT."index.php/User/edit/". $users["maTaiKhoan"] . "' >
            <span class='glyphicon glyphicon-edit'></span> Edit</a>"; 
      }
    ?>
    <div class="col-sm-2"></div>
   <div class="col-sm-2">

    <label for="taKhoan">Tài Khoản</label>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="taiKhoan" value="<?php echo $users['taiKhoan'];?>">
  </div>

  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="matKhau">Mật Khẩu</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="matKhau" value="<?php echo $users['matKhau'];?>">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label for="hoTen">Họ Tên</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="hoTen" value="<?php echo $users['hoTen'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="email">Email</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="email" value="<?php echo $users['email'];?>">
  </div>
  <div class="col-sm-2"></div>
   <div class="col-sm-2">
    <label for="SDT">SDT</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="SDT" value="<?php echo $users['SDT'];?>">
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