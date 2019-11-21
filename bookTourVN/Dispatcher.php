<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();//$request->url=$SERVER["request_URI"]
        Router::parse($this->request->url, $this->request);
        

        $controller = $this->loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        // echo "\n"+$name;
        $file = ROOT . 'Controller/' . $name . '.php';
        require($file);
        $controller = new $name();
        return $controller;
    }

}
?>