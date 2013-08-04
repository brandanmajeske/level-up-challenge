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

} // end Projects