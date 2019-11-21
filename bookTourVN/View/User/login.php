<div>
  <div class="dangNhap">
   <form  name="frmlogin" method="post" action="<?php echo WEBROOT.'index.php/user/login'; ?>" >
    <div class="col-sm-12"><h1 style="color: red;">Đăng nhập</h1></div>
    <hr>
    <div class="col-sm-2"><label for="account"><b style="color:black;">Tài khoản</b></label></div>
    <div class="col-sm-10"><input type="text" placeholder="Nhập tài khoản" name="taiKhoan" required></div>

    <div class="col-sm-2"><label for="password"><b style="color:black;">Mật khẩu</b></label></div>
    <div class="col-sm-10"><input type="password" placeholder="Nhập mật khẩu" name="matKhau" required></div>
    
    <hr>

    <button type="submit" class="btn btn-success" >Đăng nhập</button>
   <p style="color: black;">Chưa có tài khoản? <a style="color: red;" href="<?php echo WEBROOT.'index.php/user/add' ?>">Đăng ký ngay</p>
  </div>
</form>
  </div>
</div>
<br>