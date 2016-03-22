<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('recipes_model');
        //$this->load->library('ion_auth');
    }

    //the function that loads the first form<br><br>
    public function index() {
       
        $data['user'] = $this->ion_auth->user()->row();
        $data['loggedin'] = $this->loggedin;
        $data['main_content'] = 'home';
        $this->load->view('includes/template', $data);
    }

}
