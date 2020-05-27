<?php

/** 
 * Class Stats
 * @author Calin Irina 
 * */

class Stats extends Controller {
    function index() {
        $this->view('stats/StatsV2');
    }

    function Step2() {
        $this->view('stats/StatsStep2');
    }

    function Step3() {
        $this->view('stats/StatsStep3');
    }
}

?>