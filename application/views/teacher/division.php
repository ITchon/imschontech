<style>

.select{
  height: 38px
}
</style>
<div id="">
    <div id='wrap' >

        <div class="container" style="background-color: #ffffff;" >
            <div class="row">
                <div class="col-md-12">
				<h2><strong>ค้นหานักเรียน</strong></h2>
            <form name="search" action="<?php echo base_url()?>teacher/division" method="post">
                <br>
                     <div class="col-md-12">
                         <select name="std_id" class="btn form-control selectSTD" onchange="this.form.submit()">
                <option value="">- - - Select - - -</option>
                <?php foreach($result_search as $r){
                    $name = $r->std_code." : ".$r->title.$r->fname."  ".$r->lname." ".$r->dv_name." ".$r->company_name;
                    ?>
                    <option value="<?php echo $r->std_id ?>"><?php echo $name ?></option>
                <?php } ?>
                    </table>
                    </select>
                </form>
            </div>
                <br><br>

                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h4>บันทึกการปฏิบัติงานของนักศึกษาทั้งหมด</h4>
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
                                                        echo $r->title."  ";
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
                
            <div class=" col-sm-12">
            <?php if($division_list != null){?>
                <form action="<?php echo base_url()?>teacher/list/" method="post">
                <select name="class_id" id="e1" class="form-control input-lg division" onchange="this.form.submit()">
                <option value="">- - - Select - - -</option>
                <?php foreach($class_list as $d){          if($dv->dv_id == $c->dv_id){?>
                    <option value="<?php echo $d->class_id ?>"><?php echo $d->class_name.$d->class_group ?></option>
            <?php  }
                  } 
                }
            ?>
            </select>
            </form>
            <br>
            </div>

   
                        <?php 
                        if(isset($division_list)){

                            foreach($division_list as $dv){ ?>
                            <div class="col-md-6">
                                <div class="panel panel-midnightblue">
    
                                        <span style="color:#34495e;font-size:34px"><?php echo $dv->dv_name ?></span>

                                    <div class="panel-body">
                                        <?php foreach($class_list as $c){ 
                                              if($dv->dv_id == $c->dv_id){?>
                                                <div class="col-sm-6">
                                                    <a class="info-tiles btn-midnightblue-alt" href="<?php echo base_url(); ?>teacher/list/<?php echo $c->class_id ?>">
                                                        <div class="tiles-body-alt">
                                                            <div class="text-center" ><?php echo $c->class_name.$c->class_group ?></div>
                                                        </div>
                                                    </a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                          <?php  }
                           }?>
                    

           

                        
                    <?php } 
                    }else{ ?>
                        


                    <?php } ?>

                        
                                <!-- <div class="tiles-footer">manage orders</div> -->
                          
                            
                            
                           
                    </div>
                </div>
            </div>

<script type="text/javascript">
    $('.division').select2({
    placeholder: '--- ค้นหาแผนก---',
    });
</script>
<script type="text/javascript">
    $('.selectSTD').select2({
    placeholder: '--- ค้นหานักเรียน---',
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
 	var teacher_chk = $('#teacher').val();

 	var sum = $('#sum').val();
	 $('#overall-teacher').html("Total : "+teacher_chk);
	//  $('#overall-contact').html("Company : "+company_chk+"/"+sum);
});
$(".open-modal").click(function() {
	var date = $(this).val();
    var std_id = $(this).data("id") 
	 $.ajax({
		url: "<?php
					 echo base_url("crud/event_forteacher/");
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
