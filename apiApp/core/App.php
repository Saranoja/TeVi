<?php

/**
 * Class App
 * @author Calin Irina & Victor Platon
 * */

class App
{

    protected $controller = 'RequestError';
    protected $request_method = 'GET';
    protected $params = [];
    protected $response;


    public function __construct()
    {

        require_once 'attacks-routes.php';
        // commented this to keep CORS & avoid cross-site scripting
        //header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Headers:*");
        header("Content-Type: application/json; charset=UTF-8");

        $allHeaders = getallheaders();

        $allRoutes = [
            ...$attacksRoutes
        ];

        foreach ($allRoutes as $routConfig) {
            if ($this->parseRequest($routConfig)) {
                exit;
            }
        }
        $this->handle404();
    }

    function parseRequest($routConfig)
    {
        
        $url = $_SERVER['REQUEST_URI'];
        $this->request_method = $_SERVER['REQUEST_METHOD'];

        //check the methods match
        if ($this->request_method != $routConfig['method']) {
            return false;
        }

        //regex match
        $regExpString = $this->routeExpToRegExp($routConfig['route']);

        //check the route match
        if (preg_match("/$regExpString/", $url, $matches)) {
            $parts = explode('/', $routConfig['route']);
            $query = [];
            //Params
            $index = 1;
            foreach ($parts as $p) {
                if ($p[0] == ':') {
                    $this->params[substr($p, 1)] = $matches[$index];
                    $index++;
                }
            }

            //query split from url
            if (strpos($url, '?')) {
                $queryString = explode('?', $url)[1];

                if ($queryString) {
                    $queryParts = explode('&', $queryString);
                }

                foreach ($queryParts as $part) {
                    if (strpos($part, '=')) {
                        $query[explode('=', $part)[0]] = explode('=', $part)[1];
                    }
                }
            }

            //save body
            $data = file_get_contents("php://input");
            if (strlen($data)) {
                $data = json_decode($data, true);
            } else {
                $data = NULL;
            }

            //verify middlewares
            if (isset($routConfig['middlewares'])) {
                foreach ($routConfig['middlewares'] as $middlewareName) {
                    $didPass = call_user_func($middlewareName, [
                        "params" => $this->params,
                        "query" => $query,
                        "data" => $data
                    ]);

                    if (!$didPass) {
                        exit();
                    }
                }
            }

            call_user_func($routConfig['handler'], [
                "params" => $this->params,
                "query" => $query,
                "data" => $data
            ]);

            return true;
        }

        return false;
    }

    function handle404()
    {
        Response::status(404);
        Response::json("Not found");
    }

    function routeExpToRegExp($route)
    {
        $regExpString = "";
        $parts = explode('/', $route);

        foreach ($parts as $p) {
            $regExpString .= '\/';
            if ($p[0] == ":") {
                $regExpString .= '([a-zA-Z0-9]+)';
            } else {
                $regExpString .= $p;
            }
        }
        $regExpString .= '(\?.*)?$';

        return $regExpString;
    }
}
