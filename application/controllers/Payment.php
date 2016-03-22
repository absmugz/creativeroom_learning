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
$this->load->library('email');


$this->email->from('absmugz09@gmail.com', 'Absolom');
$this->email->to($user->email);


$this->email->subject('You have been activated');
$this->email->message('Thank you for registering for'.$course_name.'Please use this reference number : '.$order_ref.'Pay at :'.$bank_info);

$this->email->send();

$RESPONDE = 'Thank you for ordering this course, an email with the banking details and the reference number has been sent to your email, once you have paid it takes up to 48 hours for us to activate, if you send us proof of payment it will be instant. Happy learning ! Or use the details below for your payment.';
echo json_encode($RESPONDE);


} 
    
}