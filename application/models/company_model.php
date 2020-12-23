<?php 
    class company_model extends CI_Model {


        public function company() {  
            $sql="SELECT  * FROM company ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
        }
        // ,$class_id ,$th_id
        public function insert_cp($company_name,$address,$province,$zipcode,$tel,$latlng)
        {
           
            $sql ="INSERT INTO  company (
                        company_name,
                        address,
                        province,
                        zipcode,
                        tel,
                        latlong

                        )
                VALUES ('$company_name','$address','$province','$zipcode','$tel','$latlng');";          
                $query = $this->db->query($sql);  
                if($query)
                {
                return true;
                }
                else{
                return false;
                } 
        }

        public function selectOnecompany($id)
        {
            $sql="SELECT * FROM company WHERE company_id = '$id' ";
            $query = $this->db->query($sql); 
            $data  = $query->result(); 
         
            return $data;
        
        }

        public function edit_cp($company_name,$address,$province,$zipcode,$tel,$company_id,$latlng)
        {
            $sqlEdt="UPDATE  company SET 
                             company_name    = '$company_name',
                             address         = '$address',
                             province        = '$province',
                             zipcode         = '$zipcode',
                             tel             = '$tel',
                             latlong         = '$latlng'
                            
                     WHERE company_id = '$company_id'";
            $exc_cp = $this->db->query($sqlEdt);
            if ($exc_cp)
            {
            return true;  
            }
            else
            {
            return false;
            }
        }

        public function del_cp_p($company_id)
        {
            $sqlEdt = "DELETE FROM company WHERE company_id = '$company_id';";


            $exc_cp = $this->db->query($sqlEdt);
           
            if ($exc_cp ){
              
              return true;  
              
            }else{  return false; }
        }
  
    }
        

?>