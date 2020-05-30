<?php
/**
 * Class App
 * @author Calin Irina 
 * */
class App {
    protected $controller = 'RequestError';
    protected $request_method = 'GET';
    protected $params = [];
    protected $response;

    public function __construct() {
        // commented this to keep CORS & avoid cross-site scripting
        //header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Headers:*");
        header("Content-Type: application/json; charset=UTF-8");

        $allHeaders = getallheaders();

        //ALSO CHECK USER'S COOKIE BEFORE ALLOWING OPERATIONS
        //IF COOKIE DOESN'T EXIST, RETURN HTTP RESPONSE 401 - UNAUTHORIZED
        //SEE https://en.wikipedia.org/wiki/List_of_HTTP_status_codes

        if($_SERVER['REQUEST_METHOD'] != 'OPTIONS' && $_SERVER['REQUEST_METHOD'] != 'GET' && 
        (!isset($allHeaders['Content-Type']) || $allHeaders['Content-Type'] != 'application/json')) {
            header("Content-Type: application/json");
            http_response_code(400);
            echo "{'status':404, 'reason':'Expected payload as JSON'}";
            exit;
        }

        $this->request_method = $_SERVER['REQUEST_METHOD'];
        $url = $this->parseUrl();
        if($url) {
            $this->params = array_values($url);
        }

        switch($this->request_method) {
            case 'GET':
                echo 'Get method';
                $this->controller = 'Attack';
            break;
            case 'POST':
                $this->controller = 'Display';
            break;
            default:
                $this->controller = 'RequestError';
            break;
            //+ PUT
            //should we add functionality for DELETE? is it the case?
        }

        $data = json_decode(file_get_contents("php://input"),true);
        if($data==null) {
            http_response_code(404);
            exit;
        }

        require_once '../apiApp/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        $this->response = $this->controller->default($data);
        http_response_code($this->response['status']);
        if($this->response['body']) {
            echo $this->response['body'];
        }
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL)); 
        }
    }
}