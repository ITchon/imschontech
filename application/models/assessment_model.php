<?php 
    class Assessment_model extends CI_Model {


        public function division() {  
            $sql="SELECT  * FROM division ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
     
        public function insert_sub($sub_name,$sub_type)
        {
           
            $sql ="INSERT INTO  subject (
                        subject_name,subject_type
                        )
                VALUES ('$sub_name','$sub_type');";          
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
            inner join grouplist_list as gll on gll.glist_id = gl.glist_id
            inner join list as l on l.list_id = gll.list_id
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

        public function update_glist_name($glist_name ,$glist_id)
        {
            $sqlEdt="UPDATE  group_list SET 
                             glist_name   = '$glist_name'
                     WHERE glist_id = '$glist_id'";
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

        public function add_list($list)
        {
           
            $sql ="INSERT INTO list (list_name) VALUES ('$list');";          
                $query = $this->db->query($sql);
                $last_id = $this->db->insert_id();
                if($query){
                return $last_id;
                }
                else{
                return false;
                } 
        }

        public function add_glist_list($glist_id,$id)
        {
           
            $sql ="INSERT INTO grouplist_list (glist_id,list_id) VALUES ('$glist_id','$id');";          
                $query = $this->db->query($sql);
                $last_id = $this->db->insert_id();
                if($query){
                return true;
                }
                else{
                return false;
                } 
        }

        public function del_glist_list($glist_id,$list_id)
        {
            $sql = "DELETE FROM grouplist_list WHERE glist_id = '$glist_id' AND list_id = '$list_id'";
            $exc_dv = $this->db->query($sql);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }

        public function del_list($list_id)
        {
            $sql = "DELETE FROM list WHERE list_id = '$list_id';";
            $exc_dv = $this->db->query($sql);
           
            if ($exc_dv ){
              
              return true;  
              
            }else{  return false; }
        }

        public function selectOnelist($id)
        {
            $sql="SELECT * FROM list WHERE list_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function update_list_name($list_name ,$list_id)
        {
            $sqlEdt="UPDATE  list SET 
                             list_name   = '$list_name'
                     WHERE list_id = '$list_id'";
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

    }
        

?>