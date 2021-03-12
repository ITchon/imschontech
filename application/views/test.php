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
            <p>แบบประเมินผลการฝึกงาน</p>
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
                   <?php echo "ระยะเวลาฝึกงาน ".$std_detail->start_date." ถึง ".$std_detail->end_date ?>
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
                    <th width="80px" colspan="2">รายการประเมินผล</th>
                    <th width="80px">ดีมาก<br>(4)</th>
                    <th width="80px">ดี<br>(3)</th>
                    <th width="80px">พอใช้<br>(2)</th>
                    <th width="90px" style="line-height:20px">ต้องปรับปรุง<br>(1)</th>
                </tr>       
           <tbody>
                <?php           
                                $verygood=null;
                                $good=null;
                                $fair=null;
                                $bad=null;
                                $i = 1;
                              foreach($result as $r){ 
                                  ?> 
                                <tr>
                                    <td width='25px'  style="border-right:1px solid #000;padding:4px;"><?php echo $i ?></td>
                                    <td  style="border-right:1px solid #000;padding:4px;"><?php echo $r->glist_name?></td>
                                    <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php 
                                    if($r->score == 4){
                                        $verygood +=4;
                                        echo "/" ;
                                    }?>
                                    </td>
                                    <td style="text-align:center;border-right:1px solid #000;padding:4px;">
                                    <?php if($r->score == 3){
                                        $good +=3;
                                        echo "/" ;
                                    } ?>
                                    </td>
                                    <td style="text-align:center;border-right:1px solid #000;padding:4px;">
                                    <?php if($r->score == 2){
                                        $fair +=2;
                                        echo "/" ;
                                    }
                                    ?>
                                    </td>
                                    <td style="text-align:center;border-right:1px solid #000;padding:4px;">
                                    <?php if($r->score == 1){
                                        $bad +=1;
                                        echo "/" ;
                                    }
                                    ?>
                                    </td>
                                </tr>

                                  <?php
                                $i++;
                              }
                              $total = $verygood+$good+$fair+$bad;
                                ?>
                                <tr>
                            <td style="text-align:right;border-right:1px solid #000;padding:4px;" colspan="2">รวมคะแนน</td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $verygood ?></td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $good ?></td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $fair ?></td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $bad ?></td>
                            </tr>
                            <tr>
                            <td style="text-align:right" colspan="2">รวมคะแนนทั้งหมด</td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;" colspan="4"> <?php echo $total ?></td>
                            </tr>
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