<?php

class Fullcalendar_model extends CI_Model
{
 function fetch_all_event($std_id){
     $sql = "SELECT *
      FROM events 
     where std_id = '$std_id'";
     $query = $this->db->query($sql);
  return  $query;
 }

 function get_img($eventid){
     $sql = "SELECT * FROM event_img
     where id = '$eventid'";
     $query = $this->db->query($sql);
     $result =  $query->result();
     if ($query) { 
        return $result; 
       } 
 }

 function insert_event($title, $des, $color,$s_day,$s_time,$e_day,$e_time,$std_id)
 {
    $sql = "INSERT INTO events ( title, description, color, start_event, end_event ,std_id) VALUES ('$title','$des','$color','$s_day $s_time','$e_day $e_time','$std_id')";
      $exc = $this->db->query($sql);
      $last_id = $this->db->insert_id();
      if ($exc) { 
       return $last_id; 
      } 
 }

 function insert_img($id,$file)
 {
         $sql = "INSERT INTO event_img (id,img_code) VALUES ('$id','$file')";
         $exc = $this->db->query($sql);
         if ($exc) { 
       return true; 
      } 
 }

 function update_event($eventid,$title,$desc,$color,$s_day,$s_time,$e_day,$e_time)
 {
  $sql = "UPDATE events SET title='$title',description='$desc',color='$color',start_event='$s_day $s_time',end_event='$e_day $e_time' WHERE id ='$eventid'";
      $exc = $this->db->query($sql);
      if ($exc) { 
       return true; 
      } 
 }
 function update_drop($id,$start,$end)
 {
  $sql = "UPDATE events SET start_event='$start',end_event='$end' WHERE id ='$id'";
      $exc = $this->db->query($sql);
      if ($exc) { 
       return true; 
      } 
 }

 function delete_event($id)
 {
     $sql = "DELETE FROM events WHERE id='$id'";
     $exc = $this->db->query($sql);
 }
}

?>
