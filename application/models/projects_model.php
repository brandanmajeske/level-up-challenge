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
		
		$sql = 'SELECT * FROM projects INNER JOIN user_profiles on projects.username = user_profiles.username ORDER BY id DESC';
		$query = $this->db->query($sql);
		
		if($query->num_rows() == 0) :
			return FALSE;
		else :
			$rows = $query->result_array();
			foreach ($rows as $row) {
				$row['description'] = substr($row['description'], 0, 100);
				
			}

			return $rows;
			
		endif;

		
	} // end getLatestProjects

	public function getProjects(){	
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM projects WHERE username = ? ORDER BY id DESC";
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

		$allowedTags='<p><strong><em><u><hr><strike><figure><figcaption><div><cite><q><dfn><abbr><time>';
		$allowedTags.='<table><caption><col><thead><tfoot><tr><th><blockquote>';
		$allowedTags.= '<h1><h2><h3><h4><h5><h6><img><a>';
	 	$allowedTags.='<li><ol><ul><span><div><br><ins><del>'; 
		
		$username = $this->session->userdata('username');
		$title = strip_tags($data['title'], $allowedTags);
		$description = strip_tags($data['description'], $allowedTags);
		$published = date('n/d/Y');
		$sql = "INSERT INTO projects 
			(`username`, `title`, `description`, `published`)
			values (?,?,?,?)";
		$query = $this->db->query($sql, array($username, $title, $description, $published));
		if($query){
			redirect('userhome');
		}
	}// end addProject

    public function updateProject($data){

	$allowedTags='<p><strong><em><u><hr><strike><figure><figcaption><div><cite><q><dfn><abbr><time>';
	$allowedTags.='<table><caption><col><thead><tfoot><tr><th><blockquote>';
	$allowedTags.= '<h1><h2><h3><h4><h5><h6><img><a>';
 	$allowedTags.='<li><ol><ul><span><div><br><ins><del>'; 

    	$id = $data['id'];
	$title = strip_tags($data['title'],  $allowedTags);
	$description = strip_tags($data['description'],  $allowedTags);
	$published = date('n/d/Y');


        // update project in database
        $newData = array('title' => $title, 'description' => $description, 'published' =>$published);
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

    public function search($search_term){
        $search = strip_tags($search_term);
        $array = array('title' => $search, 'description' => $search);
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('user_profiles', 'projects.username = user_profiles.username', 'inner');
        $this->db->order_by('id', 'DESC');
        $this->db->or_like($array);
        $query = $this->db->get();

     if($query->num_rows() > 0){
	foreach($query->result_array() as $row){
      	$projects[] = $row;
	}
	      return $projects;
	}  else {
	   return FALSE;
	}
    } // end search
} // end Projects