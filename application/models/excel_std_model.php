<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Excel_std_model extends CI_Model {
	public function excel_std() {
        $sql="SELECT * FROM events ";
        $query = $this->db->query($sql); 
        $data  = $query->result(); 
	}
}
?>