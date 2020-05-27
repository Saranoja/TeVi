<?php

/** 
 * Class Result
 * @author Calin Irina 
 * */

class Result extends Controller {
    function index() {
        $this->view('stats/Chart');
    }
}
