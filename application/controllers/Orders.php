<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('orders_model');
        $this->load->model('users_courses_model');
        $this->load->model('courses_model');
    }
        
public function add($course_id) {
	    
    	$course = $this->courses_model->get($course_id); // THIS ONE SHOULD BE FIRST
      
      if($course===FALSE)
      {
        redirect();// REDIRECT TO THE COURSES PAGE...
      }
      
      if ($this->ion_auth->logged_in())
      {
      	$user = $this->ion_auth->user()->row();
        
        if($this->courses_model->user_has_access($user->id,$course_id))
        {
        	redirect(); // REDIRECT TO THE COURSE TOPICS AS THE USER IS LOGGED IN AND HAS ACCESS TO THE COURSE
        }
        //create unique order number CrsN_number_here_ = course_id, Usr_id_number_here = user_id
        $order_num = 'CrsN' . $course_id . 'UsrN' . $user->id;
        //var_dump($order_num);
        
        $id = $this->orders_model->insert(array(
            
                'order_num' => $order_num,
                'user_id' => $user->id,
                'payed' => 0,
            ));
        
       
        $data['order_ref'] = $order_num;
        $data['user'] = $user;
        $data['course'] = $course;
    
 
        //$this->render('payment/payment_view'); 
            //redirect to payment page finished here   
        $data['loggedin'] = $this->loggedin;
        
        $data['main_content'] = 'payment/payment';
        $this->load->view('includes/template', $data);
      }
      
      else
      {
      	$_SESSION['buy_course'] = $course->id;
      	redirect('register');
      }
        //Insert into users_courses - user_id, order_id, course_id
    }
    
// DONE add course


}