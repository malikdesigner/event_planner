<?php 
class Login_model extends CI_Model {
	public function __construct() {
        parent::__construct();

        // Initialization tasks go here
        $this->load->database();
    }
    public function authenticate($data) {

        // $this->db->where('email', $data['email'])
        // ->where('password', $data['password']);    
        // $query = $this->db->get('tbl-users');
        $email=$data['email'];
        $pass=$data['password'];
        $this->db->select('*');
        $this->db->from('tbl-users');
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
         } else {
            return false;
             }
        
    }
    public function save_user($data){
        $query = $this->db->insert('tbl-users',$data);
        return $query;
    }

}

?>