<?php 
    class Division_model extends CI_Model {


        public function division() {  
            $sql="SELECT  * FROM division ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
     
        public function insert_dv($dv_name)
        {
           
            $sql ="INSERT INTO  division (
                        dv_name
                        )
                VALUES ('$dv_name');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOnedivision($id)
        {
            $sql="SELECT * FROM division WHERE dv_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function update_division($dv_name ,$dv_id)
        {
            $sqlEdt="UPDATE  division SET 
                             dv_name   = '$dv_name'
                     WHERE dv_id = '$dv_id'";
            $exc_teacher = $this->db->query($sqlEdt);
            if ($exc_teacher)
            {
            return true;  
            }
            else
            {
            return false;
            }
        }

        public function del_dv_p($dv_id)
        {
            $sqlEdt = "DELETE FROM division WHERE dv_id = '$dv_id';";


            $exc_dv = $this->db->query($sqlEdt);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>