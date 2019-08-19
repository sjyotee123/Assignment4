
<?php

class Auth_model extends CI_Model
{


 function fetchtable()  
        {  
            $query = $this->db->get('studdata');  
            return $query->result();  
        }  


}

?>