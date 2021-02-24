<?php 
    class Assessment_model extends CI_Model {


        public function division() {  
            $sql="SELECT  * FROM division ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
     
        public function insert_sub($sub_name)
        {
           
            $sql ="INSERT INTO  subject (
                        subject_name
                        )
                VALUES ('$sub_name');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }
        public function add_grouplist($g_list)
        {
           
            $sql ="INSERT INTO group_list (glist_name) VALUES ('$g_list');";          
                $query = $this->db->query($sql);
                $last_id = $this->db->insert_id();
                if($query){
                return $last_id;
                }
                else{
                return false;
                } 
        }
        public function add_glist_sub($subject_id,$id)
        {
           
            $sql ="INSERT INTO subject_grouplist (subject_id,glist_id) VALUES ('$subject_id','$id');";          
                $query = $this->db->query($sql);
                $last_id = $this->db->insert_id();
                if($query){
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOnesubject($id)
        {
            $sql="SELECT * FROM subject WHERE subject_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function getsubgrouplist($id)
        {
            $sql="SELECT gl.glist_id,gl.glist_name FROM subject_grouplist as sgl
            inner join group_list as gl on gl.glist_id = sgl.glist_id
            WHERE sgl.subject_id = '$id'";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function selectOneglist($id)
        {
            $sql="SELECT * FROM group_list WHERE glist_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function getlist($id)
        {
            $sql="SELECT l.list_id,l.list_name FROM group_list as gl
            inner join list as l on l.glist_id = gl.glist_id
            WHERE gl.glist_id = '$id'";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function update_subname($sub_name ,$subject_id)
        {
            $sqlEdt="UPDATE  subject SET 
                             subject_name   = '$sub_name'
                     WHERE subject_id = '$subject_id'";
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

        public function del_sub($subject_id)
        {
            $sql = "DELETE FROM subject WHERE subject_id = '$subject_id';";
            $exc_dv = $this->db->query($sql);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }
        public function get_onegrouplist($id)
        {
            $sql="SELECT glist_name FROM group_list WHERE glist_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        
        }
        public function del_glist($glist_id)
        {
            $sql = "DELETE FROM group_list WHERE glist_id = '$glist_id';";
            $exc_dv = $this->db->query($sql);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }
        public function del_sub_glist($subject_id,$glist_id)
        {
            $sql = "DELETE FROM subject_grouplist WHERE subject_id = '$subject_id' AND glist_id = '$glist_id'";
            $exc_dv = $this->db->query($sql);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>