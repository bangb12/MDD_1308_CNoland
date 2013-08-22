<?

class loginModel extends CI_Model{
    
    public function __constract(){
        
    }
    
    public function getAll(){
        
        $sql= "select first, last, id, email, userid
        from Users";
        $st = $this->db->prepare($sql);
        $st->execute();
        
        return $st->fetchAll();
    
    }
    
    public function getOne($id=0){
        $sql = "select * from Users where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));
        
        return $st->fetchAll();
    }
    
    public function login($username,$password){
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));       
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return FALSE;
        }
        
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('refresh');

    }
    public function update($id='', $email=''){
        $sql = "update Users set email=:email where id=:id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id,":email"=>$email));
    }
    public function delete($id=0){
        $sql = "delete from Users where id=:id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));
    }
    public function add($first='',$last='',$userid='',$password='',$email=''){
        $sql = "insert into Users (userid,password,first,last,email) values (:userid,:password,:first,:last,:email)";
        $st = $this->db->prepare($sql);
        $st->execute(array(":userid"=>$userid,":password"=>$password,":first"=>$first,":last"=>$last,":email"=>$email));
        $userid = $this->db->lastInsertId();
    }
}

?>