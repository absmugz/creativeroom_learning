<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('orders_model');
        $this->load->model('users_courses_model');
        $this->load->model('courses_model');
    }

    public function index() {
        render('welcome_message');
    }
    

public function checkout() {

 $user = $this->ion_auth->user()->row();

$order_ref = $this->input->post('order_ref');
$course_name = $this->input->post('course_name');
$bank_info = $this->input->post('bank_info');

//var_dump($user->email);die();
//$this->load->library('email');

//set email library configuration
 $config = Array(
 'protocol' => 'smtp',
 'smtp_host' => 'ssl://smtp.googlemail.com',
 'smtp_port' => 465,
 'smtp_user' => 'absmugz09@gmail.com',
 'smtp_pass' => 'makabongwe@01',
 );
 
 //load email library
 $this->load->library('email', $config);
 
$this->email->from('absmugz09@gmail.com', 'Absolom');
$this->email->to($user->email);


$this->email->subject('You have been activated');
$this->email->message('Thank you for registering for'.$course_name.'Please use this reference number : '.$order_ref.'Pay at :'.$bank_info);

$this->email->send();

//echo 'You have been activated';



} 
    
}