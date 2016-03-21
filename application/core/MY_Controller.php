<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();

    function __construct() {
        parent::__construct();
     
    }



}

class Auth_Controller extends MY_Controller {

    public $groups = array('members');

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('user/admin', 'refresh');
        } elseif (!$this->ion_auth->in_group($this->groups)) {
            redirect('user/login', 'refresh');
        } else {
            $this->ion_auth->user()->row();
        }
    }



}
