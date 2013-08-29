<?

class membermodel extends CI_Model {
    //Creates new row in the database if the function is called
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