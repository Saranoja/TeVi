<?php
/** 
 * @author Calin Irina 
 * */

class Controller {
    protected $response;
    protected $body;

    function __construct() {
        $this->response['status'] = 405;
        $this->response['body'] = null;
    }

    protected function service($service, $data) {
        require_once '../apiApp/services/' . $service . '.php';
        return new $service($data);
    }

    protected function emptyService($service) {
        require_once '../apiApp/services/' . $service . '.php';
        return new $service;
    }

    /**
     * @return formatted string
     * htmlspecialchars converts special characters to HTML entities
     * stripslashes un-quotes a quoted string
     */
    protected function sanitizeString($string) {
        return htmlspecialchars(stripslashes(trim($string)));
    }
}