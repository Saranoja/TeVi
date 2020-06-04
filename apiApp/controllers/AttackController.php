<?php
/** 
 * Class Attack
 * @author Calin Irina 
 * */

class AttackController extends Controller {
    function default($data) {
        $this->response['status'] = $this->service('get', $data)->filter($data)['status'];
        $this->response['body'] = $this->service('get', $data)->filter($data)['body'];
        return $this->response;
    }
    function getAll() {
        $this->response['status'] = $this->emptyService('get')->getAll()['status'];
        $this->response['body'] = $this->emptyService('get')->getAll()['body'];      
        return $this->response;
    }
}

?>