<?php
/** 
 * Class Display
 * @author Calin Irina 
 * */

class Display extends Controller {
    function default($data) {
        $this->response['status'] = $this->service('post', $data)->filter($data)['status'];
        $this->response['body'] = $this->service('post', $data)->filter($data)['body'];
        return $this->response;
    }
}

?>