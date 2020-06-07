<?php
/** 
 * Class Attack
 * @author Calin Irina, Platon Victor
 * */

class AttackController extends Controller {
    function default($data) {
        $res = $this->service('get', $data)->filter($data);
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];
        return $this->response;
    }

    function getAll() {
        $res = $this->emptyService('get')->getAll();
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];      
        return $this->response;
    }

    function getAttack($req){
        $res = $this->emptyService('get')->getAttack($req);
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];      
        return $this->response;
    }


    function deleteAttack($param)
    {
        $res = $this->emptyService('delete')->deleteAttack($param);
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];      
        return $this->response;
    }


    function updateAttack($data)
    {
        $res = $this->emptyService('put')->updateAttack($data);
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];      
        return $this->response;
    }

    function insertAttack($data)
    {
        $res = $this->service('post', $data)->insert($data);
        $this->response['status'] = $res['status'];
        $this->response['body'] = $res['body'];      
        return $this->response;
    }


}

?>