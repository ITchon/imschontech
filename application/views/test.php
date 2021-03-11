<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header{
    padding-top: 40px;
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
    padding-top: 30px;
    line-height: 15px;
}
table{
    font-size:12pt
}
th{
    border-right:1px solid #000;padding:4px;text-align:center;
}
tr{
    border:1px solid #000;padding:4px;
}
td{
    border-right:1px solid #000;padding:4px;
}
</style>
<body style="font-family: Garuda" >
    <div class="container">
        <div class="header">
            <h4>วิทยาลัยเทคนิคชลบุรี</h4>
            <p>แบบประเมินผลการฝึกงาน</p>
        </div>
        <div class="content" >
            <p>
                   <?php  echo "ชื่อ ".$std_detail->title." ".$std_detail->fname." ".$std_detail->lname ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo "รหัสประจำตัวนักศึกษา ".$std_detail->std_code ?>
                    </p>       
                    <p>
                   <?php echo "ระดับชั้น ".$std_detail->class_name." ".$std_detail->class_group ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                   <?php  echo "แผนกวิชาช่าง ".$std_detail->dv_name ?>
                    </p>            
                    <p>  
                   <?php echo "ระยะเวลาฝึกงาน ".$std_detail->start_date." ถึง ".$std_detail->end_date ?>
                    </p>     
                    <p>
                    <?php echo "สถานที่ฝึกงาน ".$std_detail->company_name ?>
                    </p>       
                    <p>  
                    รวมระยะเวลาฝึกงาน
                    &nbsp;&nbsp;&nbsp;
                    <?php  echo $twd->total_work_day ?>
                    &nbsp;&nbsp;&nbsp;
                    ลาป่วย 70 วัน
                    &nbsp;&nbsp;&nbsp;
                    ลากิจ  10 วัน
                    &nbsp;&nbsp;&nbsp;
                    มาสาย 0 ครั้ง
            </p>
               <table id="bg-table" width="100%" style="border-collapse: collapse;font-size:10pt;margin-top:8px;">
                <tr>
                    <th  width="80px" colspan="2">รายการประเมินผล</th>
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
                                    <td width='25px'><?php echo $i ?></td>
                                    <td><?php echo $r->glist_name?></td>
                                    <td style="text-align:center"><?php 
                                    if($r->score == 4){
                                        $verygood +=4;
                                        echo "/" ;
                                    }?>
                                    </td>
                                    <td style="text-align:center">
                                    <?php if($r->score == 3){
                                        $good +=3;
                                        echo "/" ;
                                    } ?>
                                    </td>
                                    <td style="text-align:center">
                                    <?php if($r->score == 2){
                                        $fair +=2;
                                        echo "/" ;
                                    }
                                    ?>
                                    </td>
                                    <td style="text-align:center">
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
                            <td style="text-align:center" colspan="2">รวมคะแนน</td>
                            <td style="text-align:center"><?php echo $verygood ?></td>
                            <td style="text-align:center"><?php echo $good ?></td>
                            <td style="text-align:center"><?php echo $fair ?></td>
                            <td style="text-align:center"><?php echo $bad ?></td>
                            </tr>
                            <tr>
                            <td style="text-align:right" colspan="2">รวมคะแนนทั้งหมด</td>
                            <td style="text-align:center" colspan="4"> <?php echo $total ?></td>
                            </tr>
            </tbody>
    </table>  
        </div>
        <div class="footer">
        <b>ข้อเสนอแนะ/ติชม</b>
        <span><?php echo $result_spv->suggestion ?></span>
            <div class="end">
            <p>ผู้ประเมิน <?php echo $std_detail->name ?></p>
            <p>ตำแหน่ง CEO</p>
            <p>วันที่ <?php echo $date ?></p>
            </div>
        </div>
    </div>
</body> 
</html>