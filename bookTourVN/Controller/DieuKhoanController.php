
<?php
require_once(ROOT.'Helper/Controller.php');
class DieuKhoanController extends Controller
{
  function index()
    {
        require(ROOT . 'Model/DanhLam.php');

        $danhlams = new DanhLam();

        $d['danhlams'] = $danhlams->getAll();
        $this->set($d);
        $this->render("index");
    }
}
?>