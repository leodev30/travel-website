<div  class="tt">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <?php echo "<img class='anhgioithieu' src='".WEBROOT."img/thaprua.jpg' alt='anhgioithieu'>";?>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-7">
      <br>
      <div>
        <vechungtoi>Về chúng tôi</vechungtoi>
      </div>
      
      <div>
        <!-- <h3>Đây là loại hình du lịch khá mới mẻ 
        cho những ai ưa thích du lịch trải nghiệm tự do
        trong mỗi chuyên đi bằng sự sáng tạo của chính mình.
        Với slogan "Xuyên việt theo cách của bạn"-bookTourVn
        sẽ là người bạn đồng hành cùng bạn cùng bạn khám phá
        vẻ đẹp về văn hóa và ẩm thực Việt Nam trên khắp 3 miền đất nước bắc Trung Nam.
        </h3> -->
      <h3>
          <?php
            $result = $gioithieus;
                foreach ($result  as $result ){ 
                    echo $result['veChungToi']; 
                  }
          ?>
               
      </h3>
      </div>
    </div>
  </div>
    
</div>

<br>