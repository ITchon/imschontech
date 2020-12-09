<?php

class Model_teacher extends CI_Model
{

public function get_teacher_profile($teacher_id) {
        $sql ="SELECT tea.teacher_id, tea.title, tea.fname, tea.lname, tea.tel, tea.email, tea.class_id, c.class_name FROM teacher as tea
        left join class as c on c.class_id = tea.class_id
        WHERE tea.teacher_id='$teacher_id'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result =  $query->result();
          return $result[0];  
          }
        else{       
        return false;
          }
}

public function get_division($teacher_id) {
    $sql ="SELECT DISTINCT dv.dv_id,dv.dv_name FROM class as c
    left join division as dv on dv.dv_id = c.dv_id
    WHERE c.teacher_id = '$teacher_id'";
  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result =  $query->result();
      return $result;  
      }
    else{       
    return false;
      }
}


public function get_division_class($teacher_id) {
  $sql ="SELECT DISTINCT dv.dv_id,dv.dv_name,c.class_id,c.class_name,c.class_group FROM class as c
  left join division as dv on dv.dv_id = c.dv_id
  WHERE c.teacher_id = '$teacher_id'";
$query = $this->db->query($sql);
if($query->num_rows()!=0) {
  $result =  $query->result();
    return $result;  
    }
  else{       
  return false;
    }
}


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