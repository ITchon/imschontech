<?php 
    class student_model extends CI_Model {


        public function student() {  
            $sql="SELECT  * FROM student ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        public function get_student($std_id) {  
            $sql =  "SELECT * FROM student s 
            inner join class c on c.class_id = s.class_id
            inner join division d on d.dv_id = c.dv_id
            inner join train t on t.std_id = s.std_id
            inner join company cy on cy.company_id = t.company_id
            inner join contact ct on ct.contact_id = t.contact_id
             where s.std_id = $std_id";
            $query = $this->db->query($sql); 
            $data = $query->result();
            return $data;
        }
        // ,$class_id ,$th_id
        public function insert_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id)
        {
           
            $sql ="INSERT INTO  student (
                        title,
                        fname,
                        lname,
                        gender,
                        tel,
                        email,
                        status,
                        std_code,
                        birth_date,
                        class_id
                        
                        )
                VALUES ('$title','$fname','$lname','$gender','$tel','$email','$status','$std_code','$birth_date','$class_id');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOnestudent($id)
        {
            $sql="SELECT * FROM student WHERE std_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function update_student($title ,$fname ,$lname ,$gender ,$tel ,$email,$status ,$std_code ,$birth_date     ,$class_id ,$std_id)
        {
            $sqlEdt="UPDATE  student SET 
                             title   = '$title',
                             fname   = '$fname',
                             lname   = '$lname',
                             gender  = '$gender',
                             tel     = '$tel',
                             email   = '$email' ,
                             status  = '$status',
                             std_code  = '$std_code',
                             birth_date   = '$birth_date ',
                             class_id  = ''
                            
                     WHERE std_id = '$std_id'";
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

        public function del_std_p($std_id)
        {
            $sqlEdt = "DELETE FROM student WHERE std_id = '$std_id';";


            $exc_teacher = $this->db->query($sqlEdt);
           
            if ($exc_teacher ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>