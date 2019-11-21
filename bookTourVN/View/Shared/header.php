<div>
  <div class="top">
  <div class="row">
    <div class=" hoverHeader col-sm-2">
      <p><a href="<?php echo WEBROOT."index.php/GioiThieu/index";?>" style="text-decoration: none;"><txtHead>Về chúng tôi</txtHead></a></p>
    </div>
    <div class=" hoverHeader col-sm-3">
      <p><a href="<?php echo WEBROOT."index.php/DieuKhoan/index";?>" style="text-decoration: none;"><txtHead>Điều khoản và điều kiện</txtHead></a></p>
    </div>
    <div class="hoverHeader col-sm-2"> 
      <p><a href="<?php echo WEBROOT."index.php/LienHe/index";?>" style="text-decoration: none;"><txtHead>Liên hệ</txtHead></a></p>
    </div>
     <div class="col-sm-1"></div>
   
  <div class="hoverHeader col-sm-2">
      <p>
        <a href="<?php echo WEBROOT."index.php/User/login";?>" style="text-decoration: none;">
          <txtHead>
                <?php if(!isset($_SESSION["user"]))
        {?>
         <a style="font-size: 10px;text-decoration: none;text-align: center;color: white;"  href="<?php echo WEBROOT."index.php/User/login";?>">Đăng nhập</a>
        <?php
        }
        else 
        {
         
          echo "<a href='' style='color:yellow;font-size: 10px;;text-decoration: none;position: relative;right:59px;text-align: center;'> Xin chào:".$_SESSION["user"]."</a>";
        }
        ?>
         <?php
        if(isset($_SESSION["user"]))
        {
      ?>
      <a style="font-size: 10px;text-decoration: none;position: absolute;right: 20px;top:5px;text-align: center;color: red;" href="<?php echo WEBROOT."index.php/User/logout";?>">Đăng xuất</a></li>
      <?php
        }
      ?>
          </txtHead>
       </a>
      </p>
  </div>
  <?php if(!isset($_SESSION["user"]))
        {?>
   <div class="hoverHeader col-sm-2">
      <p><a href="<?php echo WEBROOT."index.php/User/add";?>" style="text-decoration: none;"><txtHead>Đăng ký</txtHead></a></p>
  </div>
 
 <?php
      }
      ?>

  </div>
  </div>
</div>

<div >
  <div class="header1"> 
  <div class="row a2">
    <div class="col-sm-2"> <?php echo "<img src='".WEBROOT."img/logo.jpg' style='height:181px;' alt='logo'  class='logo'>";?></div>
    <div class="col-sm-10"> <?php echo "<img src='".WEBROOT."img/bg.jpg' alt='bg' class='logo1'> ";?></div>
  </div>
</div>
</div>

<div >



  <?php if(isset($_SESSION["user"]))
  {?>
    <?php
    if($_SESSION["quyen"]=="1")
     {?> 
      
      <div class="body"> 
      <div id="wrapper">
            <div id="head" class="clearfix">
                <div class="body" style="background-color: black;">
                   <ul id="main_menu" >
                       <li>
                          <a style="text-decoration: none;" href="<?php echo WEBROOT."#";?>">BookTourVN</a>
                            <ul class="sub_menu" style="z-index: 9999;">
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/User/index";?>">Trang chủ</a>
                                </li>
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/DanhLam/index";?>">Một số danh lam thắng cảnh</a></li>
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/Uudai/index";?>">Ưu đãi</a></li>
                            </ul>
                        </li>
                        <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/User/index";?>">Tài khoản khách hàng</a></li>
                        <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/Tour/index";?>">Tour</a></li>
                        <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/TourDaDat/index";?>">Tour Khách Hàng</a></li>     
                    </ul>
                   
                    <div class="col-sm-6">
                     <?php  
                    echo "<form class='form-inline my-2 my-lg-0' name='search' action='".WEBROOT."index.php/Tour/result' method='post'>"."
                    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='contentsearch'>
                    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search'></i></button>
                    </form> ";
                    ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <?php
          }
      else{?>
        <div class="body"> 
      <div id="wrapper">
            <div id="head" class="clearfix">
                <div class="body" style="background-color: black;">
                   <ul id="main_menu">
                       <li>
                          <a style="text-decoration: none; position: relative; top: -10px;" href="<?php echo WEBROOT."#";?>">BookTourVN</a>
                            <ul class="sub_menu" style="z-index: 9999;">
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."#";?>">Trang chủ</a>
                                </li>
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/DanhLam/index";?>">Một số danh lam thắng cảnh</a></li>
                                <li><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/Uudai/index";?>">Ưu đãi</a></li>
                                <li> </li>
                            </ul>
                        </li>
                        
                            
                    </ul>
                    <div class="col-sm-2">
                      <p><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/Tour/index";?>">Tour</a></p>
                    </div>
                    <div class="col-sm-2">
                      <p><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/TourDaDat/index";?>">Tour Đã Đặt</a></p>

                    </div>

                    <div class="col-sm-4">
                            <?php  

                        echo "<form class='form-inline my-2 my-lg-0' name='search' action='".WEBROOT."index.php/Tour/result' method='post'>"."
                        <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='contentsearch'>
                        <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search'></i></button>
                        </form> ";
                        ?>
                      </div>

                    <div class="col-sm-2"> 

                    <p><a style="text-decoration: none;"  href='<?php echo WEBROOT."index.php/User/Profile/".isset($_SESSION["user"]); ?>'> 
                    Profile</a></p>
                    </div> 
                    </div>

                </div>
            </div>
        </div>
      </div>
      <?php
      
      }}

else{
      ?>


         <div class="body">
          <div>
          <div class="row topnav">

            <div class="col-sm-2">
              <p><a href="<?php echo WEBROOT."#";?>" style="text-decoration: none;">Trang chủ</a></p>
            </div>
            <div class="col-sm-3">
              <p><a href="<?php echo WEBROOT."index.php/DanhLam/index";?>" style="text-decoration: none;">Một số danh lam thắng cảnh</a></p>
            </div>
            <div class="col-sm-1">
              <p><a style="text-decoration: none;" href="<?php echo WEBROOT."index.php/Uudai/index";?>">Ưu đãi</a></p>
            </div>
              <div class="col-sm-3">        
                    <?php  
                    echo "<form class='form-inline my-2 my-lg-0' name='search' action='".WEBROOT."index.php/Tour/result' method='post'>"."
                    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='contentsearch'>
                    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'><i class='fa fa-search'></i></button>
                    </form> ";
                    ?>
                    </div>
            <div class="col-sm-3">
            </div>
          </div>
          </div>
        </div>
      <?php
      }
      ?>
      
    