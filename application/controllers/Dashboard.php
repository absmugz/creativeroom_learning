<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
     
 
    }

    public function index() {
        
        $data['loggedin'] = $this->loggedin;
        $data['user'] = $this->ion_auth->user()->row();
        $data['main_content'] = 'users/dashboard';
        $this->load->view('includes/template', $data);
    
    }
}