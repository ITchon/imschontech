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
            <h4>วิทยาลัยเทคนิคชลบุรี</h4>
            <p><?php echo $result_spv->subject_name ?></p>
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
                    <th colspan="2" >รายการประเมินผล</th>
                    <th width="80px">มากที่สุุด</th>
                    <th width="80px">มาก</th>
                    <th width="80px">ปานกลาง</th>
                    <th width="80px">น้อย</th>
                    <th width="80px">น้อยที่สุด</th>
                </tr>       
           <tbody>
                <?php           
                                    $i = 1;
                                    $j = 1;
                                foreach($result as $r){ ?> 
                                    <tr>
                                    <td colspan="7" width='25px'><b><?php echo $r->glist_name ?></b></td>
                                    <?php 
                                    foreach($result_list as $rl){
                                          if($r->glist_id==$rl->glist_id){ ?>
                                          <tr>
                                            <td colspan="2" style="border-right:1px solid #000;padding:4px;text-align:left"><?php echo  $j.". ".$rl->list_name ?></td>
                                            <td  style="border-right:1px solid #000;padding:4px;text-align:center" ><?php if($rl->score == 5)echo "/" ;else ?></td>
                                            <td  style="border-right:1px solid #000;padding:4px;text-align:center" ><?php if($rl->score == 4)echo "/" ;else ?></td>
                                            <td  style="border-right:1px solid #000;padding:4px;text-align:center" ><?php if($rl->score == 3)echo "/" ;else ?></td>
                                            <td  style="border-right:1px solid #000;padding:4px;text-align:center" ><?php if($rl->score == 2)echo "/" ;else ?></td>
                                            <td  style="border-right:1px solid #000;padding:4px;text-align:center" ><?php if($rl->score == 1)echo "/" ;else ?></td>
                                            <?php 
                                            $i++;
                                            $j++;
                                          } ?>
                                        </tr>
                                  <?php 
                                   } ?> 
                                    </tr>

                                      <?php
                                  }
                                    ?>
                               
            </tbody>
    </table>  
        </div>
        <div class="footer">
        <span>ข้อเสนอแนะ/ติชม</span>
        <span><?php echo $result_spv->suggestion ?></span>
            <div class="end">
            <p>ผู้ประเมิน <?php echo $std_detail->name ?></p>
            <p>ตำแหน่ง <?php echo $result_spv->position ?></p>
            <p>วันที่ <?php echo $date ?></p>
            </div>
        </div>
    </div>
</body> 
</html>