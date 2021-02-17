<?php 
    class Teacher_model extends CI_Model {


        public function teacher() {  
            $sql="SELECT  * FROM teacher ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_teacher($username,$title ,$fname ,$lname ,$tel ,$email ,$th_code ,$password ,$th_id)
        {
            $sql ="INSERT INTO  teacher (
                        citizen_id,
                        title,
                        fname,
                        lname,
                        tel,
                        email,
                        th_code,
                        th_birth_date
                        
                        )
                VALUES ('$username','$title','$fname','$lname','$tel','$email','$th_code','$password');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                    return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }

        public function selectOneTeacher($id)
        {
            $sql="SELECT * FROM teacher WHERE teacher_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;

        }

        public function update_teacher($title ,$fname ,$lname ,$tel ,$email ,$th_code ,$th_birth_date ,$th_id)
        {
            $sqlEdt="UPDATE  teacher SET 
                             title   = '$title',
                             fname   = '$fname',
                             lname   = '$lname',
                             tel     = '$tel',
                             email   = '$email' ,
                             th_code  = '$th_code',
                             th_birth_date  = '$th_birth_date'
                            
                     WHERE teacher_id = '$th_id'";
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

        public function del_teacher_p($teacher_id)
        {
            $sqlEdt = "DELETE FROM teacher WHERE teacher_id = '$teacher_id';";


            $exc_teacher = $this->db->query($sqlEdt);
           
            if ($exc_teacher ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>