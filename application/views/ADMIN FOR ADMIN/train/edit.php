
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Tables Train</li>
                <li class="active">Edit Train</li>
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
<!-- <?php print_r($result) ?> -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>แก้ไขรายชื่อการฝึกงาน</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_train/edit_p');?>
                                <?php echo form_hidden('t_id',$result[0]->t_id);  ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Company">ชื่อบริษัท</label>
                                            <select name="company_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกบริษัท..." data-hide-disabled="true">
                                                <?php 
                                                foreach ($result_cp as $cp) {?>
                                                         <option <?php if($result[0]->company_id == $cp->company_id)echo "selected" ?> value="<?php echo $cp->company_id ?>"><?php echo $cp->company_name ?></option> 
                                                <?php    }  ?>
                                            </select> 
                                            <!-- <select class="itemName form-control" style="width:500px" name="itemName">
                                                <option value="">asd</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="std_id">นักเรียน</label>
                                            <select id="e1" name="std_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกนักเรียน..." data-hide-disabled="true">
                                                <?php foreach ($result_std as $std) { ?>
                                                   <option <?php if($result[0]->std_id == $std->std_id)echo "selected" ?> value="<?php echo $std->std_id ?>"><?php echo $std->title." ".$std->fname."  ".$std->lname ?></option> 
                                                   <?php    }  ?>
                                            </select>

                                            <!-- <select class="js-example-basic-single" name="state">
                                                <option value="AL">Alabama</option>
                                                    ...
                                                <option value="WY">Wyoming</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="teacher_id">อาจารย์นิเทศก์</label>
                                
                                            <select required name="teacher_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกอาจารย์นิเทศ..." data-hide-disabled="true" >
                                                <?php foreach ($result_th as $th) { ?>
                                                   <option <?php if($result[0]->spv_id == $th->teacher_id)echo "selected" ?> value="<?php echo $th->teacher_id ?>"><?php echo $th->title." ".$th->fname."  ".$th->lname ?></option> 
                                                <?php
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_id">ผู้ควบคุมการฝึกงาน</label>
                                            <select required name="contact_id" class="selectpicker form-control"  data-container="body" data-live-search="true" title="เลือกครูฝึก..." data-hide-disabled="true" >
                                                <?php foreach ($result_ct as $ct) {?>
                                                   <option <?php if($result[0]->contact_id == $ct->contact_id)echo "selected" ?> value="<?php echo $ct->contact_id ?>"><?php echo $ct->name ?></option> 
                                                <?php
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
                                    <div class="col-md-12"> 
                                    <div class="panel-body collapse in">
                                        <h4>ระยะเวลาการฝึกงาน</h4>
                                   
                                    
                                        <div class="col-md-2">
                                           <div class="form-group">
                                            <label for="term">เลือกภาคเรียน</label>
                                             <select name="term" id="term" class="form-control">
                                             <option <?php if($result[0]->term == "1/2562")echo "selected" ?>value="1/2562">1/2562</option>
                                             <option <?php if($result[0]->term == "2/2562")echo "selected" ?>value="2/2562">2/2562</option>
                                             <option <?php if($result[0]->term == "1/2563")echo "selected" ?>value="1/2563">1/2563</option>
                                             <option <?php if($result[0]->term == "2/2563")echo "selected" ?>value="2/2563">2/2563</option>
                                             <option <?php if($result[0]->term == "1/2564")echo "selected" ?>value="1/2564">1/2564</option>
                                             <option <?php if($result[0]->term == "2/2564")echo "selected" ?>value="2/2564">2/2564</option>
                                             </select>                                       
                                    
                                            </div>
                                        </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="start_date">เวลาเรื่มฝึกงาน</label>
                                            <input type="date" name="start_date" class="form-control" value="<?php echo $result[0]->start_date ?>">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="end_date">เวลาจบฝึกงาน</label>
                                            <input type="date" name="end_date" class="form-control" value="<?php echo $result[0]->end_date ?>">
                                            
                                        </div>

                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">สถานะ</label>
                                            <select name="status" class="form-control">
                                                <option value="0">ไม่ผ่าน</option>
                                                <option value="1">ผ่าน</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="note">หมายเหตุ</label>
                                            <textarea name="note"  class="form-control"><?php echo $result[0]->note ?></textarea>
                                           
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                        <?php echo form_submit(array('t_id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'manage_train', 'ยกเลิก',array('class'=>'btn btn-dark'));
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