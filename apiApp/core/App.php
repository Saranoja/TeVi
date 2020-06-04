<?php

use function PHPSTORM_META\registerArgumentsSet;

/**
 * Class App
 * @author Calin Irina & Victor
 * */

class App {
    
    protected $controller = 'RequestError';
    protected $request_method = 'GET';
    protected $params = [];
    protected $response;
    
    
    public function __construct() {

        //TRE SA VEDEM AICI CUM FACEM PATH-UL
        require_once 'C:\XAMPP\htdocs\TeVi\apiApp\core\attacks-routes.php';
        // commented this to keep CORS & avoid cross-site scripting
        //header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Headers:*");
        header("Content-Type: application/json; charset=UTF-8");

        $allHeaders = getallheaders();

        $allRoutes = [
            ...$attacksRoutes
        ];
        
        foreach($allRoutes as $routConfig){
            if($this->parseRequest($routConfig)){
                exit;
            }
        }

        $this->handle404();

        //ALSO CHECK USER'S COOKIE BEFORE ALLOWING OPERATIONS
        //IF COOKIE DOESN'T EXIST, RETURN HTTP RESPONSE 401 - UNAUTHORIZED
        //SEE https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

        // if($_SERVER['REQUEST_METHOD'] != 'OPTIONS' && $_SERVER['REQUEST_METHOD'] != 'GET' && 
        // (!isset($allHeaders['Content-Type']) || $allHeaders['Content-Type'] != 'application/json')) {
        //     header("Content-Type: application/json");
        //     http_response_code(400);
        //     echo "{'status':404, 'reason':'Expected payload as JSON'}";
        //     exit;
        // }

        // $this->request_method = $_SERVER['REQUEST_METHOD'];
        // $url = $this->parseUrl();
        // if($url) {
        //     $this->params = array_values($url);
        // }

        // switch($this->request_method) {
        //     case 'GET':
        //         echo 'Get method';
        //         $this->controller = 'Attack';
        //     break;
        //     case 'POST':
        //         $this->controller = 'Display';
        //     break;
        //     default:
        //         $this->controller = 'RequestError';
        //     break;
        //     //+ PUT
        //     //should we add functionality for DELETE? is it the case?
        // }

        // $data = json_decode(file_get_contents("php://input"),true);
        // if($data==null) {
        //     http_response_code(404);
        //     exit;
        // }

        // require_once '../apiApp/controllers/' . $this->controller . '.php';
        // $this->controller = new $this->controller;
        // $this->response = $this->controller->default($data);
        // http_response_code($this->response['status']);
        // if($this->response['body']) {
        //     echo $this->response['body'];
        // }
    }

    function parseRequest($routConfig){
        //regex match
        $url = $_SERVER['REQUEST_URI'];
        $this->request_method = $_SERVER['REQUEST_METHOD'];

        //check the methods match
        if($this->request_method != $routConfig['method']){
            return false;
        }

        $regExpString =$this->routeExpToRegExp($routConfig['route']);

        //check the route match
        if(preg_match("/$regExpString/", $url, $matches)){
            $parts =explode('/', $routConfig['route']);
            $query = [];
            //Params
            $index = 1;
            foreach($parts as $p){
                if($p[0] == ':'){
                    $this->params[substr($p,1)] =$matches[$index];
                    $index++;
                }
            }
            
            //Query
            if(strpos($url,'?')){
                $queryString = explode('?', $url)[1];

                if($queryString){
                    $queryParts = explode('&',$queryString);
                }

                foreach($queryParts as $part){
                    if(strpos($part,'=')){
                        $query[explode('=',$part)[0]]= explode('=',$part)[1];
                    }
                }
            }

            var_dump($query);
           
            

            //Data

            //$obj ->name;
            //$arr['name'];
            $data = file_get_contents("php://input");
            if(strlen($data)) {
                $data = json_decode($data);
            }
            else{
                $data = NULL;
            }

            if(isset($routConfig['middlewares'])){
                foreach($routConfig['middlewares'] as $middlewareName){
                    $didPass = call_user_func($middlewareName,[
                        "params" => $this->params,
                        "query" => $query,
                        "data" => $data
                    ]);
                    
                    if(!$didPass){
                        exit();
                    }
                }
            }
            

            call_user_func($routConfig['handler'],[
                "params" => $this->params,
                "query" => $query,
                "data" => $data
            ]);

            // var_dump($this->params);


            return true;

        }

        return false;
    }

    function handle404(){
        Response::status(404);
    }

    function routeExpToRegExp($route){
        $regExpString = "";
        $parts = explode('/',$route);

        foreach($parts as $p){
            $regExpString .= '\/';
            if($p[0] == ":"){
                $regExpString .= '([a-zA-Z0-9]+)';
            }else{
                $regExpString .= $p;
            }
        }
        $regExpString .= '(\?.*)?$';

        return $regExpString;
    }

    // protected function parseUrl(){
    //     if(isset($_GET['url'])){
    //         return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL)); 
    //     }
    // }
}