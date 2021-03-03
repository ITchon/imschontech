
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Table Class</li>
                <li class="active">Edit Class</li>
            </ol>

            <h1></h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>แก้ไข ชั้นเรียน</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('classs/Edit_process');?>
                                <?php echo form_hidden('class_id',$result[0]->class_id);  ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="teacher_id">ครู</label>
                                            <select name="teacher_id" class="form-control">
                                                <option value="<?php echo $result[0]->teacher_id ?>"><?php echo $result[0]->fname ." ".$result[0]->lname?></option>
                                                <?php foreach ($result_th as $th) {
                                                        echo " <option value=".$th->teacher_id."> ".$th->fname." ".$th->lname." </option> ";
                                                                                 }
                                                ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dv_id">แผนก</label>
                                            <select name="dv_id" class="form-control">
                                                <option value="<?php echo $result[0]->dv_id ?>"><?php echo $result[0]->dv_name ?></option>
                                                <?php foreach ($result_dv as $dv) {
                                                        echo " <option value=".$dv->dv_id."> ".$dv->dv_name." </option> ";
                                                                                 }
                                                ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="class_name">ระดับ</label>
                                            <input type="text" name="class_name" value="<?php echo $result[0]->class_name ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="class_group">กลุ่ม</label>
                                            <input type="text" name="class_group" value="<?php echo $result[0]->class_group ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <?php echo form_submit(array('class_id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'Classs', 'ยกเลิก',array('class'=>'btn btn-dark'));
                              echo form_close(); ?>
         
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

</body>
</html>