<style>

    .student_detail{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .panel-heading-bigger{
        
        font-size: 30px;
        border-bottom: 1px solid #dddddd;
        border-top-right-radius: 1px;
        border-top-left-radius: 1px;
        height: 90px;
        line-height: 3em;
    }
    .fa-check{
        color: green;
    }
    .fa-ban{
        color: red;
    }
</style>
<div id='wrap' >

    <div class="row">
		<div class="col-md-12">
			<div class="panel panel-default" >
			<div class="panel-body" style="min-height: 752px;">
                <div class="panel panel-midnightblue">
                    <div class="panel-heading">
                    <?php if(isset($student_list)){
                          echo "ประเมินผลการนิเทศของนักศึกษา";
                     }else{
                     echo "No Data";
                 } ?>
                     </div>
                    <div class="panel-body">
                    <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table  datatables" id="example">
                          <thead >
                            <tr>
                            <th><input type="checkbox" id="select-all"></th>
                              <th>ชื่อ</th>
                              <th>โทรศัพท์</th>
                              <th>อีเมล</th>
                              <th>ระดับชั้น</th>
                              <th>บริษัท</th>
                              <th class="text-center">-</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($student_list != null){ foreach($student_list as $std){ ?>
                                <tr>
                                <?php $name = $std->title.$std->fname." ".$std->lname;?>
                              <td><input type="checkbox" id="select-all"></td>
                              <td><?php echo $name ?></td>
                              <td><?php echo $std->tel ?></td>
                              <td><?php echo $std->email ?></td>
                              <td><?php echo $std->class_name." ".$std->class_group?></td>
                              <td><?php echo $std->company_name?></td>
                              <?php echo "<td class='text-center'>
                              <a href='".base_url()."Teacher/supervision/".$std->std_id."'><button class='btn btn-brown'>ดูเอกสาร</button></a>
                            
                              </td>";  ?>
                            </tr>
                              <?php }}else{
                                  echo "No Data";
                              }  ?>
                           
                          </tbody>
                        </table>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>


