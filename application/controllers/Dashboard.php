<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
    }

    public function index() {
         $loggedin = FALSE;
        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('user/login', 'refresh');
        } elseif (!$this->ion_auth->in_group('members')) {
            redirect('user/login', 'refresh');
        } else {
             $loggedin = TRUE;
            $data['loggedin'] = $loggedin;
            $data['user'] = $this->ion_auth->user()->row();
            $data['main_content'] = 'users/dashboard';
            $this->load->view('includes/template', $data);
        }
    }
}