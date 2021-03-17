<?php 
    class model_spv extends CI_Model {



        public function get_subject_teacher() {  
            $sql="SELECT  * FROM `subject` where subject_type = 'อาจารย์นิเทศ' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;

        }
        public function get_spv_contact() {  
            $sql="SELECT  * FROM `subject` where subject_type = 'ผู้ควบคุมการฝึกงาน' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;

        }

        public function get_train($std_id) {  
            $sql="SELECT  * FROM `student_train_detail` where std_id = '$std_id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;

        }
  

        public function get_subject_data($subject_id)
        {
            $sql="SELECT * FROM `subject` s 
            inner join subject_grouplist sg on sg.subject_id = s.`subject_id` 
            inner join group_list gl on gl.glist_id = sg.glist_id 
            where s.subject_id = '$subject_id'";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        }
        public function get_spv_data($spv_id)
        {
            $sql="SELECT * FROM `subject_score` ss
            inner join group_list gl on gl.glist_id = ss.`glist_id`
            where `spv_contact_id` = $spv_id";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        }
        public function get_spv_data_th($spv_id)
        {
            $sql="SELECT * FROM `subject_score_th` ssth
            inner join group_list gl on gl.glist_id = ssth.`glist_id`
            where `spv_teacher_id` = $spv_id";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        }


        public function supervision_save($train_id,$subject_id,$suggest,$position,$data_score)
        { 
                $sql ="INSERT INTO  supervision_contact (t_id,subject_id,approve_date,suggestion,position ) VALUES ('$train_id','$subject_id',CURDATE(),'$suggest','$position');";          
                $query = $this->db->query($sql);  
                $last_id = $this->db->insert_id();
                $chk ;
                foreach($data_score as $ds){
                    $glist_id =  $ds['glist_id'];
                    $score =  $ds['score'];
                    $sql ="INSERT INTO  subject_score (spv_contact_id,glist_id,score ) VALUES ($last_id,'$glist_id','$score');";          
                    $query = $this->db->query($sql);  
                    if($query) $chk = true;
                    else $chk = false;
                }
                return $chk;

        }
        public function supervision_save_teacher($train_id,$subject_id,$data_score)
        { 
                $sql ="INSERT INTO  supervision_teacher (t_id,subject_id,approve_date ) VALUES ('$train_id','$subject_id',CURDATE());";          
                $query = $this->db->query($sql);  
                $last_id = $this->db->insert_id();
                $chk ;
                foreach($data_score as $ds){
                    $glist_id =  $ds['glist_id'];
                    $score =  $ds['score'];
                    $sql ="INSERT INTO  subject_score_th (spv_teacher_id,glist_id,score ) VALUES ($last_id,'$glist_id','$score');";          
                    $query = $this->db->query($sql);  
                    if($query) $chk = true;
                    else $chk = false;
                }
                return $chk;

        }

        public function get_spv($std)
        { 
            $sql="SELECT sc.spv_contact_id,std.company_name,std.std_code,std.dv_name,std.start_date,
            std.end_date,std.spv_title,std.spv_fname,std.spv_lname,s.subject_name,sc.approve_date FROM supervision_contact sc 
            inner join student_train_detail std on std.t_id = sc.t_id 
            inner join subject s on s.subject_id = sc.subject_id
            where std.std_id = $std";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        }

        public function get_spv_teacher($std)
        { 
            $sql="SELECT st.spv_teacher_id,std.company_name,std.std_code,std.dv_name,std.start_date,
            std.end_date,std.spv_title,std.spv_fname,std.spv_lname,s.subject_name,st.approve_date FROM supervision_teacher st 
            inner join student_train_detail std on std.t_id = st.t_id 
            inner join subject s on s.subject_id = st.subject_id
            where std.std_id = $std";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
            return $data;
        }


    }
        

?>