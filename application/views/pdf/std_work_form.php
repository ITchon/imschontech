<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header{
    text-align: center;
    line-height: 20px;
    font-size : 16px;
}
.content{

    line-height: 15px;
}
.footer{
    padding-top: 30px;
    line-height: 15px;
}
.end{
    text-align: center;
    padding-top: 10px;
    line-height: 15px;
}

th{
    border-right:1px solid #000;padding:4px;text-align:center;
}
tr{
    border:1px solid #000;padding:4px;
}
</style>
<body style="font-family: Garuda" >
    <div class="container">
        <div class="header">
            <h3>ตารางลงเวลาการฝึกปฏิบัติงานของนักเรียน</h3><br>
        </div>
        <div class="content" >
        <table>
                <tr>
                   <td>
                   <?php  echo "ชื่อ ".$std_detail->title." ".$std_detail->fname." ".$std_detail->lname ?>
                   </td>  
                    <td>
                    <?php echo "รหัสประจำตัวนักศึกษา ".$std_detail->std_code ?>
                    </td>  
                </tr>       
                <tr>
                    <td><?php echo "ระดับชั้น ".$std_detail->class_name." ".$std_detail->class_group ?> </td>  
                    <td>
                   <?php  echo "แผนกวิชาช่าง ".$std_detail->dv_name ?>
                    </td>   
                    </tr>    
                    <tr>     
                    <td>  
                    <?php echo "ระยะเวลาฝึกงาน ".$start_date." ถึง ".$end_date ?>
                    </td> 
                    </tr>      
                    <tr> 
                    <td>
                    <?php echo "สถานที่ฝึกงาน ".$std_detail->company_name ?>
                    </td> 
                    </tr>      
                    <tr> 

                    <td>  
                    รวมระยะเวลาฝึกงาน
                    <?php  echo $twd->total_work_day." วัน" ?>
                   
                    ลาป่วย
                    <?php  echo $tsd->total_sick_day." วัน" ?>
                   
                    ลากิจ
                    <?php  echo $tpld->total_personal_leave_day." วัน" ?>
                    </td>  
                    <td>
                    มาสาย
                    <?php  echo $tld->total_late_day." วัน" ?>
                   
                    ขาด
                    <?php  echo $tad->total_absent_day." วัน" ?>
            </td>
            </tr>      

            </table>
               <table id="bg-table" width="100%" style="border-collapse: collapse;font-size:10pt;margin-top:8px;">
                <tr>
                    <th colspan="2">วันที่</th>    
                    <th>เวลามา</th>
                    <th>เวลากลับ</th>
                    <th  style="line-height:20px">สถานะ</th>
                </tr>       
           <tbody>
                <?php           

                                $i = 0;
                              foreach($result_swt as $r){ 
                                  ?> 
                                <tr>
                                    <td style="border-right:1px solid #000;padding:4px;text-align:center" width='25px'><?php echo $i+1 ?></td>
                                    <td style="border-right:1px solid #000;padding:4px;text-align:center"><?php echo $result_date[$i] ?></td>
                                    <td style="border-right:1px solid #000;padding:4px;text-align:center"><?php echo $r->arrive_time ?></td>
                                    <td style="border-right:1px solid #000;padding:4px;text-align:center"><?php echo $r->depart_time ?></td>
                                    <td style="border-right:1px solid #000;padding:4px;text-align:center"><?php echo $r->note ?></td>
                                </tr>

                                  <?php
                                $i++;
                              }

                                ?>
   

            </tbody>
    </table>  
        </div>
      
    </div>
</body> 
</html>