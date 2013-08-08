<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Projects Model 
*/
class Projects_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	} // end __construct

	public function getLatestProjects(){
		// Get the last 5 projects in projects table
	/*	$this->db->order_by('id', 'desc');
		$query = $this->db->get('projects', 10);
		if($query->num_rows() == 0) :
			return FALSE;
		else :
			return $query->result();
		endif;*/
		
		$sql = 'SELECT * FROM projects INNER JOIN user_profiles on projects.username = user_profiles.username ORDER BY id DESC';
		$query = $this->db->query($sql);
		
		if($query->num_rows() == 0) :
			return FALSE;
		else :
			return $query->result();
		endif;

		
	} // end getLatestProjects

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
	}// end getProjects (multiple)

	public function getProject($id){
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM projects WHERE id = ?";
		$query = $this->db->query($sql, $id, $username);

		if($query->num_rows() > 0){
		    return $query->result_array();
		}
        else {
            return FALSE;
        }
	}//end getProject

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
	}// end addProject

    public function updateProject($data){
        $id = $data['id'];
        $title = $data['title'];
        $description = $data['description'];

        // update project in database
        $newData = array('title' => $title, 'description' => $description);
        $this->db->where('id',  $id);
        $query = $this->db->update('projects', $newData);

        if($query) :
            redirect('userhome');
        else :
            echo 'An error occured updating the project';
        endif;

    }// end updateProject

    public function deleteProject($id){
    	$this->db->where('id', $id);
    	$query = $this->db->delete('projects');
    	if($query){
    		redirect('userhome');
    	}
    }

} // end Projects