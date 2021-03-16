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
    line-height: 10px;
    font-size : 16px;
}
.content{
    line-height: 10px;
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
                    นาย/นางสาว..........................................................................รหัสประจำตัวนักศึกษา...............................
                    </p>       
                    <p>
                    ระดับชั้น......................กลุ่ม.............................แผนกวิชาช่าง.................................................................
                    </p>            
                    <p>  
                    ระยะเวลาฝึกงาน...................................................................................................................................
                    </p>     
                    <p>
                    สถานที่ฝึกงาน.......................................................................................................................................
                    </p>       
                    <p>  
                    รวมระยะเวลาฝึกงาน..............วัน  ลาป่วย.............วัน ลากิจ............วัน มาสาย............ครั้ง ขาด............วัน

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

                                $i = 1;
                              foreach($result as $r){ 
                                  ?> 
                                <tr>
                                    <td width='25px'><?php echo $i ?></td>
                                    <td><?php echo $r->glist_name?></td>
                                    <td style="text-align:center"></td>
                                    <td style="text-align:center"></td>
                                    <td style="text-align:center"></td>
                                    <td style="text-align:center"></td>
                                </tr>

                                  <?php
                                $i++;
                              }

                                ?>
                                <tr>
                            <td style="text-align:right" colspan="2">รวมคะแนน</td>
                            <td style="text-align:center"></td>
                            <td style="text-align:center"></td>
                            <td style="text-align:center"></td>
                            <td style="text-align:center"></td>
                            </tr>
                            <tr>
                            <td style="text-align:right" colspan="2">รวมคะแนนทั้งหมด</td>
                            <td style="text-align:center" colspan="4"> </td>
                            </tr>
            </tbody>
    </table>  
        </div>
        <div class="footer">
        ข้อเสนอแนะ/ติชม.....................................................................................................................................
        <span></span>
            <div class="end">
            <p>ลงชื่อ.................................................ผู้ประเมิน </p>
            <p>(...............................................) </p>
            <p>ตำแหน่ง............................................</p>
            <p>วันที่...........เดือน.....................พ.ศ................</p>
            </div>
        </div>
    </div>
</body> 
</html>