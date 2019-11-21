
<?php
require_once(ROOT.'Helper/Controller.php');
class TourDaDatController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/TourDaDat.php');

        $tourdadats = new TourDaDat();

        $d['tourdadats'] = $tourdadats->getAll();
        $this->set($d);
        $this->render("index");
    }
    
     function logout()
    {
        
        session_destroy();
        header('location:'.WEBROOT."#");

        
    }
    function edit($maDon)
    {
        require(ROOT . 'Model/TourDaDat.php');
        $tourdadat = new TourDaDat();

        $d["tourdadats"] = $tourdadat->getBymaDon($maDon);

        if (isset($_POST["maDon"]))
        {
           if ($tourdadat->edit($_POST["tinhTrang"],$maDon))
            {
                header("Location: " . WEBROOT . "index.php/TourDaDat/index");
            }
            
        }
        $this->set($d);
        $this->render("edit");
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
                header('location:'.WEBROOT."#");
            }

        }
        $this->render("login");
    }
    
   function delete($maDon)
    {
        require(ROOT . 'Model/TourDaDat.php');

        $tourdadat = new TourDaDat();

        if ($tourdadat->delete($maDon))
        {   
            header("Location: " . WEBROOT . "index.php/TourDaDat/index");
        }
        // else echo "lỗi";
    }
    
    

}
?>