<?php

class Model extends CI_Model
{

public function chk_student($user,$pass) {  
        // $pass = base64_encode(trim($pass));
        $sql ="SELECT * FROM student WHERE username='$user' and password='$pass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}

public function chk_teacher($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM teacher WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function chk_admin($user,$pass) {  
    // $pass = base64_encode(trim($pass));
    $sql ="SELECT * FROM admin WHERE username='$user' and password='$pass'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result = $query->result_array();
      return $result[0];  
      }
    else{       
    return false;
      }
}

public function CheckSession()        
{

    if($this->session->userdata('std_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
   
    }else if($this->session->userdata('teacher_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
    else if($this->session->userdata('admin_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
    else{    return TRUE;    }
}


}

?>