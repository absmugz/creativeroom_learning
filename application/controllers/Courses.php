<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {

    function __construct() {
        //$this->groups = array('members'); //it means that only the users in members group have access to that particular controller
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('courses_model');
        $this->load->model('topics_model');
       
    }
    
    //the function that loads the first form<br><br>
    public function index() {

        $data['loggedin'] = $this->loggedin;
        $data['user'] = $this->ion_auth->user()->row();
        $data['courses'] = $this->courses_model->get_all();
        $data['main_content'] = 'courses/courses';
        $this->load->view('includes/template', $data);
    }

    public function view($course_id) {
        $data['has_access'] = FALSE;
        $data['loggedin'] = $this->loggedin;
        $data['course'] = $this->courses_model->with_topics('fields:name,id')->get($course_id);
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
    
//Courses crude functionality
    
public function create() {
        $id = $this->courses_model->insert(array(
            'name' => 'HTML introduction',
        ));


        if ($id) {
$topics = array(" HTML Overview", "HTML Editors", "HTML Basic page", "HTML Elements", "HTML Attributes", "HTML Headings", "HTML Paragraphs","HTML Styles");

            foreach ($topics as $value) {

                $this->topics_model->insert(array(
                    'name' => $value,
                    'course_id' => $id,
                ));
            }
        }
    }
//Courses crude functionality
}
