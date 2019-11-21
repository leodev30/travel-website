
<?php
require_once(ROOT.'Helper/Controller.php');
class TourController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/Tour.php');

        $tours = new Tour();

        $d['tours'] = $tours->getAll();
        $this->set($d);
        $this->render("index");
    }
    
    function add()
    {
       if (isset($_POST["maTour"]))
        {
            require(ROOT . 'Model/Tour.php');

            $tour = new Tour();
           $tour->add($_POST["maUuDai"],$_POST['maTour'],$_POST['diemDi'],$_POST['diemDen'],$_POST['ngayDi'],$_POST['ngayVe'],$_POST['phuongTien'],$_POST['soNguoi'],$_POST['huongDanVien'],$_POST['khachSan'],$_POST['giaTour']);

           header("Location: " . WEBROOT."index.php/Tour/index" );

           
        }

        $this->render("add");
    }

    function edit($maTour)
    {
        require(ROOT . 'Model/Tour.php');
        $tour= new Tour();

        $d["tours"] = $tour->getBymaTour($maTour);

        if (isset($_POST["maTour"]))
        {
           if ($tour->edit($_POST["maUuDai"],$_POST['maTour'],$_POST['diemDi'],$_POST['diemDen'],$_POST['ngayDi'],$_POST['ngayVe'],$_POST['phuongTien'],$_POST['soNguoi'],$_POST['huongDanVien'],$_POST['khachSan'],$_POST['giaTour']))
            {
                header("Location: " . WEBROOT . "index.php/Tour/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function datTour($maTour)
    {
        require(ROOT . 'Model/Tour.php');

        $tour = new Tour();
        $d['tour'] = $tour->datTour($maTour);
        header("Location: " . WEBROOT."index.php/TourDaDat/index" );
    }

    function delete($maTour)
    {
        require(ROOT . 'Model/Tour.php');

        $tour = new Tour();
        if ($tour->delete($maTour))
        {
            header("Location: " . WEBROOT . "index.php/Tour/index");
        }
    }

    function detail($maTour)
    {
        require(ROOT . 'Model/Tour.php');
        $tours = new Tour();
        $d['tours'] = $tours->getBymaTour($maTour);
        $this->set($d);
        $this->render("detail");
    }

    function result()
    {
       require(ROOT . 'Model/Tour.php');
        
        if(isset($_POST['contentsearch']))
        {
            $tours = new Tour();
             $this->data['tours'] = $tours->find($_POST['contentsearch']);   
            $this->set($this->data);
              $this->render("index");
          }
        
        
     }  

}
?>