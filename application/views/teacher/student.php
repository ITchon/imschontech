<style>
input[type=text] {

}
</style>
<div id="">
    <div id='wrap' >


        <div class="container" style="background-color: #ffffff;" >
            <div class="row">
                <div class="col-md-12">
                         <?php  if($result != null){ ?>
                       <h1>ใส่รหัส</h1>
                       <form target = '_blank' action="<?php echo base_url()?>teacher/std_data" method="get">
            <input type="text" class="form-control input-lg" name="student_search" placeholder="รหัสนักศึกษา">
                         </form>   
           <?php if($result != null){

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
                            }else{ ?>
                                <div id='wrap'>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <span class="text-danger" style="font-size:4em;">Oops!</span>
            </p>
            <p class="text-center">Something went terribly wrong.</p>
            <p class="text-center">We are fixing it. Please try again later.</p>
        </div>
    </div>

</div> <!-- container -->
</div> <!--wrap -->
                            <?php }?>  
                    </div>
                </div>
            </div>
            

            <script type="text/javascript">


$('.itemName').select2({
  placeholder: '--- Select Item ---',
});


</script>
