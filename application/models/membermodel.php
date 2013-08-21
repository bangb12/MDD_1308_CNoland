<?

class membermodel extends CI_Model {
    
    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');
        
        if($query->num_rows == 1){
            return true;
        }
    }
    function create_member()
    {
        $new_member_insert_data = array(
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'password' => md5($this->input->post('password')),
            'emailaddress' => $this->input->post('emailaddress')
        );
        
        $insert = $this->db->insert('users', $new_member_insert_data);
        return $insert;
    }
}

?>