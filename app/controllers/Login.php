<?php

class Login extends Controller {
    function index() {
        $this->view('login/Login');
    }

    function login_action(){
        $this->view('login/LoginAction');
    }
}

?>