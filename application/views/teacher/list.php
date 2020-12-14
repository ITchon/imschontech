<style>
    .container{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
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
<div class="container">
    <div class="text-center">
    <div class="row">
        <?php  if(isset($result)){
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
                            }?>
                            </div>
                <h1><?php if(isset($class)){
                 echo $class->class_name.$class->class_group; }else{
                     echo "No Data";
                 } ?></h1>
        <form target = '_blank' action="<?php echo base_url()?>teacher/std_data" method="get">
            <input type="text" class="form-control" name="student_search" placeholder="รหัสนักศึกษา">
        </form>
    </div>
    <br>
            <div class="row">
              <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                    <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                          <thead class="bg-primary">
                            <tr>
                              <th>No.</th>
                              <th>Title</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Gender</th>
                              <th>Tel</th>
                              <th>Email</th>
                              <th>Class_id</th>
                              <th>-</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($student_list != null){ foreach($student_list as $std){ ?>
                                <tr>
                              <td><?php echo $std->std_id ?></td>
                              <td><?php echo $std->title ?></td>
                              <td><?php echo $std->fname ?></td>
                              <td><?php echo $std->lname ?></td>
                              <td><?php echo $std->gender ?></td>
                              <td><?php echo $std->tel ?></td>
                              <td><?php echo $std->email ?></td>
                              <td><?php echo $std->class_name ?></td>
                              <?php echo "<td><a target = '_blank' href='".base_url()."Teacher/std_data/".$std->std_id."'>look</a></td>";  ?>
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
