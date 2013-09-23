<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*	Home Controller 
*/
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->model('projects_model');
		$data = $this->projects_model->getLatestProjects();

		if($data === FALSE){
			$data = "Sorry no projects to display!";
		}

		$this->load->view('header');
		$this->load->view('home', array('data' => $data));
		$this->load->view('footer');
	}

} // end Home