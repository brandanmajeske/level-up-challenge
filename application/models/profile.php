<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Profile Model 
*/
class Profile extends CI_Model {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		//some code
	}

	public function getUser($username){

		$sql = "SELECT * FROM user_profiles WHERE username = ?";
		$query  = $this->db->query($sql, $username);

		if($query){
			return $query->result_array();
		}
	}

	public function bioUpdate($data){ 
		$user = $data['username'];
		$user_bio = $data['user_bio'];

		$newData = array('user_bio' => $user_bio);
		$this->db->where('username',  $user);
		$query = $this->db->update('user_profiles', $newData);

		if($query){
			redirect('userhome');
		}
	}

	public function interestsUpdate($data){ 
		$user = $data['username'];
		$user_interests = $data['user_interests'];

		$newData = array('user_interests' => $user_interests);
		$this->db->where('username',  $user);
		$query = $this->db->update('user_profiles', $newData);

		if($query){
			redirect('userhome');
		}
	}

	public function profilePicUpdate($data){
		$filename = $data['filename'];
		$username = $data['username'];
		
		$newData = array('user_image' => $filename);
		$this->db->where('username',  $username);
		$query = $this->db->update('user_profiles', $newData);

		if($query){
			redirect('userhome');
		}else{
			return FALSE;
		}
	}


} // end Profile