<?php 
    class Contact_model extends CI_Model {


        public function contact() {  
            $sql="SELECT  * FROM contact ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_p($name,$tel)
        {
            $sql ="INSERT INTO  contact (
                        name,
                        tel
                        )
                VALUES ('$name','$tel')";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return $this->db->insert_id();
                }
                else{
                return false;
                } 
        }

        public function selectOneContact($id)
        {
            $sql="SELECT * FROM contact WHERE contact_id = '$id' ";
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
                            
                     WHERE contact_id = '$ct_id'";
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

        public function del_p($contact_id)
        {
            $sqlEdt = "DELETE FROM contact WHERE contact_id = '$contact_id';";

            $exc_contact = $this->db->query($sqlEdt);
           
            if ($exc_contact){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>