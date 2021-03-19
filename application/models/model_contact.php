<?php

class Model_contact extends CI_Model
{

public function get_contact_profile($contact_id){
    $sql="SELECT * FROM contact WHERE contact_id = '$contact_id'";
    $query = $this->db->query($sql);
    $result = $query->result()[0];
    if($query){
        return $result;
    }else{
        return false;
    }
}

public function get_mytrainer($contact_id){
    $sql="SELECT DISTINCT(t.std_id) as std_id , std.title, std.fname, std.lname, std.tel, std.email,std.status,std.std_code,std.class_id, std.gender,d.dv_name FROM student as std
    INNER JOIN train as t on t.std_id = std.std_id
    INNER JOIN class as c on c.class_id = std.class_id
    INNER JOIN division as d on d.dv_id = c.dv_id
    WHERE t.contact_id = '$contact_id'";
    $query = $this->db->query($sql);
    $result = $query->result();
    if($query){
        return $result;
    }else{
        return false;
    }
}

public function get_events_date($start_date,$end_date,$std_id,$class_id) {
    $sql =  "SELECT e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id ,e.contact_confirm, e.contact_confirm FROM `events` as e
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

public function get_std_data($contact_id,$text) {
  $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date,student.std_id,student.title,fname,lname,student.std_code,company_name,
  class.class_name,class.class_group,division.dv_name
  FROM events 
  inner join train on train.std_id = events.std_id
  inner join student on student.std_id = events.std_id 
  inner join company on company.company_id = train.company_id
  inner join class on class.class_id = student.class_id
  inner join division on division.dv_id = class.dv_id
  WHERE train.contact_id = '$contact_id' and contact_confirm = 0 $text ORDER BY events.start_event DESC";
  
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_std_data1($contact_id) {
  $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date,student.std_id,student.title,fname,lname,student.std_code,company_name,
  class.class_name,class.class_group,division.dv_name
  FROM events 
  inner join train on train.std_id = events.std_id
  inner join student on student.std_id = events.std_id 
  inner join company on company.company_id = train.company_id
  inner join class on class.class_id = student.class_id
  inner join division on division.dv_id = class.dv_id
  WHERE train.contact_id = '$contact_id' and contact_confirm = 0 ORDER BY events.start_event DESC";
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_events_date2($contact_id) {
  $sql =  "SELECT e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id ,e.teacher_confirm, e.contact_confirm FROM `events` as e
  inner join train as t on t.std_id = e.std_id
  WHERE t.contact_id = '$contact_id' AND e.contact_confirm = 0";

$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

}
?>