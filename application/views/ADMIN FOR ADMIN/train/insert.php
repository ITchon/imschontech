
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Table Train</li>
                <li class="active">Insert Train</li>
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
                            <h4>Insert Train</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_train/insert_p');?>
                              
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Company">ชื่อบริษัท</label>
                                            <select name="company_id" class="form-control itemName">
                                                <option value="">-select-</option>
                                                <?php foreach ($result_cp as $cp) {
                                                        echo " <option value=".$cp->company_id."> ".$cp->company_name." </option> ";
                                                                                 }
                                                ?>
                                            </select> 
                                            <!-- <select class="itemName form-control" style="width:500px" name="itemName">
                                                <option value="">asd</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="std_id">นักเรียน</label>
                                            <select id="e1" name="std_id" class="form-control">
                                                <option value="">-select-</option>
                                                <?php foreach ($result_std as $std) {
                                                        echo " <option value=".$std->std_id."> ".$std->fname." ".$std->lname." </option> ";
                                                                                 }
                                                ?>
                                            </select>

                                            <!-- <select class="js-example-basic-single" name="state">
                                                <option value="AL">Alabama</option>
                                                    ...
                                                <option value="WY">Wyoming</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact_id">ผู้คุมการฝึกงาน</label>
                                            <select  class="itemName form-control" name="contact_id">
                                                <option value="">-select-</option>
                                                <?php foreach ($result_ct as $ct) {
                                                        echo " <option value=".$ct->contact_id."> ".$ct->name." </option> ";
                                                                                 }
                                                ?>
                                            </select>
                                            <!-- <div class="form-group">
                                                <label class="col-sm-3 control-label">Dropdown with Search</label>
                                                <div class="col-sm-6">
                                                    <select id="e1" style="width:100%" class="populate"></select>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="start_date">เวลาเรื่มฝึกงาน</label>
                                            <input type="date" name="start_date" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="end_date">เวลาจบฝึกงาน</label>
                                            <input type="date" name="end_date" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">สถานะ</label>
                                            <select name="status" class="form-control">
                                                <option value="0">ไม่ผ่าน</option>
                                                <option value="1">ผ่าน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="note">หมายเหตุ</label>
                                            <textarea name="note" class="form-control"></textarea>
                                           
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                        <?php echo form_submit(array('t_id'=>'submit','value'=>' Confirm ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'manage_train', 'Cancel',array('class'=>'btn btn-dark'));
                              echo form_close(); ?>
         
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->
    <!-- <script type="text/javascript">
$('.e1').select2({
  placeholder: '--- Select Item ---',
}); -->


</script>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>IMS &copy; 2020</li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

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
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/application.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo.js'></script> 

<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-daterangepicker/daterangepicker.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-daterangepicker/moment.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/charts-flot/jquery.flot.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/charts-flot/jquery.flot.resize.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/charts-flot/jquery.flot.orderBars.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/pulsate/jQuery.pulsate.min.js'></script> 
<!-- <script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo-index.js'></script>  -->

    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/quicksearch/jquery.quicksearch.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-typeahead/typeahead.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-select2/select2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-autosize/jquery.autosize-min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-daterangepicker/daterangepicker.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-datepicker/js/bootstrap-datepicker.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-daterangepicker/moment.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-fseditor/jquery.fseditor-min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-jasnyupload/fileinput.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js'></script>
    <!-- <script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo-formcomponents.js'></script> -->
</body>
</html>