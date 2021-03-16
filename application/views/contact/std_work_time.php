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
                                                                <?php foreach($result_date as $rd){ ?>
                                                                    <!-- <button class="stw_id" hidden value="<?php echo $rd->swt_id ?>"></button> -->
																	<tr>
																		<td><?php echo $rd->date ?></td>
																		<td><?php echo $rd->arrive_time ?></td>
																		<td><?php echo $rd->depart_time ?></td>
																		<td><?php echo $rd->note ?></td>
																		<td class="text-center">
																		<?php
																		if($rd->arrive_time == null && $rd->depart_time == null && $rd->note == null){
																			// echo "<a class=''>ไม่พบข้อมูล</a>";
																		}else{
																			if($rd->confirm == "0")echo "<a class='text-danger confirm' style='cursor:pointer' id='$rd->swt_id'>คลิกเพื่อยืนยัน</a>";
																			else echo "<a class='text-success '>ยืนยันแล้ว</a>";
																		}
																		?>
																		</td>
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
$(".confirm").click(function() { 
	var swt_id = this.id;
	$.ajax({
				url: "<?php echo base_url()?>crud/save_confirm/"+swt_id+"",  
    			type: "POST",
    			cache: false,
    			success: function(data){		
					$("#"+swt_id).html("<a class='text-success '>ยืนยันแล้ว</a>");
    		},
            error:function(data){

            }
        });
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
  document.body.scrollTop = 500;
  document.documentElement.scrollTop = 500;
}

</script>