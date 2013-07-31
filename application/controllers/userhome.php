<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	User Home Controller 
*/
class UserHome extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index($error = null){
		$user_data  = $this->session->all_userdata();
		$username = $user_data['username'];
		$this->load->model('profile');
		$this->load->library('upload');

		if($this->session->userdata('logged_in')){
			$this->load->view('header');
			$profile = $this->profile->getUser($username);
			$this->load->view('profile', array('user_data' => $user_data, 'profile' => $profile, 'error' => $error));
			$this->load->view('footer');
		} else {
			redirect('login');
		}		
	}

	public function getUserDetails($username){
		$this->load->model('profile');
		$this->profile->getUser($username);
	}

	public function editBio(){
		$data = $_POST;
		$this->load->model('profile');
		$this->profile->bioUpdate($data);
		
	}

	public function editInterests(){
		$data = $_POST;
		$this->load->model('profile');
		$this->profile->interestsUpdate($data);
		
	}

	public function do_upload()
	{	
		
		$config['upload_path'] = './uploads/user_profile_img/';
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '300';
		$config['max_width']  = '800';
		$config['max_height']  = '800';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{	
			$error = array('error' => $this->upload->display_errors('<p class="alert alert-error">', '</p>'));
			
			$this->index($error);
			
		}
		else
		{
			$data['username'] = $this->session->userdata('username');
			$data['filename'] = $_FILES['userfile']['name'];
			$this->load->model('profile');
			$this->profile->profilePicUpdate($data);

			//$data = array('upload_data' => $this->upload->data());

			//redirect('userhome');
		}
	}

} // end Home