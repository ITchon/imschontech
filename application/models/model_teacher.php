<?php

class Model_teacher extends CI_Model
{

public function get_teacher_profile($teacher_id) {
        $sql ="SELECT tea.teacher_id, tea.title, tea.fname, tea.lname, tea.tel, tea.email, tea.th_birth_date, c.class_name ,dv.dv_name
        FROM teacher as tea
                left join class as c on c.teacher_id = tea.teacher_id
                left join division as dv on dv.dv_id = c.dv_id
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

public function get_std($std_id) {
  $sql ="SELECT * FROM student as std
  WHERE std.std_id = '$std_id'";
$query = $this->db->query($sql);
$result =  $query->result()[0];
if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_eid($std_id,$date) {
  $sql ="SELECT id FROM events WHERE std_id = '$std_id' AND start_event RLIKE('$date')";
$query = $this->db->query($sql);
$result =  $query->result();
if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_events_date($start_date,$end_date,$std_id,$class_id) {
  $sql =  "SELECT e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id ,e.teacher_confirm, e.contact_confirm FROM `events` as e
  inner join student as std on std.std_id = e.std_id
  WHERE start_event >= '$start_date' AND end_event <= '$end_date' and e.std_id = '$std_id' AND class_id = '$class_id' AND e.teacher_confirm = 0";
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}


public function get_events_date2($teacher_id) {
  $sql =  "SELECT e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id ,e.teacher_confirm, e.contact_confirm FROM `events` as e
  inner join train as t on t.std_id = e.std_id
  WHERE t.teacher_id = '$teacher_id' AND e.teacher_confirm = 0";
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_std_data($teacher_id,$text) {
  $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date,student.std_id,student.title,fname,lname,student.std_code,company_name,
  class.class_name,class.class_group,division.dv_name
  FROM events 
  inner join train on train.std_id = events.std_id
  inner join student on student.std_id = events.std_id 
  inner join company on company.company_id = train.company_id
  inner join class on class.class_id = student.class_id
  inner join division on division.dv_id = class.dv_id
  WHERE train.teacher_id = '$teacher_id' and teacher_confirm = 0 $text ORDER BY events.start_event DESC";
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_std_data1($teacher_id) {
  $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date,student.std_id,student.title,fname,lname,student.std_code,company_name,
  class.class_name,class.class_group,division.dv_name
  FROM events 
  inner join train on train.std_id = events.std_id
  inner join student on student.std_id = events.std_id 
  inner join company on company.company_id = train.company_id
  inner join class on class.class_id = student.class_id
  inner join division on division.dv_id = class.dv_id
  WHERE train.teacher_id = '$teacher_id' and teacher_confirm = 0 ORDER BY events.start_event DESC";
$query = $this->db->query($sql);
$result =  $query->result();

if($query) {
    return $result;  
    }
  else{       
  return false;
    }
}

// public function get_events_date($start_date,$end_date,$std_id,$class_id) {
//   $sql = "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date ,e.id, e.title, e.description, e.color, e.start_event, e.end_event, e.std_id, e.t_id ,e.teacher_confirm, e.contact_confirm
//   FROM `events` as e
//   inner join student as std on std.std_id = e.std_id
//   WHERE start_event BETWEEN '$start_date' AND  '$end_date' 
//   AND e.std_id = '$std_id' AND std.class_id = '$class_id' AND e.teacher_confirm = 0 ORDER BY `e`.`start_event` DESC";
// $query = $this->db->query($sql);
// $result =  $query->result();
// if($query) {
//     return $result;  
//     }
//   else{       
//   return false;
//     }
// }

public function get_stdid_bycode($student_search){
  $sql ="SELECT * FROM student
  WHERE std_code = '$student_search'";
$query = $this->db->query($sql);
$result =  $query->result();
if($query) {
    return $result;  
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


public function get_dv_class($teacher_id) {
  $sql ="SELECT DISTINCT dv_id, `dv_name`from student_train_detail
  WHERE spv_id = '$teacher_id'";
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
  $sql ="SELECT DISTINCT dv_id,dv_name,class_id,class_name,class_group from student_train_detail
  WHERE spv_id = '$teacher_id'";
$query = $this->db->query($sql);
if($query->num_rows()!=0) {
  $result =  $query->result();
    return $result;  
    }
  else{       
  return false;
    }
}
public function get_dv_class_group($teacher_id) {
  $sql ="SELECT  DISTINCT dv_id, class_id,`class_name`,class_group from student_train_detail
  WHERE spv_id = '$teacher_id'";
$query = $this->db->query($sql);
if($query->num_rows()!=0) {
  $result =  $query->result();
    return $result;  
    }
  else{       
  return false;
    }
}


public function get_student_by($class_id,$teacher_id) {
        $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, std.class_name,std.class_group FROM student_train_detail as std
        left join class as c on c.class_id = std.class_id
        WHERE c.class_id='$class_id' and std.spv_id = '$teacher_id'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result =  $query->result();
          return $result;  
          }
        else{       
        return false;
          }
}

public function show_class($class_id) {
  $sql ="SELECT c.class_Id, c.class_name, c.class_group FROM class as c
  WHERE c.class_id='$class_id'";
$query = $this->db->query($sql);
if($query->num_rows()!=0) {
  $result =  $query->result()[0];
    return $result;  
    }
  else{       
  return false;
    }
}

public function get_student_detail_byid($std_id,$class_id) {
        $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id,e.id,e.title,e.description,e.color,e.start_event,e.end_event
        ,e.teacher_confirm,e.contact_confirm FROM events as e
        left join student as std on std.std_id = e.std_id
        left join class as c on c.class_id = std.class_id
        WHERE std.std_id='$std_id' AND c.class_id = '$class_id' AND e.teacher_confirm = 0";
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
    // $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
    // left join class as c on c.class_id = std.class_id
    // WHERE std.std_code='$student_search' AND c.class_id = '$class_id'";
    $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id,e.id,e.title,e.description,e.color,e.start_event,e.end_event
    ,e.teacher_confirm,e.contact_confirm FROM events as e
    left join student as std on std.std_id = e.std_id
    left join class as c on c.class_id = std.class_id
    where std.std_code = '$student_search' AND e.teacher_confirm = 0";

  $query = $this->db->query($sql);
  if($query->num_rows()!=0) {
    $result =  $query->result();
      return $result;  
      }
    else{       
    return false;
      }
}

public function teacher_confirm($id) {
  // $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
  // left join class as c on c.class_id = std.class_id
  // WHERE std.std_code='$student_search' AND c.class_id = '$class_id'";
  $sql ="UPDATE events SET teacher_confirm = '1' WHERE id = '$id'";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }
  else{       
  return false;
    }
}

public function teacher_noconfirm($id) {
  // $sql ="SELECT std.std_id, std.title, std.fname, std.lname, std.gender, std.tel, std.email, std.class_id, c.class_name FROM student as std
  // left join class as c on c.class_id = std.class_id
  // WHERE std.std_code='$student_search' AND c.class_id = '$class_id'";
  $sql ="UPDATE events SET teacher_confirm = '2' WHERE id = '$id'";
$query = $this->db->query($sql);
if($query) {
    return true;  
    }
  else{       
  return false;
    }
}
public function get_student($teacher_id,$train_id) {  
  if($train_id == null){
  $sql =  "SELECT * FROM student s 
  inner join class c on c.class_id = s.class_id
  inner join division d on d.dv_id = c.dv_id
  inner join train t on t.std_id = s.std_id
  inner join company cy on cy.company_id = t.company_id
  inner join contact ct on ct.contact_id = t.contact_id
   where t.teacher_id = '$teacher_id' and t.start_date = (SELECT max(start_date) FROM `train` where teacher_id = $teacher_id ) ";
  }else{
  $sql =  "SELECT * FROM student s 
  inner join class c on c.class_id = s.class_id
  inner join division d on d.dv_id = c.dv_id
  inner join train t on t.std_id = s.std_id
  inner join company cy on cy.company_id = t.company_id
  inner join contact ct on ct.contact_id = t.contact_id
   where t.teacher_id = '$teacher_id' and t.t_id = $train_id ";
  }
  $query = $this->db->query($sql); 
  $data = $query->result();
  return $data;
}
public function get_train() {  
            
  $sql =  "SELECT * FROM train ORDER BY `train`.`end_date` DESC";
  $query = $this->db->query($sql); 
  $data = $query->result();

  return $data;
}


}

?>