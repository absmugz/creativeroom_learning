<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('recipes_model');
        //$this->load->library('ion_auth');
    }

    //the function that loads the first form<br><br>

    public function register() {

        $data['main_content'] = 'users/register';
        $this->load->view('includes/users/template', $data);
    }

    public function login() {

        $data['main_content'] = 'users/login';
        $this->load->view('includes/users/template', $data);
    }

}
