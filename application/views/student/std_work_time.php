<style>
	.tr-color{
		background-color: #add9cc;
	}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                                        <div class="panel panel-green">
											<div class="panel panel-heading">
												<span>ตารางลงเวลาการปฎิบัติงาน</span>
											</div>
                                            <div class="panel-body collapse in">
                                                <div class="table-responsive">
													<?php 	
														$i = 1;
														$week = 1;
													?>
													<div class="col-md-6">
														<div class="text-center">
															<h4>สัปดาห์ที่ <?php echo $week ?></h4>	
														</div>
														<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
																<tr  class="tr-color">
																	<th width="100px">วัน/เดือน/ปี</th>
																	<th width="80px">เวลามา</th>
																	<th width="80px">เวลากลับ</th>
																	<th width="100px">หมายเหตุ</th>
																	<th width="200px" class="text-center">การยืนยัน</th>
																</tr>
                                                                <?php foreach($result_date as $rd){
													
																	if($rd->confirm == 1){
																		 $disabled = "disabled";
																		 $readonly = "readonly";
																	}else{
																		$disabled ="";
																		$readonly =""; 
																	}
																	?>
                                                                    <!-- <button class="stw_id" hidden value="<?php echo $rd->swt_id ?>"></button> -->
																	<tr>
																		<td><?php echo $rd->date ?></td>
																		<td><input <?php echo $readonly ?> type="time" class="form-control arrive-time" name="" id="save_arrive_time-<?php echo $rd->swt_id ?>" value="<?php echo $rd->arrive_time ?>"></td>
																		<td><input <?php echo $readonly ?> type="time" class="form-control depart-time" name="" id="save_depart_time-<?php echo $rd->swt_id ?>" value="<?php echo $rd->depart_time ?>"></td>
																		<td>
																		<select <?php echo $disabled ?> name="" class="form-control note" id="save_note-<?php echo $rd->swt_id ?>">
																			<option value=""></option>
																			<option <?php if($rd->note == "ขาด")echo "selected" ?> value="ขาด">ขาด</option>
																			<option <?php if($rd->note == "ลาป่วย")echo "selected" ?> value="ลาป่วย">ลาป่วย</option>
																			<option <?php if($rd->note == "ลากิจ")echo "selected" ?> value="ลากิจ">ลากิจ</option>
																			<option <?php if($rd->note == "มาสาย")echo "selected" ?> value="มาสาย">มาสาย</option>
																		</select>
																		</td>
																		<td class="text-center">
																		<?php
																		 if($rd->confirm == "0")echo "<span class='text-danger'>ยังไม่ได้รับการยืนยัน</span>";
																		 else echo "<span class='text-success'>ได้รับการยืนยันแล้ว</span>";
																		 ?></td>
																	</tr>

																<?php 
																if($i%7==0){ 
																$week++;
																?>
														</table>
													</div>
													<div class="col-md-6">
													<div class="text-center">
															<h4>สัปดาห์ที่ <?php echo $week ?></h4>	
														</div>
														<table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
																	<tr class="tr-color">
																		<th width="100px">วัน/เดือน/ปี</th>
                                                                        <th width="80px">เวลามา</th>
                                                                        <th width="80px">เวลากลับ</th>
                                                                        <th width="100px">หมายเหตุ</th>
                                                                        <th width="200px" class="text-center">การยืนยัน</th>
																	</tr>
															
																<?php
																	}
																$i++;
																} 
																?>
														</table>

													</div>
                                                </div>
                                            </div>
                                        </div>
<script>

	$("input ,select").change(function(){
		var data = $(this).val();
		var id = this.id;
		var split_id = id.split("-");
		var swt_id = split_id[1];
		var name = split_id[0];

        $.ajax({
				url: "<?php echo base_url()?>crud/"+name+"/"+swt_id+"",  
    			type: "POST",
    			cache: false,
    			data:{
    				data: data
    			},
    			success: function(data){		

    		},
            error:function(data){

            }
        });
	});
	$("input").change(function(){
			var id = this.id;
			var split_id = id.split("-");
			var swt_id = split_id[1];
			var selected = $("#save_note-"+swt_id).val()
			if(selected != "" && selected != "มาสาย"){
				$("#save_note-"+swt_id).val("").change();

					$.ajax({
					url: "<?php echo base_url()?>crud/reset_note/"+swt_id+"",  
					type: "POST",
					cache: false,

					success: function(data){		

					},
					error:function(data){

					}
					});
			}

		});
	$(".note").change(function(){
			var data = $(this).val();
			var id = this.id;
			var split_id = id.split("-");
			var swt_id = split_id[1];
			if(data != "" && data != "มาสาย"){
				$("#save_arrive_time-"+swt_id).val('');
				$("#save_arrive_time-"+swt_id).prop("disabled", "disabled");
				$("#save_depart_time-"+swt_id).val('');
				$("#save_depart_time-"+swt_id).prop("disabled", "disabled");
				$.ajax({
				url: "<?php echo base_url()?>crud/reset_time/"+swt_id+"",  
    			type: "POST",
    			cache: false,
    			data:{
    				data: data
    			},
    			success: function(data){		

				},
				error:function(data){

				}
				});
			}else{
				$("#save_arrive_time-"+swt_id).removeProp("disabled");
				$("#save_depart_time-"+swt_id).removeProp("disabled");
			}
		});


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 650;
  document.documentElement.scrollTop = 650;
}

</script>