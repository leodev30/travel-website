
<?php
require_once(ROOT.'Helper/Controller.php');
class UserController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/User.php');

        $users = new User();

        $d['users'] = $users->getAll();
        $this->set($d);
        $this->render("index");
    }
     function logout()
    {
        
        session_destroy();
        header('location:'.WEBROOT."#");

        
    }
    function login()
    {
        if(isset($_POST["taiKhoan"]))
        {
            require(ROOT . 'Model/User.php');
            $users = new User();
            if($users->login($_POST['taiKhoan'],$_POST['matKhau']))
            {
                
                $_SESSION["user"]=$_POST['taiKhoan'];


                $us=$users->login($_POST['taiKhoan'],$_POST['matKhau']);


                $_SESSION["quyen"]=$us["quyen"];
                
                $_SESSION["maTaiKhoan"]=$us["maTaiKhoan"];
         
                header('location:'.WEBROOT."#");
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert('Bạn nhập sai tài khoản hoặc mật khẩu.');
                </script>
                <?php  
            }

        }

        $this->render("login");
    }

    function add()
    {
       if (isset($_POST["taiKhoan"]))
        {
            require(ROOT . 'Model/User.php');

            $users = new User();
            $users->add($_POST["taiKhoan"],$_POST['matKhau'],$_POST['hoTen'],$_POST['email'],$_POST['SDT'],'2');

           header("Location: " . WEBROOT."#" );

        }

        $this->render("add");
    }

    function profile(){
        require(ROOT . 'Model/User.php');

        $users = new User();

        $d['users'] = $users->profile();
        $this->set($d);
        $this->render("profile");
    }
    function edit($maTaiKhoan)
    {
        require(ROOT . 'Model/User.php');
        $user = new User();

        $d["users"] = $user->getBymaTaiKhoan($maTaiKhoan);
     
        if(isset($_SESSION["user"]) &&($_SESSION["quyen"]=="2"))
         {
             if (isset($_POST["taiKhoan"]))
            {
                if ($user->editPro($_POST["taiKhoan"],$_POST["matKhau"],$_POST["hoTen"],$_POST["email"],$_POST["SDT"]))
                {
                    
                    header("Location: " . WEBROOT . "#");
                     ?>
                   <script type="text/javascript">
                         alert("Bạn đã sửa thông tin thàng công!");
                    </script>
                    <?php
                }
            
            }
            $this->set($d);
            $this->render("edit");
           
        }
    
        else if (isset($_POST["taiKhoan"]) &&($_SESSION["quyen"]=="1"))
        {
           if ($user->edit($_POST["matKhau"],$_POST["hoTen"],$_POST["email"],$_POST["SDT"],$_POST["quyen"],$maTaiKhoan))
            {
                ?>
                <script type="text/javascript">
                    alert("Bạn đã sửa thông tin thàng công!");
                </script>
                <?php
                header("Location: " . WEBROOT . "index.php/user/index");
            }
            
        }
        $this->set($d);
        $this->render("edit");
    }
    
    function delete($maTaiKhoan)
    {
        require(ROOT . 'Model/User.php');

        $user = new User();
        if ($user->delete($maTaiKhoan))
        {   
            ?>
            <script type="text/javascript">
                alert("Bạn đã xóa thàng công khách hàng!");
            </script>
            <?php
            header("Location: " . WEBROOT . "index.php/user/index");
        }
        // else echo "lỗi";
    }

    function datTour()
    {
        
         if (isset($_POST["taiKhoan"]))
        {
            require(ROOT . 'Model/User.php');

            $dt = new DT();
           $dt->add($_POST["tenTour"],$_POST['soNgayDi'],$_POST['soNguoi']);

           header("Location: " . WEBROOT );

       }
          

        $this->render("datTour");
    }

  


}
?>