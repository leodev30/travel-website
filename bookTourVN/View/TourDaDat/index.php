<br>
<h1>Danh sách Đặt Tour của Khách Hàng</h1>
<div class="row"   class="tt">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div >
    <table class="table table-bordered table-striped custab">
        <thead>     
        <tr>
            <th>Mã Đơn</th>
            <th>Mã Tour</th>
            <th>Mã Tài Khoản</th>
            <th>Tình Trạng</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($tourdadats);
        $s_bghimoitrang=4;
        $start=0;
        $explode_url=explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
            $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for( $j=$start ; ($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi) ; $j++)
        //foreach ($tourDaDats as $tourdadat)
        {
            echo '<tr>';
            echo "<td>" . $tourdadats[$j]['maDon'] . "</td>";
            echo "<td>" . $tourdadats[$j]['maTour'] . "</td>";
            echo "<td>" . $tourdadats[$j]['taiKhoan'] . "</td>";
            echo "<td>" . $tourdadats[$j]['tinhTrang'] . "</td>";
            if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="1"))
            {?>
            <?php 
            echo "<td class='text-center'>
            <a href='/bookTourVN/index.php/Tour/detail/" . $tourdadats[$j]['maTour'] . "' class='btn btn-info btn-xs'>
            Chi Tiết Tour</a>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/TourDaDat/edit/". $tourdadats[$j]["maDon"] . "' >
            <span class='glyphicon glyphicon-edit'></span> Edit</a> 
            <a href='/bookTourVN/index.php/TourDaDat/delete/" . $tourdadats[$j]["maDon"] . "' class='btn btn-danger btn-xs'>
            <span class='glyphicon glyphicon-remove'></span> Del</a></td>";

            }
            else{?>
              <?php
              echo "<td class='text-center'>
              <a href='/bookTourVN/index.php/Tour/detail/" . $tourdadats[$j]['maTour'] . "' class='btn btn-info btn-xs'>
               Chi Tiết Tour</a>
              <a href='/bookTourVN/index.php/TourDaDat/delete/" . $tourdadats[$j]["maDon"] . "' class='btn btn-danger btn-xs'>
              <span class='glyphicon glyphicon-remove'></span> Del</a></td>";

            }
            ?>
            <?php
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</div>
<div class="col-sm-1"></div>
</div>
</div>

<br>

<div id="phantrang" style="width:100%; ">
        <ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px orange; " href=
                "<?php $str=WEBROOT."index.php/TourDaDat/index/";
                       $str.=$i;
                echo $str; ?>"><?php echo $i;?></a></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>

</div>
<br>
