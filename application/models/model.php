<?php

class Model extends CI_Model
{

public function chk_session() {  
       if($this->session->userdata('std_id')=="") {
         echo "<script>alert('Please Login')</script>";
         redirect('login','refresh');
         return FALSE;

       }else{    return TRUE;    }
}
public function chk_user($user,$pass) {  
        // $pass = base64_encode(trim($pass));
        $sql ="SELECT * FROM user WHERE username='$user' and password='$pass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}
public function GetUserData($group,$condition) {  
        $sql ="SELECT * FROM $group WHERE $condition";
        $query = $this->db->query($sql);
        if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}
public function save_new_pass($pass,$id) {  
        $sql ="update user set password = '$pass', status_login = 1 where id = '$id'";
        $query = $this->db->query($sql);
        if($query) {
          return true;  
          }
        else{       
          return false;
          }
}

public function block_for_teacher() {  
        if($this->session->userdata('std_id') || $this->session->userdata('contact_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function block_for_contact() {  
        if($this->session->userdata('std_id') || $this->session->userdata('teacher_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function selectuser($id)
{
    $sql="SELECT * FROM user WHERE id = '$id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result(); 
 
    return $data;

}
public function selectusercont($id)
{
    $sql="SELECT * FROM user WHERE user_id = '$id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result(); 
 
    return $data;

}
public function insert_user($user_id,$usergroup ,$username ,$password ,$status_login)
{ 
      $sql ="SELECT username From user where username = '$username'";
      $query = $this->db->query($sql);  
      $data  = $query->result(); 
        if($data == null){
          $sql ="INSERT INTO user(user_id,usergroup,username,password,status_login)
          VALUES ($user_id,'$usergroup','$username','$password','$status_login');";          
          $query = $this->db->query($sql);  
          if($query)
          {
           return 1;
          }
          else{
           return 3;
          } 
        }else{
          return 2;
        }

}

public function update_user($user_id ,$username ,$password ,$id)
        {
            $sqlEdt="UPDATE user SET 
                             user_id    = '$user_id',
                             username   = '$username',
                             password   = '$password' 
                     WHERE id = '$id';";
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

public function delete_user($id)
{
 
      $sql ="DELETE FROM user WHERE user_id = '$id' ;";          
        $query = $this->db->query($sql); 
    
  
        if($query)
        {
        return true;
        }
        else{
        return false;
        } 
}

public function CheckSession()        
{
  if($this->session->userdata('std_id')){
    if($this->session->userdata('std_id')=="") {
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
  }
}

   else if($this->session->userdata('teacher_id')){
    if($this->session->userdata('teacher_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }
    
   else if($this->session->userdata('admin_id')){
    if($this->session->userdata('admin_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('contact_id')){
    if($this->session->userdata('contact_id')==""){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
    }
   }

   else if($this->session->userdata('fname') == ''){
      echo "<script>alert('Please Login')</script>";
      redirect('login','refresh');
   return FALSE;
   }
    else{    return TRUE;    }
}

// public function CheckSession()        
// {
//   if($this->session->userdata('fname')=="") {
//     echo "<script>alert('Please Login')</script>";
//     redirect('login','refresh');
//  return FALSE;
 
//   }else{    return TRUE;    }
  
// }


}

?>