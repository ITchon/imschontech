<?php

class Model_ajax extends CI_Model
{


    function fetch_user($usergroup)
    {
                    
            switch ($usergroup) {
                case "student":
                   $sql ="SELECT * FROM student s 
                   inner join class c on c.class_id = s.class_id
                   inner join division d on d.dv_id = c.dv_id";
                   $query = $this->db->query($sql); 
                   $output = '';
                   foreach($query->result() as $row)
                   
                   {       
                       $output .= '<option  value="'.$row->std_id.'">'.$row->std_code." | ".$row->title." ".$row->fname." ".$row->lname." | ".$row->class_name." ".$row->class_group.'</option>.';
                   
                   }
           
                return $output;
                break;
                case "teacher":
                    $sql ="SELECT teacher_id ,th_code,title,fname,lname from teacher ";
                    $query = $this->db->query($sql); 
                    $output = '';
                    foreach($query->result() as $row)
                    {       
                        $output .= '<option  value="'.$row->teacher_id.'">'.$row->th_code." | ".$row->title." ".$row->fname." ".$row->lname.'</option>.';
                    }
            
                 return $output;
                break;
                case "contact":
                    $sql ="SELECT contact_id as id ,name as fname  from contact ";
                    $query = $this->db->query($sql); 
                    $output = '';
                    foreach($query->result() as $row)
                    
                    {       
                        $output .= '<option  value="'.$row->id.'">'.$row->fname.'</option>.';
                    
                    }
            
                 return $output;
                break;
                case "admin":
                    echo "admin what?";
                    exit;
                break;
                default:
                echo "What?";
                exit;
            }

        }
    }

    ?>