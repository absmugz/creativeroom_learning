<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Courses extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    //the function that loads the first form<br><br>
    public function index() {

        $data['loggedin'] = $this->loggedin;
        $data['user'] = $this->ion_auth->user()->row();
        $data['main_content'] = 'courses/courses';
        $this->load->view('includes/template', $data);
    }

    public function view() {
        $data['loggedin'] = $this->loggedin;
        $data['user'] = $this->ion_auth->user()->row();
        $data['main_content'] = 'courses/course_veiw';
        $this->load->view('includes/template', $data);
    }

    public function take() {
        $data['loggedin'] = $this->loggedin;
        $data['user'] = $this->ion_auth->user()->row();
        $data['main_content'] = 'courses/take_course_view';
        $this->load->view('includes/template', $data);
    }

}
