<?php 
    class class_model extends CI_Model {


        public function class() {  
            $sql="SELECT  * FROM class ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_cl($teacher_id,$dv_id,$class_name,$class_group)
        {
           
            $sql ="INSERT INTO  class (
                        teacher_id,
                        dv_id,
                        class_name,
                        class_group

                        )
                VALUES ('$teacher_id','$dv_id','$class_name','$class_group');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOneclass($id)
        {
            $sql="SELECT cl.class_id , cl.teacher_id , cl.dv_id , cl.class_name , cl.class_group , th.fname , th.lname , dv.dv_name FROM class AS cl 
            INNER JOIN teacher AS th ON th.teacher_id = cl.teacher_id 
            INNER JOIN division AS dv ON dv.dv_id = cl.dv_id WHERE cl.class_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function edit_pr($teacher_id,$dv_id,$class_name,$class_group,$class_id)
        {
            $sqlEdt="UPDATE  class SET 
                             teacher_id    = '$teacher_id',
                             dv_id         = '$dv_id',
                             class_name        = '$class_name',
                             class_group         = '$class_group'
                            
                     WHERE class_id = '$class_id'";
            $exc_cp = $this->db->query($sqlEdt);
            if ($exc_cp)
            {
            return true;  
            }
            else
            {
            return false;
            }
        }

        public function delete_pc($class_id)
        {
            $sqlEdt = "DELETE FROM class WHERE class_id = '$class_id';";


            $exc_cp = $this->db->query($sqlEdt);
           
            if ($exc_cp ){
              
              return true;  
              
            }else{  return false; }
        }
  
    }
        

?>