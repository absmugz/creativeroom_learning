<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Topics_model extends MY_Model {

    public $table = 'topics';

    function __construct() {

        $this->timestamps = FALSE;
        parent::__construct();
    }

}
