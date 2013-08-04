<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Projects Controller 
*/
class Projects extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('projects');
		$this->load->view('footer');
	}

	public function newproject(){
		$data = $_POST;
		$this->load->model('projects_model');
		$this->projects_model->addProject($data);
	}

	public function edit($id){
		$this->load->model('projects_model');
		$data = $this->projects_model->getProject($id);
        $this->load->view('header');
        $this->load->view('project_edit', array('data'=> $data));
        $this->load->view('footer');
	}

    public function update(){
        $data = $_POST;
        $this->load->model('projects_model');
        $this->projects_model->updateProject($data);
    }

} // end Projects