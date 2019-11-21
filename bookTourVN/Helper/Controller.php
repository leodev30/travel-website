<?php
    class Controller
    {
        var $vars = [];
        var $layout = "layout";
        var $vars2=[];
        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
            
        }
        function setvar2($d1)
        {
             $this->vars2 = array_merge($this->vars, $d1);
        }
        function render($filename)
        {
            extract($this->vars);
            if(count($this->vars2)!=0)
                extract($this->vars2);
            ob_start();
            require(ROOT . "View/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;

            }
            else
            {
                require(ROOT . "View/Shared/" . $this->layout . '.php');
            }
        }

       
    }
?>