<?php

class Router
{
    static public function parse($url, $request)
    {
        $url = trim($url);
        

        if ($url == "/booktourVN/"||$url == "/BookTourVN/"||$url == "/bookTourVN/")
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[1];
            $request->action = $explode_url[2];
            $request->params = array_slice($explode_url, 3);
        }

    }
}
?>