<?php

/** 
 * Class RequestError
 * @author Calin Irina 
 * */

class RequestError extends Controller {
    /**
     * @return respose
     */
    function default($data) {
        //echo 'Request Error';
        return $this->response;
    }
}

?>