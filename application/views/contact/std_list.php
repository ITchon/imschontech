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


        table.dataTable th,
        table.dataTable td {
            white-space: nowrap;
        }
</style>
<?php  $subject_id =  $this->uri->segment('3'); ?>
<div id='wrap' >
<div class="container" style="min-height: 752px;background-color:#ffffff">
    <div class="row"> 
    <div id="page-heading">
        <h2><?php echo $result_subject->subject_name ?></h2>

             <div class="col-md-6">
					        <a class="info-tiles tiles-green" >
					            <div class="tiles-heading">
					                <div class="pull-left"><span style=" font-size: 18px;">มีนักเรียนที่กำลังฝึกงานอยู่ทั้งหมด</span></div>
					            </div>
					            <div class="tiles-body text-center">
                                   <?php echo $total ?>
					            </div>
					        </a>
					    </div>
              <div class="col-md-6">
					        <a class="info-tiles tiles-brown" >
					            <div class="tiles-heading">
					                <div class="pull-left"><span style=" font-size: 18px;">ประเมินนักเรียนไปแล้วทั้งหมด</span></div>
					            </div>
					            <div class="tiles-body text-center" id="overall-spv">
                                 
					            </div>
					        </a>
					    </div>
              
        </div>
      <div class="col-md-12">
                <div class="panel panel-midnightblue">
                    <div class="panel-heading">
                    <?php if(isset($result)){
                          echo "รายชื่อนักเรียนที่กำลังออกฝึกงาน";
                     }else{
                     echo "No Data";
                 } ?>
                     </div>
                    <div class="panel-body">
                    
                    <div class="table-responsive">
                    <?php echo $this->session->flashdata("success");  ?>
                    <table cellpadding="0" cellspacing="0" border="0" class="table  datatables" id="example">
                          <thead >
                            <tr>
                              <th>บริษัท</th>
                              <th>ชื่อ</th>
                              <th>รหัสนักเรียน</th>
                              <th>แผนก</th>
                              <th>กลุ่ม</th>
                              <th>ภาคเรียน</th>
                              <th>วันที่เริ่มฝึก</th>
                              <th>วันที่สิ้นสุด</th>
                              <th class="text-center"></th>
                              <th class="text-center"></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($result != null){ 
                                  $i = 0;
                                  foreach($result as $r){ 
                                
                                ?>
                                <tr>
                              <td><?php echo $r->company_name ?></td>
                              <td><?php echo $r->title." ".$r->fname." ".$r->lname ?></td>
                              <td><?php echo $r->std_code ?></td>
                              <td><?php echo $r->dv_name ?></td>
                              <td><?php echo $r->class_name." ".$r->class_group ?></td>
                              <td><?php echo $r->term ?></td>
                              <td><?php echo $r->start_date ?></td>
                              <td><?php echo $r->end_date ?></td>
                              <?php if(array_search($r->t_id, array_column($result_spv, 't_id')) !== false){
                                $key = array_search($r->t_id, array_column($result_spv, 't_id')) ;
                                echo "<td class='text-center'>";
                                echo "<span class='text-success'>ประเมินแล้ว</span>";
                                echo "</td>";
                                echo "<td class='text-center'>
                                <a href='".base_url()."contact/supervision_view/".$subject_id."/".$result_spv[$key]['spv_contact_id']."'><button class='btn btn-primary'>ดูแบบประเมิน</button></a>
                                <a href='".base_url()."contact/supervision_insert/".$subject_id."/".$r->std_id."'><button class='btn btn-warning'>แก้ไข</button></a>
                                </td>";
                                $i++;
                              } else {
                                echo "<td class='text-center'>";
                                echo "<span class='text-danger'>ยังไม่ได้ประเมิน</span>";
                                echo "</td>";
                                echo "<td class='text-center'>
                                      <a href='".base_url()."contact/supervision_insert/".$subject_id."/".$r->std_id."'><button class='btn btn-brown'>ประเมิน</button></a>
                                      </td>";
                              }
                            ?>
                            </tr>
                              <?php }}else{
                                  echo "No Data";
                              }  ?>
                           
                          </tbody>
                        </table>
				            		<input type="hidden" id="total_spv" value="<?php echo $i ?>">
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
<script>
$(document).ready(function(){
 	var total_spv = $('#total_spv').val();
	 $('#overall-spv').html(total_spv);
	//  $('#overall-contact').html("Company : "+company_chk+"/"+sum);
}); 
$('#example').DataTable( {
        responsive: true,
        dom: "Bfrtip",
        ajax: "../php/staff.php",
        columns: [
            {   // Responsive control column
                data: null,
                defaultContent: '',
                className: 'control',
                orderable: false
            },
            {   // Checkbox select column
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
            { data: "first_name" },
            { data: "last_name", className: 'never' },
            { data: "position" },
            { data: "office" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        order: [ 2, 'asc' ],
        select: {
            style:    'os',
            selector: 'td.select-checkbox'
        },
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
</script>