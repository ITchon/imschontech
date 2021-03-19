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
                    <?php if(isset($result)){
                          echo "เวลาการปฏิบัติงานของนักศึกษา";
                     }else{
                     echo "No Data";
                 } ?>
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
                              <?php echo "<td> 
                              <a href='".base_url()."contact/trainer_data/".$std->std_id."'><button class='btn btn-info'>ดูรายละเอียด</button></a>
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
