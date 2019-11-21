<br>
<div >
<h1>Danh sách Tour</h1>
<div class="row" id="bgContent"  class="tt">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <?php if (session_status() == PHP_SESSION_NONE) 
                    session_start(); 
          if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="1"))
          {?>
             <a href="<?php echo WEBROOT."index.php/tour/add"; ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add</a>
        <?php }?>
    
         

        <?php
        $tongsobanghi=count($tours);
        $s_bghimoitrang=2;
        $start=0;
        $maTour="ALL";//thêm
        $explode_url = explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
            {
                $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
                $maTour=$explode_url[count($explode_url)-2];
            }
        $i=1;
        for($j=$start;($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi);$j++)
        {   
        
            if($i%2==1) echo "<div class='row'>";
        
            echo "<div class='col-sm-4' style='background-color:#66FFFF; padding-left:10px;padding-bottom:10px; '>";
            echo "<br>"."Tour ".$tours[$j]['diemDi']."-".$tours[$j]['diemDen'];
            echo "<br>";
            if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="1"))
            {?>
            <?php 
            echo "    
            <a class='btn btn-danger btn-xs' href='".WEBROOT."index.php/Tour/edit/". $tours[$j]["maTour"] . "' >
            <span class='glyphicon glyphicon-edit'></span> Edit</a>"; 
            }
            ?>
            <?php
            echo "
            <a href='/bookTourVN/index.php/Tour/detail/" . $tours[$j]["maTour"] . "' class='btn btn-info btn-xs'>
             detail</a>";
            if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="2"))
            {?>
            <?php 
            echo "
            <a href='/bookTourVN/index.php/Tour/datTour/". $tours[$j]["maTour"] . "' class='btn btn-danger btn-xs'>
            Đặt Tour</a></td>";
            }
            ?>
            <?php
            echo "</div>";
            echo "<div class='col-sm-1'></div>";
            if($i%2==0) echo "</div>";
            $i++;
        }
        ?>
        </div>
 </div>
</div>
<div id="phantrang" style="width:100%; ">
        <ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px orange; " href=
                "<?php $str=WEBROOT."index.php/tour/index/";
                       $str.=$maTour."/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
</div>
<br>