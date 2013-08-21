<?

class viewmodel extends CI_Model{
    
    public function __constract(){
    }
    
    public function getView($pagename='', $data=array()){
        include $pagename;
    }
}

?>