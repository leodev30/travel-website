
<?php
require_once(ROOT.'Helper/Controller.php');
class GioiThieuController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/GioiThieu.php');

        $gioithieus = new GioiThieu();

        $d['gioithieus'] = $gioithieus->getAll();
        $this->set($d);
        $this->render("index");
    }
    
    
}
?>