<?php
/** 
 * Class Attack
 * @author Calin Irina 
 * */

class Attack extends Controller {
    function default($data) {
        $this->response['status'] = $this->service('post', $data)->post($data)['status'];
        $this->response['body'] = $this->service('post', $data)->post($data)['body'];
        return $this->response;
    }
}

?>