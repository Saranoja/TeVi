<?php

/** 
 * Class Home
 * @author Calin Irina 
 * */

class Home extends Controller {
    function index() {
        $this->view('about/HomePage');
    }
}

?>