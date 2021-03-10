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
                   <?php  echo "ชื่อ ".$std_detail[0]->title." ".$std_detail[0]->fname." ".$std_detail[0]->lname ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo "รหัสประจำตัวนักศึกษา ".$std_detail[0]->std_code ?>
                    </p>       
                    <p>
                   <?php echo "ระดับชั้น ".$std_detail[0]->class_name." ".$std_detail[0]->class_group ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                   <?php  echo "แผนกวิชาช่าง ".$std_detail[0]->dv_name ?>
                    </p>            
                    <p>  
                   <?php echo "ระยะเวลาฝึกงาน ".$std_detail[0]->start_date." ถึง ".$std_detail[0]->end_date ?>
                    </p>     
                    <p>
                    <?php echo "สถานที่ฝึกงาน ".$std_detail[0]->company_name ?>
                    </p>       
                    <p>  
                    รวมระยะเวลาฝึกงาน
                    &nbsp;&nbsp;&nbsp;
                    <?php  echo $twd[0]->total_work_day ?>
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
                <tr>
                    <td width="30px">1</td>
                    <td>การแต่งกายเหมาะสมหฟกฟหกๅ</td>
                    <td style="text-align:center" >/</td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td>การแต่งกายเหมาะสมหฟกฟหกๅ</td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td>ปฎิบัติตามกฎระเบียบข้อบังคับที่กำหนดไว้อย่างเคร่งครัด</td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                    <td width="30px" >1</td>
                    <td></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" ></td>
                    <td style="text-align:center" >/</td>
                </tr>
                <tr>
                <td style="text-align:right" colspan="2">รวมคะแนน</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td style="text-align:right" colspan="2">รวมคะแนนทั้งหมด</td>
                <td colspan="4"></td>
                </tr>
            </tbody>
    </table>  
        </div>
        <div class="footer">
        <b>ข้อเสนอแนะ/ติชม</b>
        <span>ปฎิบัติตามกฎระเบียบข้อบังคับที่กำหนดไว้อย่างเคร่งครัด</span>
            <div class="end">
            <p>ผู้ประเมิน นาย ศุภโชค วาจาคำ</p>
            <p>ตำแหน่ง CEO</p>
            <p>วันที่ 30 ตุลาคม พ.ศ.2563</p>
            </div>
        </div>
    </div>
</body> 
</html>