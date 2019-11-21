
<?php
require_once(ROOT.'Helper/Controller.php');
class HomeController extends Controller
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
        session_start();
        session_destroy();
        header('location:'.WEBROOT."index.php/Home/index");
    }
    function login()
    {
        if(isset($_POST["tenTaiKhoan"]))
        {
            require(ROOT . 'Model/User.php');
            $users = new User();
            if($users->login($_POST['tenTaiKhoan'],$_POST['matKhau']))
            {
                session_start();
                $_SESSION["user"]=$_POST['tenTaiKhoan'];
                $us=$users->login($_POST['tenTaiKhoan'],$_POST['matKhau']);
                

                    $_SESSION["quyen"]=$us["quyen"];
                    header('location:'.WEBROOT."index.php/User/index");
            }

        }
        $this->render("login");
    }
    
}
?>