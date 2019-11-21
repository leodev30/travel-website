<br>
<div class="col-sm-1"></div>
<div class="col-sm-10">
<h1>Danh sách khách hàng</h1>
<div >
    <table class="table table-bordered table-striped custab">
        <thead>     
        <tr>
            <th>Tên tài khoản</th>
            <th>Mật khẩu</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Quyền</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        $tongsobanghi=count($users);
        $s_bghimoitrang=4;
        $start=0;
        $explode_url=explode('/', $_SERVER["REQUEST_URI"]);
        if(count($explode_url)>5)
            $start=($explode_url[count($explode_url)-1]-1)*$s_bghimoitrang;
        $i=1;
        for( $j=$start ; ($j<$s_bghimoitrang+$start) && ($j<$tongsobanghi) ; $j++)
        //foreach ($users as $user)
        {
            echo '<tr>';
            echo "<td>" . $users[$j]['taiKhoan'] . "</td>";
            echo "<td>" . $users[$j]['matKhau'] . "</td>";
            echo "<td>" . $users[$j]['hoTen'] . "</td>";
            echo "<td>" . $users[$j]['email'] . "</td>";
            echo "<td>" . $users[$j]['SDT'] . "</td>";
            echo "<td>" . $users[$j]['quyen'] . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='".WEBROOT."index.php/user/edit/". $users[$j]["maTaiKhoan"] . "' >
            <span class='glyphicon glyphicon-edit'></span> Edit</a> 
            <a href='/bookTourVN/index.php/user/delete/" . $users[$j]["maTaiKhoan"] . "' class='btn btn-danger btn-xs'>
            <span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</div>
<div class="col-sm-1"></div>
<br>

<div id="phantrang" style="width:100%; ">
        <ul style="margin-left:40%; width:30%;">
            <?php
            $i=1;
            while($i<=ceil($tongsobanghi/$s_bghimoitrang))
            {?>
                <li style="float:left; list-style-type: none;"><a style="display:block; padding:10px; border:solid 1px orange; " href=
                "<?php $str=WEBROOT."index.php/user/index/";
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
