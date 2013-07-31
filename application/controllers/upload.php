<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Upload Controller 
*/
class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();
		

	} // end __construct

	public function index(){
		
	}

	
	public function do_upload()
	{	
		
		$config['upload_path'] = './uploads/user_profile_img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		get_instance()->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}


	
	
} // end Upload