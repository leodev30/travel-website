
<div class="white"></div>
<div  class="col-sm-12" id="bgContent"  class="tt">
<form taiKhoan="frmthem" method="POST" action="<?php echo WEBROOT.'index.php/user/add'; ?>" enctype="multipart/form-data">
  <div class="col-sm-1"></div>
  <div class="col-sm-10"><h2 align="center" style="color: blue;"> Đăng ký </h2><hr><h3 align="center" style="color:white;">Quý khách vui lòng hoàn thiện những thông tin sau</h3></div>
  <div class="col-sm-1"></div>

  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label class="white" for="taiKhoan">Tài Khoản:</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" taiKhoan="taiKhoan" placeholder="Tài khoản" id="taiKhoan" >
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label class="white" for="matKhau">Mật khẩu:</label>
  </div>
  <div class="col-sm-8">
  <input type="password" class="form-control" taiKhoan="matKhau" placeholder="Mật Khẩu" id="matKhau">
  </div>
   <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label class="white" for="">Nhập lại mật khẩu:</label>
  </div>
  <div class="col-sm-8">
  <input  type="password" class="form-control" taiKhoan="" placeholder="Nhập lại" id="reMatKhau">
  </div>
   <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label class="white" for="hoTen">Họ tên</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" taiKhoan="hoTen"placeholder="Họ và Tên" >
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label class="white" for="email">Email</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" taiKhoan="email"placeholder="email" id="email">
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <label  class="white" for="SDT">SĐT</label>
  </div>
  <div class="col-sm-8">
  <input type="text" class="form-control" taiKhoan="SDT" placeholder="SDT" >
  </div>

<div class="col-sm-12">
    <p  class="white" >Bằng việc tạo tài khoản bạn đồng ý với những <a  href="<?php echo WEBROOT.'index.php/DieuKhoan/index' ?>"style="color: red;">Chính sách và điều khoản của chúng tôi</a>.</p></div>
<div class="col-sm-12" align="center"><button type="submit" class="btn btn-success" onclick="check()" >Đăng ký</button></div>

    <div class="col-sm-12"><p class="white">Đã có tài khoản? <a style="color: red;" href="<?php echo WEBROOT.'index.php/user/login' ?>">Đăng nhập ngay</p>
  </div>
</form>
</div>
<br>



</form>
  </div>
  </div>



<script type="text/javascript">
        
        function check()
      { var taiKhoan=document.getElementById("taiKhoan").value;
        if(taiKhoan=="") alert("Mục Tên tài khoản là bắt buộc");
        var matKhau=document.getElementById("matKhau").value;
        if(matKhau=="") alert("Mục Mật khẩu là bắt buộc");
        else {var rematKhau=document.getElementById("rematKhau").value;
        if(rematKhau=="") alert("Mục nhập lại mật khẩu là bắt buộc");
      else if(matKhau!=rematKhau) alert("Nhập lại mật khẩu phải giống mật khẩu đã nhập");}
        var email=document.getElementById('email').value;
      var bieu_thuc_email = /(\w(-?@)\w+\.{1}[a-zA-Z]{2,})/i;
      if(bieu_thuc_email.test(email)){var x='a';}
      if(x!='a')alert("Nhập lại email với dạng abc@gemail.com");
      if(y!='b') alert('So dien thoai khong hop le');
      if(taiKhoan!=""&&matKhau!=""&&rematKhau!=""&&matKhau==rematKhau&&bieu_thuc_email.test(email))
      {
        alert("Cảm ơn vì đã đăng ký!");
        alert('Trở về trang chủ');
        location.replace("main.html");
      }
    }
    </script>