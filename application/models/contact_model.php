<?php 
    class contact_model extends CI_Model {


        public function contact() {  
            $sql="SELECT  * FROM contact ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_p($name ,$tel ,$username ,$password)
        {
            $sql ="INSERT INTO  contact (
                        name,
                        tel,
                        username,
                        password
                        )
                VALUES ('$name','$tel','$username','$password');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOneContact($id)
        {
            $sql="SELECT * FROM contact WHERE contract_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
           
        }

        public function edit_p($name ,$tel ,$username ,$password ,$ct_id)
        {
            $sqlEdt="UPDATE  contact SET 
                             name         = '$name',
                             tel          = '$tel',
                             username     = '$username',
                             password     = '$password'
                            
                     WHERE contract_id = '$ct_id'";
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

        public function del_p($contract_id)
        {
            $sqlEdt = "DELETE FROM contact WHERE contract_id = '$contract_id';";


            $exc_contact = $this->db->query($sqlEdt);
           
            if ($exc_contact){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>