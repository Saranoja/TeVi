<?php

class Register extends Controller {
    function index() {
        $this->view('Regis/Register');
    }
    function register_action(){
        $this->view('Regis/RegisterAction');
    }
}

?>