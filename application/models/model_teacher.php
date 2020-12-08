<?php

class Model_teacher extends CI_Model
{

public function get_student_by($class_id) {
        $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
        left join class as c on c.class_id = std.class_id
        WHERE c.class_id='$class_id'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result =  $query->result();
          return $result;  
          }
        else{       
        return false;
          }
}

public function get_student_detail_byid($std_id,$class_id) {
        $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
        left join class as c on c.class_id = std.class_id
        WHERE std.std_id='$std_id' AND c.class_id = '$class_id'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result =  $query->result();
          return $result;  
          }
        else{       
        return false;
          }
}

public function get_student_detail_by($student_search,$class_id) {
    $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
    left join class as c on c.class_id = std.class_id
    WHERE std.username='$student_search' AND c.class_id = '$class_id'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result =  $query->result();
      return $result;  
      }
    else{       
    return false;
      }
}

}

?>