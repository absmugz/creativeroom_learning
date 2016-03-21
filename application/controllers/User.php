<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('ion_auth');
    }

    //the function that loads the first form<br><br>

    public function index() {
        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('user/login', 'refresh');
        } elseif (!$this->ion_auth->in_group('members')) {
            redirect('user/login', 'refresh');
        } else {
            $data['user'] = $this->ion_auth->user()->row();
            $data['main_content'] = 'users/dashboard';
            $this->load->view('includes/template', $data);
        }
    }

    public function register() {

        $data['main_content'] = 'users/register';
        $this->load->view('users/includes/template', $data);
    }

    function login() {
        $this->load->library('form_validation');

        //validate form input
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            // check to see if the user is logging in
            // check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('dashboard', 'refresh');
                //var_dump($this->ion_auth->user()->row());die(); 
                //$data['main_content'] = 'users/dashboard';
                //$this->load->view('includes/template', $data);
            } else {
                // if the login was un-successful
                // redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('user/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        } else {
            // the user is not logging in so display the login page
            // set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );

            $data['main_content'] = 'users/login';
            $this->load->view('users/includes/template', $data);
        }
    }

    public function logout() {
        $this->ion_auth->logout();

        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('user/login', 'refresh');
    }

    public function my_courses() {

        $data['main_content'] = 'users/my_courses';
        $this->load->view('includes/template', $data);
    }

    public function profile() {

        $data['main_content'] = 'users/profile';
        $this->load->view('includes/template', $data);
    }

}
