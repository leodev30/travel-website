
<?php
require_once(ROOT.'Helper/Controller.php');
class UuDaiController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/UuDai.php');

        $uudais = new UuDai();

        $d['uudais'] = $uudais->getAll();
        $this->set($d);
        $this->render("index");
    }
    
}
?>