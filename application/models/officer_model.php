<?php 
    class Officer_model extends CI_Model {

        public function insert_officer($username,$title ,$fname ,$lname ,$tel ,$email ,$of_code ,$password)
        {
            $sql ="INSERT INTO  officer (
                        citizen_id,
                        title,
                        fname,
                        lname,
                        tel,
                        email,
                        of_code,
                        of_birth_date
                        
                        )
                VALUES ('$username','$title','$fname','$lname','$tel','$email','$of_code','$password');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                    return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }

        public function selectOneOfficer($id)
        {
            $sql="SELECT * FROM officer WHERE officer_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;

        }

        public function update_officer($title ,$fname ,$lname ,$tel ,$email ,$of_code ,$of_birth_date ,$of_id)
        {
            $sqlEdt="UPDATE  officer SET 
                             title   = '$title',
                             fname   = '$fname',
                             lname   = '$lname',
                             tel     = '$tel',
                             email   = '$email' ,
                             of_code  = '$of_code',
                             of_birth_date  = '$of_birth_date'
                            
                     WHERE officer_id = '$of_id'";
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

        public function del_officer_p($officer_id)
        {
            $sqlEdt = "DELETE FROM officer WHERE officer_id = '$officer_id';";


            $exc_teacher = $this->db->query($sqlEdt);
           
            if ($exc_teacher ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>