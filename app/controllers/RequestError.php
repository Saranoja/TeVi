<?php

/** 
 * Class RequestError
 * @author Calin Irina 
 * */

class RequestError extends Controller {
    /**
     * @return respose
     */
    function index() {
        echo 'Request Error';
        return $this->response;
    }
}

?>