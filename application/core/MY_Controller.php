<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $loggedin = FALSE;

    function __construct() {
        parent::__construct();
    }

}

class Auth_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('user/login', 'refresh');
        } else {
            $this->loggedin = TRUE;
            
        }
    }

}

class Instructor_Controller extends Auth_Controller {
	function __construct() {
        parent::__construct();

        if (!$this->ion_auth->in_group('instructor')) {
            // If not, we send him to the login Page
            redirect('user/login', 'refresh');
        }
    }
}

