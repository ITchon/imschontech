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
    line-height: 25px;
}
.footer{
    padding-top: 30px;
    line-height: 15px;
}
.end{
    padding-top: 30px;
    line-height: 15px;
}

th{
    border-right:1px solid #000;padding:4px;text-align:center;
}
tr{
    border:1px solid #000;padding:4px;
}
.content td{
    padding:4px;
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
    
                    <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;ระดับชั้น ".$std_detail->class_name." ".$std_detail->class_group ?>

                   <?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;แผนกวิชาช่าง ".$std_detail->dv_name ?>
                    </td>   
                </tr>       
                <tr>
                   <td>
                    <?php echo "ชื่อสถานประกอบการ ".$std_detail->company_name ?>
                    </td> 
                    </tr>    
                    <tr>     
                    <td>  
                    <?php echo "ชื่อผู้ควบคุมการฝึก ".$std_detail->name ?>
                    </td> 
                    </tr>           
                    <tr> 
                    <td>  
                    <?php echo "วัน / เดือน / ปี ที่นิเทศ ".$date ?>
                   </td>
            </tr>      

            </table>
               <table id="bg-table" width="100%" style="border-collapse: collapse;font-size:10pt;margin-top:8px;">
                <tr>
                    <th width="80px" colspan="2">รายการประเมินผล</th>
                    <!-- <th width="80px">ดีมาก<br>(4)</th> -->
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
                                    <!-- <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php 
                                    if($r->score == 4){
                                        $verygood +=4;
                                        echo "/" ;
                                    }?>
                                    </td> -->
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
                            <!-- <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $verygood ?></td> -->
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $good ?></td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $fair ?></td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;"><?php echo $bad ?></td>
                            </tr>
                            <tr>
                            <td style="text-align:right;border-right:1px solid #000;" colspan="2">รวมคะแนนทั้งหมด</td>
                            <td style="text-align:center;border-right:1px solid #000;padding:4px;" colspan="3"> <?php echo $total ?></td>
                            </tr>
            </tbody>
    </table>  
        </div>
        <div class="footer">
        <p><b>สรุปผลการนิเทศ</b></p>
        <span><?php echo $result_spv->summarize ?></span>
            <div class="end">
            <table>
               <tr>
                    <td  style="text-align: center;padding:4px;">
                    <p>ลงชื่อ......................................</p><br>
                    <p>&nbsp;&nbsp;&nbsp;(......................................)</p><br>
                    <p>หัวหน้างานอาชีวศึกษาระบบทวิภาคี</p>
                    </td>
                    <td ></td>
                    <td style="text-align: center; padding:4px;">
                    <p>ลงชื่อ&nbsp;&nbsp;&nbsp;<?php echo $std_detail->spv_title."".$std_detail->spv_fname."&nbsp;&nbsp;&nbsp;&nbsp;".$std_detail->spv_lname ?></p><br>
                    <p>ครูนิเทศแผนกวิชา<?php echo $std_detail->dv_name ?></p>
                    </td>
               </tr>
               <tr>
               <td ></td>  
               <td style="text-align: center; padding:4px;">
               <br> <p>ลงชื่อ......................................</p><br>
                    <p>&nbsp;&nbsp;&nbsp;(......................................)</p><br>
                    <p>รองผู้อำนวยการฝ่ายวิชาการ</p>
                    </td>
               </tr>
            </table>
            </div>
        </div>
    </div>
</body> 
</html>