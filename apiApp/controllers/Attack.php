<?php
/** 
 * Class Attack
 * @author Calin Irina 
 * */

class Attack extends Controller {
    function default($data) {
        $this->response['status'] = $this->service('get', $data)->filter($data)['status'];
        $this->response['body'] = $this->service('get', $data)->filter($data)['body'];
        return $this->response;
    }
}

?>