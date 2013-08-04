<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Projects Model 
*/
class Projects_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	} // end __construct


	public function getProjects(){	
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM projects WHERE username = ?";
		$query = $this->db->query($sql, $username);
		if($query->num_rows() > 0){
			foreach($query->result_array() as $row){
				$projects[] = $row;
			}
			return $projects;
		}  else {
			
			return FALSE;
		}

	}

	public function addProject($data){
		$username = $this->session->userdata('username');
		$title = $data['title'];
		$description = $data['description'];
		$sql = "INSERT INTO projects 
			(`username`, `title`, `description`)
			values (?,?,?)";
		$query = $this->db->query($sql, array($username, $title, $description));
		if($query){
			redirect('userhome');
		}
	}

} // end Projects