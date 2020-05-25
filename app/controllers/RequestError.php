<?php

/** 
 * Class RequestError
 * @author Calin Irina 
 * */

class RequestError extends Controller {
    /**
     * @return respose
     */
    function default() {
        return $this->response;
        echo 'Request Error';
    }
}

?>