<style>
    /* .container{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    } */
    .student_detail{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .fa-check{
        color: green;
    }
    .fa-ban{
        color: red;
    }

</style>
</div>
<div class="container" style="background-color: #ffffff;" >
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-brown">
                        <div class="panel-heading">
                            <h4>บันทึกการปฏิบัติงานของนักเรียนทั้งหมด</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
            <div class="col-md-12">
				<h2>ค้นหานักเรียน</h2>
            <form name="search" action="<?php echo base_url()?>contact/trainer" method="post">
            <select name="std_id" class="btn form-control selectSTD" onchange="this.form.submit()">
                        <option value="">- - - Select - - -</option>
                        <?php foreach($result_search as $r){
                            $name = $r->std_code." : ".$r->title.$r->fname."  ".$r->lname." ".$r->dv_name." ".$r->company_name;
                            ?>
                            <option value="<?php echo $r->std_id ?>"><?php echo $name ?></option>
                        <?php } ?>
                    </select>
                </form>
                            
            </div>
         </div> 
         </div>
        </div>
            <div class="col-md-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h4>บันทึกการปฏิบัติงานของนักเรียนทั้งหมด</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table datatables" style="margin-bottom: 0px;" id="example">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th width="10%">ชื่อ</th>
                                            <th width="15%">แผนก</th>
                                            <th width="15%">บริษัท</th>
                                            <th width="20%">รายการ</th>
                                            <th>วันที่</th>
                                            <th width="10%">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                    <?php 
												$sum = 0;
												$std_chk =0;
												$contact_chk =0;
											foreach($result_test as $row){
                                                $name = $row->title.$row->fname." ".$row->lname;
												$dt = new DateTime($row->date);
												$date = $dt->format('Y-m-d');
												$time = $dt->format('H:i:s');
												$std_chk++;
												?>
												<tr>
                                                <td><input type="checkbox" id="select-all"></td>
                                                <td><?php echo $name ?></td>
                                                <td><?php echo $row->dv_name ?></td>
                                                <td><?php echo $row->company_name ?></td>
												<td>
												<?php foreach($result as $r){
                                                    $dt = new DateTime($r->start_event);
                                                    $date_event = $dt->format('Y-m-d');
                                                    $time = $dt->format('H:i:s');
                                                    if($date == $date_event){
                                                      if($row->std_id == $r->std_id){
                                                        echo $r->title."  ";
                                                      }
                                                    }
												} ?>
												</td>
                                                <td><?php echo $date ?></td>

												
												<td>
												<button data-id='<?php echo $row->std_id?>' type="button" value='<?php echo $date ?>' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
												</button>
                                                <!-- <input id="std_id" type="text" name="std_id" value="<?php echo $row->std_id?>"> -->
												</td>
												</tr>
												<?php
												$sum++;
													}
														
													  ?> 
                                                    
	              	                    			</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
              <div class="col-xs-12">
                <div class="panel panel-midnightblue">
                <div class="panel-heading">
                            <h4>รายชื่อนักเรียน</h4>
                            <div class="options">
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                    <div class="panel-body">
                    <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table datatables" id="example">
                          <thead >
                            <tr>
                              <th>Title</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Tel</th>
                              <th>Email</th>
                              <th>Division</th>
                              <th>-</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($student_list != null){ foreach($student_list as $std){ ?>
                                <tr>
                              <td><?php echo $std->title ?></td>
                              <td><?php echo $std->fname ?></td>
                              <td><?php echo $std->lname ?></td>
                              <td><?php echo $std->tel ?></td>
                              <td><?php echo $std->email ?></td>
                              <td><?php echo $std->dv_name ?></td>
                              <?php echo "<td><a target = '_blank' href='".base_url()."contact/trainer_data/".$std->std_id."'>ดูรายละเอียด</a></td>";  ?>
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
        
<script type="text/javascript">
    $('.selectSTD').select2({
    placeholder: '--- ค้นหานักเรียน---',
    });
</script>
<script type="text/javascript">
$(".open-modal").click(function() {
	var date = $(this).val();
    var std_id = $(this).data("id") 
	 $.ajax({
		url: "<?php
					 echo base_url("crud/event_forcontact/");
					 ?>",  
    			type: "POST",
    			cache: false,
    			data:{
					date: date,
					std_id:std_id
    			},
    			success: function(data){		
     			 $('#event_detail').modal();
     			 $('#data_body').html(data);
     			 $('#text_header').html($("#Textheader").val());//modal head

				  
	 			//  console.log(data);
    			},
          error:function(data){
			// console.log(data);
			// $('#event_detail').modal();

			
          }
    });
});

   

</script>

