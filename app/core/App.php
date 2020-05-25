<?php
class App {
    protected $request_method;
    protected $response;
    protected $params;
    protected $controller;
    protected $model;

    public function __construct() {
        $this->request_method = $_SERVER['REQUEST_METHOD'];
        $url = $this->parseUrl();
        if($url) {
            $this->params = array_values($url);
        }

        switch($this->request_method) {
            case 'GET': {
                $this->controller = 'CheckData';
                $_GET = json_decode(file_get_contents("php://input"),true);
            break;
            }
            case 'POST': {
                $this->controller = 'Attack';
                $_POST = json_decode(file_get_contents("php://input"),true);
            break;
            }
            default: {
                $this->controller = 'RequestError';
            break;
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        $this->response = $this->controller->default();
        http_response_code($this->respose['Status']);

        if($this->response['body']) {
            echo $this->response['body'];
        }
    }
}

?>