<?php

/** 
 * @author Calin Irina 
 * */

class Controller {
    protected $response;
    protected $body;

    /** 
     * @return new model
     * @param $model name
     */
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    protected function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    function __construct() {
        $this->response['status'] = 405;
        $this->response['body'] = null;
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

?>