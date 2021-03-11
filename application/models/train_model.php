<?php 
    class Train_model extends CI_Model {


        // public function train() {  
        //     $sql="SELECT  * FROM train ";
        //     $query = $this->db->query($sql); 
        //     $data  = $query->result(); 
        // }
        // ,$class_id ,$th_id
        public function insert_p($company_id ,$std_id,$teacher_id  ,$contact_id,$start_date ,$end_date ,$status ,$note)
        {
            $sql ="INSERT INTO  train (
                        company_id,
                        std_id,
                        teacher_id,
                        contact_id,
                        start_date,
                        end_date,
                        status,
                        note
                        )
                VALUES ('$company_id','$std_id','$teacher_id','$contact_id','$start_date','$end_date','$status','$note');";          
                $query = $this->db->query($sql);
                $t_id = $this->db->insert_id();
                if($query)
                {
                    $sql ="select * from 
                    (select adddate('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i)
                     date from (select 0 i union select 1 union select 2 union select 3 union select
                      4 union select 5 union select 6 union select 7 union select 8 union select 9) 
                      t0, (select 0 i union select 1 union select 2 union select 3 union select 4 
                      union select 5 union select 6 union select 7 union select 8 union select 9) 
                      t1, (select 0 i union select 1 union select 2 union select 3 union select 4 
                      union select 5 union select 6 union select 7 union select 8 union select 9) 
                      t2, (select 0 i union select 1 union select 2 union select 3 union select 4 
                      union select 5 union select 6 union select 7 union select 8 union select 9)
                       t3, (select 0 i union select 1 union select 2 union select 3 union select 4 
                       union select 5 union select 6 union select 7 union select 8 union select 9) t4) v 
                       where date between '$start_date' and '$end_date'"; 
       
                    $query = $this->db->query($sql);
                    $res_date = $query->result();
                        foreach($res_date as $rd){
                            $sql ="INSERT INTO  std_work_time (
                                t_id,
                                date
                                )
                        VALUES ('$t_id','$rd->date');";          
                        $query = $this->db->query($sql);
                    }
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOnetrain($id)
        {
            $sql="SELECT tn.t_id , 
                        cp.company_id ,
                        std.std_id ,
                        ct.contact_id ,
                        cp.company_name , 
                        std.fname , 
                        std.lname , 
                        ct.name , 
                        tn.start_date , 
                        tn.end_date , 
                        tn.status , 
                        tn.note FROM train AS tn
            INNER JOIN company AS cp ON cp.company_id = tn.company_id
            INNER JOIN student AS std ON   std.std_id = tn.std_id
            INNER JOIN contact AS ct ON ct.contact_id = tn.contact_id
            WHERE tn.t_id = $id";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
          
        }

        public function edit_p($company_id ,$std_id ,$contact_id ,$start_date ,$end_date ,$status ,$note ,$t_id)
        {
            $sqlEdt="UPDATE  train SET 
                             company_id   = '$company_id',
                             std_id   = '$std_id',
                             contact_id   = '$contact_id',
                             start_date     = '$start_date',
                             end_date   = '$end_date' ,
                             status  = '$status',
                             note  = '$note'
                            
                     WHERE t_id = '$t_id'";
            $ecx_train = $this->db->query($sqlEdt);
            if ($ecx_train)
            {
            return true;  
            }
            else
            {
            return false;
            }
        }

        public function del_p($t_id)
        {
            $sqlEdt = "DELETE FROM train WHERE t_id = '$t_id';";


            $ecx_train = $this->db->query($sqlEdt);
           
            if ($ecx_train ){
              
              return true;  
              
            }else{  return false; }
        }
    }
        

?>