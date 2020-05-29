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
        header("Access-Control-Allow-Origin:*");
        header("Content-Type: application/json; charset=UTF-8");

        $this->request_method = $_SERVER['REQUEST_METHOD'];
        $url = $this->parseUrl();
        if($url) {
            $this->params = array_values($url);
        }

        switch($this->request_method) {
            case 'GET':
                $this->controller = 'Attack';
            break;
            case 'POST':
                $this->controller = 'Display';
            break;
            default:
                $this->controller = 'RequestError';
            break;
        }

        $data = json_decode(file_get_contents("php://input"),true);
        if($data==null) {
            http_response_code(404);
            exit;
        }

        require_once '../app/controllers/' . $this->controller . '.php';
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