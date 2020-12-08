<?php 
    class teacher_model extends CI_Model {


        public function teacher() {  
            $sql="SELECT  * FROM teacher ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_teacher($title ,$fname ,$lname ,$tel ,$email ,$username ,$password )
        {
            $passworden = base64_encode(trim($password));
            $sql ="INSERT INTO  teacher (
                        title,
                        fname,
                        lname,
                        tel,
                        email,
                        username,
                        password
                        
                        )
                VALUES ('$title','$fname','$lname','$tel','$email','$username','$passworden');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
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
            // UPDATE vvv
            // $sqlEdt="UPDATE  sys_logs SET 
            //                 fname   = '$ffname',
            //                 lname   = '$llname',
            //                 gender  = '$gender',
            //                 email   = '$email',
            //                 enable  = '1' ,
            //                 ugp_id  = '$stat'
            //         WHERE log_id = '$lid'";
            // $exc_teacher = $this->db->query($sqlEdt);
            // if ($exc_teacher)
            // {
            // return true;  
            // }
            // else
            // {
            // return false;
            // }
        }

        public function update_teacher($title ,$fname ,$lname ,$tel ,$email ,$username ,$password ,$class_id ,$th_id)
        {
            $sqlEdt="UPDATE  teacher SET 
                             title   = '$title',
                             fname   = '$fname',
                             lname  = '$lname',
                             tel   = '$tel',
                             email  = '$email' ,
                             username  = '$username',
                             password  = '$password'
                            
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