<?php 
    class division_model extends CI_Model {


        public function division() {  
            $sql="SELECT  * FROM division ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
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

        // public function selectOnestudent($id)
        // {
        //     $sql="SELECT * FROM student WHERE std_id = '$id' ";
        //     $query = $this->db->query($sql); 
        //     $data  = $query->result(); 
         
        //     return $data;
        
        // }

        // public function update_student($title ,$fname ,$lname ,$gender ,$tel ,$email,$status ,$std_code ,$birth_date     ,$class_id ,$std_id)
        // {
        //     $sqlEdt="UPDATE  student SET 
        //                      title   = '$title',
        //                      fname   = '$fname',
        //                      lname   = '$lname',
        //                      gender  = '$gender',
        //                      tel     = '$tel',
        //                      email   = '$email' ,
        //                      status  = '$status',
        //                      std_code  = '$std_code',
        //                      birth_date   = '$birth_date ',
        //                      class_id  = ''
                            
        //              WHERE std_id = '$std_id'";
        //     $exc_teacher = $this->db->query($sqlEdt);
        //     if ($exc_teacher)
        //     {
        //     return true;  
        //     }
        //     else
        //     {
        //     return false;
        //     }
        // }

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