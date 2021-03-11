<?php

class Model_pdf extends CI_Model
{

public function total_work_day($std_id,$train_id){
    $sql = "SELECT * FROM train where t_id = '$train_id'";
    $query = $this->db->query($sql); 
    $result = $query->row();

    $start_date =  $result->start_date;
    $end_date = $result->end_date;

    $sql =  "SELECT DISTINCT COUNT(start_event) AS total_work_day FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' ORDER BY `events`.`start_event` DESC";
    $query = $this->db->query($sql); 
    $result = $query->row();

    if($query){
        return $result;
    }else{
        return false;
    }
}

public function get_train_detail($train_id){
   $sql = "SELECT * FROM student_train_detail where t_id = '$train_id'";
   $query = $this->db->query($sql); 
   $result = $query->row();
   if($query){
      return $result;
    }else{
      return false;
    }
}

public function get_events_date($start_date,$end_date,$std_id,$class_id) {
    $sql =  "SELECT e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id, e.t_id ,e.contact_confirm, e.contact_confirm FROM `events` as e
    inner join student as std on std.std_id = e.std_id
    WHERE start_event >= '$start_date' AND end_event <= '$end_date' and e.std_id = '$std_id' AND class_id = '$class_id' AND e.contact_confirm = 0";
  $query = $this->db->query($sql);
  $result =  $query->result();
  if($query) {
      return $result;  
      }
    else{       
    return false;
      }
  }

public function contact_confirm($id) {
  // $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
  // left join class as c on c.class_id = std.class_id
  // WHERE std.std_code='$student_search' AND c.class_id = '$class_id'";
  $sql ="UPDATE events SET contact_confirm = '1' WHERE id = '$id'";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }
  else{       
  return false;
    }
}

public function contact_noconfirm($id) {
  // $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
  // left join class as c on c.class_id = std.class_id
  // WHERE std.std_code='$student_search' AND c.class_id = '$class_id'";
  $sql ="UPDATE events SET contact_confirm = '2' WHERE id = '$id'";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }
  else{       
  return false;
    }
}

}
?>