<div >
  <marquee style="color:red;">
  <h3>
  Khuyến mãi đặc biệt trong dịp hè khi đặt Tours tại BookTourVn:
  </h3>
</marquee>
  <br>
  <div class="col-sm-1"></div>
<div class="col-sm-10">

  <div class="content" class="tt">
    
    <?php
        $tongsobanghi=count($uudais);
        $start=0;
        $i=1;
        
        for( $j=$start ; $j < $tongsobanghi ; $j++)
      { // { foreach ($danhlams as $danhlams)
       ?> 
      <div class="row">
              <div class="col-sm-12">
                <p>
                  <h3>
                    <?php 
                  echo $i.".Ưu đãi Đặc Biệt Tour Du Lịch ".$uudais[$j]['loaiUuDai'];
                   ?>
                  </h3>
                  <h4 style="color:blue;">  
              <?php 
               echo "<br>Mã Ưu Đãi: ".$uudais[$j]['maUuDai']."-Mã Tour: ".$uudais[$j]['maTour']."<br>";
              ?>    
                  </h4>
                  <h4>
                  <?php 
                echo $uudais[$j]['chiTietUuDai'];
              ?>
              </h4>
                </p>
               </div>
          <div class="col-sm-12">
            <?php echo "<img src='".WEBROOT."Img/".$uudais[$j]['anhUuDai']."' class='v1'>" ?>
          </div>  
          <div class="col-sm-12"><a href="<?php echo WEBROOT . 'index.php/tour/detail/'.$uudais[$j]['maTour']; ?>" ><h4 color="red;"> <?php echo "Click ngay để xem thông tin chi tiết Tour ".$uudais[$j]['loaiUuDai']?></h4></a></div>
          <br>            
             </div>
          <?php
              $i++;
          }
          ?>
        
  </div>
</div>
<div class="col-sm-1"></div>
<br>


<br>