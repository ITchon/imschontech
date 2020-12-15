<?php

class Model_contact extends CI_Model
{

public function get_contact_profile($contact_id){
    $sql="SELECT * FROM contact WHERE contact_id = '$contact_id'";
    $query = $this->db->query($sql);
    $result = $query->result()[0];
    if($query){
        return $result;
    }else{
        return false;
    }
}

}
?>