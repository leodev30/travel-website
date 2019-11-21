
<?php
require_once(ROOT.'Helper/Controller.php');
class LienHeController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/User.php');

        $users = new User();

        $d['users'] = $users->getAll();
        $this->set($d);
        $this->render("index");
    }
     
}
?>