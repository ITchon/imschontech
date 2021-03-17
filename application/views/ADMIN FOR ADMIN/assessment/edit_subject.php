
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Table assessment sheet</li>
                <li class="active">Edit assessment</li>
            </ol>

            <h1></h1>
            <!-- <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div> -->
        </div>


        <div class="container">
                        
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>แก้ไขชื่อการประเมิน</h4>
                        </div>
                        <div class="panel-body collapse in">
                        <?php $id_form = array('id' => 'example1'); ?>
                                <?php echo form_open('manage_asm/edit_subname', $id_form);?>
                                <?php echo form_hidden('subject_id',$result_sub[0]->subject_id);  ?>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_name">ชื่อการประเมิน</label>
                                            <div class="form-inline">
                                            <input type="text" name="sub_name" value="<?php echo $result_sub[0]->subject_name  ?>" class="form-control">
                                    <?php echo form_submit(array('subject_id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-success btn')); 
                                    
                              echo form_close(); ?>
                                            </div>
                                            </div>

                                            <?php echo $this->session->flashdata("success"); ?>
                                        </div>
                                    </div>
                                      <button onclick="window.history.back();" class="btn btn-default">ย้อนกลับ</button>
                                    </div>
            </div>
        </div> <!-- container -->
    </div> <!--wrap -->
           <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>รายชื่อหัวข้อการประเมิน</h4>
                        </div>
                        <div class="panel-body collapse in">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                            <thead>
                                    <tr>
                                        <th  width="15%">อันดับ</th>
                                        <th class="text-center">รายการประเมิน</th>
                                        <th width="15%" class="text-center">manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i = 1;
                                foreach($result_glist as $rg){ 
                                    ?>
                                    <tr>
                                        <td><b><?php echo $i?></b></td>
                                        <td><div class="edit"><?php echo $rg->glist_name ?><div></td>
                                        <td class="text-center">
                                       
                                        <div class="btn-group">
                                            <button type ="button" onclick="javascript:window.location='<?php echo base_url() . 'manage_asm/edit_glist/' . $rg->glist_id; ?>';" style="width: 50px;" class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></button>
                                            <button type ="button" value="<?php echo $rg->glist_id ?>" id="del_glist" style="width: 50px;" class="btn btn-sm btn-danger delete"><i class='fa fa-trash-o'></i></button>
                                        </div>
                                        
                                        </td>
                                    </tr>
                                <?php $i++; } ?>
                                    <tr>
                      <td><button class="btn btn-success" type="button" id="add"><i class="fa fa-plus"> เพิ่ม</i></button>
                    <button type="button" class="btn btn-danger btn_remove hidden"><i class="fa fa-trash-o"> Del</i></button><br></td>
                      <td>
                      <div id="dynamic_field"></div>
                      <input type="submit" class="btn-success btn" id="confirm" value="Confirm">
                      </td>
                      <td></td>                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <input type="hidden" id="num" value="<?php echo $i ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>IMS &copy; 2020</li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>



<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/enquire.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo-datatables.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/application.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery.tabledit.js'></script> 


<script>
$(document).ready(function() {
    $('#confirm').addClass('hidden');
    var num = $('#num').val();
  var i = 1;
  $('#add').click(function() {
    if (i <= 99) {
      $('#dynamic_field').append('<div id="row' + i + '"><h5>' + num + '</h5><input type="text" class="form-control" id="g_list" name="g_list" value="" required><br></div>')
      //$('#dynamic_field').append('<div id="row' + i + '"><label for="email-2">Part No (' + i + ')</label><input type="text" class="form-control" name="p_no[]" value=""></div></div><div class="form-group"><label class="col-sm-3 col-md-4 control-label">Part Name (' + i + ')</label><div class="col-sm-6 col-md-4"><input type="text" class="form-control" name="p_name[]" value=""></div></div><br><hr style="height:2px;border-width:0;color:gray;background-color:red"></div>')
      i++;
      $('.btn_remove').removeClass('hidden');
      $('#confirm').removeClass('hidden');
      $('#add').addClass('hidden');
    }
  });
  $(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    i--;
    $('#row' + $('#dynamic_field div').length).remove();
      $('.btn_remove').addClass('hidden');
      $('#confirm').addClass('hidden');
      $('#add').removeClass('hidden');

    
  });
});
</script>

<script>
$(document).ready(function() {
    $(document).on('click', '#edit_glist', function() {
        var id = $(this).attr("data-id");
        alert(id);
    		$.ajax({
    			url: "<?php echo base_url("manage_asm/get_onegrouplist");?>",
    			type: "POST",
    			cache: false,
    			data:{
    				id: id
    			},
    			success: function(res){
                alert(res);
                console.log(res);
    			},
          error:function(res){
            // console.log("error");
          }
    		});
      
    });
$(document).on('click', '#del_glist', function() {
      var r = confirm("Confirm delete?");
      if (r == true) {
    	var $ele = $(this).parent().parent();//?????
        var glist_id = $(this).attr("data-id");
        var sub_id = <?php echo $this->uri->segment('3')?>;
    		$.ajax({
    			url: "<?php echo base_url("manage_asm/delete_subglist");?>",
    			type: "POST",
    			cache: false,
    			data:{
    				glist_id: glist_id,sub_id:sub_id
    			},
    			success: function(data){
    				location.reload();
    			},
          error:function(data){
            // console.log("error");
          }
    		});
      } 
    });
$(document).on('click', '#confirm', function() {
    	var $ele = $(this).parent().parent();//?????
        var glist_id = $(this).attr("data-id");
        var g_list = $('#g_list').val();
        var sub_id = <?php echo $this->uri->segment('3')?>;
    		$.ajax({
    			url: "<?php echo base_url("manage_asm/add_grouplist");?>",
    			type: "POST",
    			cache: false,
    			data:{
    				glist_id: glist_id,
                    sub_id:sub_id,
                    g_list:g_list
    			},
    			success: function(data){
    				location.reload();
    			},
          error:function(data){
            // console.log("error");
          }
    		});

    });

});


</script>