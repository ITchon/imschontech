
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>main">Dashboard</a></li>
                <li>Table Student</li>
                <li class="active">Edit Student</li>
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
                            <h4>แก้ไขรายชื่อนักเรียน</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_student/edit_student_p');?>
                                <?php echo form_hidden('std_id',$result[0]->std_id);  ?>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="title">คำนำหน้า</label>
                                            <select name="title" class="form-control">
                                                <option value="<?php echo $result[0]->title ?>"><?php echo $result[0]->title ?>
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fname">ชื่อ</label>
                                            <input type="text" name="fname" value="<?php echo $result[0]->fname ?>" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lname">นามสกุล</label>
                                            <input type="text" name="lname" value="<?php echo $result[0]->lname ?>" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tel">เบอร์ติดต่อ</label>
                                            <input type="number" name="tel" value="<?php echo $result[0]->tel ?>" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="gender">เพศ</label>
                                            <select name="gender" class="form-control">
                                                <option value="<?php echo $result[0]->gender ?>"><?php echo $result[0]->gender ?></option>
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">อีเมล</label>
                                            <input type="email" name="email" value="<?php echo $result[0]->email ?>" class="form-control">
                                       
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">สถานะ</label>
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $result[0]->status ?>"><?php if($result[0]->status == 0 )
                                                                                                            { echo "ยังไม่ลงทะเบียน"; }
                                                                                                        else{echo "ลงทะเบียนเเล้ว"; }  ?></option>
                                                <option value="0">ยังไม่ลงทะเบียน</option>
                                                <option value="1">ลงทะเบียนเเล้ว</option>
                                              
                                            </select>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="class_id">ระดับชั้น</label>
                                            <!-- <input type="text" name="class_id" value="<?php echo $result[0]->class_id ?>" class="form-control" > -->
                                            <select name="class_id" class="form-control">
                                                <option value="<?php echo $result_cl[0]->class_id ?>"><?php echo $result_cl[0]->class_name ?></option>
                                                <?php foreach($result_cl as $cl){?>
                                                <option value="<?php echo $cl->class_id ?>"><?php echo $cl->class_name ?></option>


                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="std_code">รหัสนักเรียน</label>
                                            <input type="text" name="std_code" value="<?php echo $result[0]->std_code ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="birth_date">ปีเกิด</label>
                                            <input type="date" name="birth_date" value="<?php echo $result[0]->birth_date ?>"class="form-control">
                                        </div>
                                    </div>
                                
                                </div>  
                                
                            </div>
                        </div>
                        <?php echo form_submit(array('teacher_id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'manage_student', 'ยกเลิก',array('class'=>'btn btn-dark'));
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