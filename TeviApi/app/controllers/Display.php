<?php
/** 
 * Class Display
 * @author Calin Irina 
 * */

class Display extends Controller {
    function default($data) {
        $this->response['status'] = $this->service('get', $data)->get($data)['status'];
        $this->response['body'] = $this->service('get', $data)->get($data)['body'];
        return $this->response;
    }
}

?>