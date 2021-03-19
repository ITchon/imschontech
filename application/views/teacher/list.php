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
        <div class="container" style="min-height: 752px;background-color:#ffffff" >
            <div class="row">
				<div class="col-md-12">
               
					<div class="panel panel-midnightblue">
						<div class="panel-body">

							<div class="row">
								<div class="col-md-6 ">
        <!-- <?php  if(isset($result)){
            if($result != null){

            ?>
								<div class="col-xs-12">
									<div class="tab-container tab-midnightblue">
                                        <div class="panel panel-sky">
                                            <div class="panel-body collapse in">
                                                <div class="table-responsive">
                                                <?php echo "<h1><b>".$name->title." ".$name->fname." ".$name->lname."</b></h1>"; ?>
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                                                    <thead class="bg-primary">
	              	                    				<tr>
	              	                    					<th width="5%">#</th>
	              	                    					<th width="35%">Title</th>
	              	                    					<th width="25%">Start</th>
	              	                    					<th width="25%">End</th>
	              	                    					<th width="35%"> - </th>
	              	                    				</tr>
	              	                    			</thead>
	              	                    			<tbody>
					                    			  <?php foreach($result as $r){ ?>
	              	                    				<tr>
					                    				  <td><?php echo $r->id ?></td>
					                    				  <td><?php echo $r->title ?></td>
					                    				  <td><?php echo $r->start_event ?></td>
					                    				  <td><?php echo $r->end_event ?></td>
                                                          <td>
                                                            <?php echo "<a href='".base_url()."teacher/confirm/".$r->id ."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='fa fa-check'></i></a>";   ?>
                                                            <?php echo "<a href='".base_url()."teacher/no_confirm/".$r->id ."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='fa fa-ban'></i></a>";   ?>
                                                        </td>
					                    				</tr>
                                                          <?php  } ?> 
                                                    
	              	                    			</tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
                                <?php  }else{
                                    echo "No Data";
                                }
                            }?> -->
                            </div>
        

            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading-bigger">
                    <span><?php if(isset($class)){
                     echo "ระดับชั้น ".$class->class_name.$class->class_group; }else{
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
                              <td><?php echo $std->class_name ?></td>
                              <?php echo "<td class='text-center'>
                              <a href='".base_url()."Teacher/std_data/".$std->std_id."'><button class='btn btn-info'>ดูรายละเอียด</button></a>
                              
                            
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

