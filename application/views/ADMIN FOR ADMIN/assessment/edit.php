
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Table Division</li>
                <li class="active">Edit Division</li>
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
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Edit Subject</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_asm/edit_subname');?>
                                <?php echo form_hidden('subject_id',$result_sub[0]->subject_id);  ?>
                                <?php echo $this->session->flashdata("success"); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sub_name">Subject Name</label>
                                            <input type="text" name="sub_name" value="<?php echo $result_sub[0]->subject_name  ?>" class="form-control"><br>
                                    <?php echo form_submit(array('subject_id'=>'submit','value'=>' Confirm ','class'=>'btn-success btn')); 
                              echo form_close(); ?>
                                        </div>
                                    </div>
                            </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                            <thead>
                                    <tr>
                                        <th class="text-center">รายการประเมิน</th>
                                        <th width="13%" class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $i = 1;
                                foreach($result_glist as $rg){ 
                                    ?>
                                    <tr>
                                        <td><div class="name_default"><b><?php echo $i.". ".$rg->glist_name ?></b><div>
                                        <div class="edit_name"><input id="edit_name" type="text" class="form-control" value="<?php echo $rg->glist_name ?>"><div>
                                        </td>
                                        <td class="text-center">                                         
                                        <a data-id="<?php echo $rg->glist_id;?>" id="edit_glist"><i class='btn-warning btn-sm fa fa-edit'></i></a> &nbsp 
                                        <a data-id="<?php echo $rg->glist_id;?>" id="del_glist"><i class='btn-danger btn-sm fa fa-trash-o'></i></a>
                                        </td>
                                    </tr>
                                <?php $i++; } ?>
                                    <tr>
                                        <td><button class="btn btn-success" type="button" id="add"><i class="fa fa-plus"></i></button>
                    <button type="button" class="btn btn-danger btn_remove hidden"><i class="fa fa-trash-o"></i></button><br>

                    <?php echo form_open('manage_asm/add_grouplist');?>
                        <?php echo form_hidden('subject_id',$result_sub[0]->subject_id);  ?>
                      <div id="dynamic_field"></div>
                      <?php echo form_submit(array('subject_id'=>'submit','value'=>' Confirm ','class'=>'btn-success btn' ,'id'=>'confirm')); 
                            echo form_close(); ?>
                      </td>
                      <td></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <input type="hidden" id="num" value="<?php echo $i ?>">
         <?php echo anchor(base_url().'manage_asm', 'Cancel',array('class'=>'btn btn-dark')); ?>
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

<script>
$(document).ready(function() {
    $('#confirm').addClass('hidden');
    var num = $('#num').val();
  var i = 1;
  $('#add').click(function() {
    if (i <= 99) {
      $('#dynamic_field').append('<div id="row' + i + '"><h5>' + num + '</h5><input type="text" class="form-control" name="g_list" value="" required><br></div>')
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
    $('body').on('click', '#edit_glist', function () {
        var id = $(this).data("id");
        alert(id);
console.log(id);
$.ajax({
   type: "Post",
   url:"<?php echo base_url() ?>/manage_asm/get_onegrouplist",
   data: {
      id: id
   },
   dataType: "json",
   success: function (res) {
       alert('lol');
     var html = '';
      var i;
       console.log(res);
       if(res.success != false){
         for(i=0; i<res.data.length; i++){
                         html += '<div >'+'<input type="text" value="'+res.data[i].glist_name+' " class="form-control" >'+'</div>'+'<hr>';
                     }
         $('#show_data').html(html);
         $('#modal_form').modal('show'); 
       }else{
         html = '<div class="text-center">'+'<h4>No data</h4>'+'</div>';

      $('#show_data').html(html);
      $('#modal_form').modal('show'); 
       }
      
   },
   error: function (res) {
      alert('ERROR');
      console.log('Error:', res);

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

});


</script>