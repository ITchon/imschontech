
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Company">ชื่อบริษัท</label>
                                            <select name="company_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกบริษัท..." data-hide-disabled="true">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="std_id">นักเรียน</label>
                                            <select id="e1" name="std_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกนักเรียน..." data-hide-disabled="true">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="teacher_id">อาจารย์นิเทศก์</label>
                                
                                            <select name="teacher_id" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกอาจารย์นิเทศ..." data-hide-disabled="true" >
                                                <?php foreach ($result_th as $th) {
                                                        echo " <option value=".$th->teacher_id."> ".$th->fname." &nbsp;&nbsp;&nbsp;&nbsp; ".$th->lname." </option> ";
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
                                            <label for="contact_id">ผู้คุมการฝึกงาน</label>
                                            <select name="contact_id" class="selectpicker form-control"  data-container="body" data-live-search="true" title="เลือกครูฝึก..." data-hide-disabled="true" >
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="start_date">เวลาเรื่มฝึกงาน</label>
                                            <input type="date" name="start_date" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="end_date">เวลาจบฝึกงาน</label>
                                            <input type="date" name="end_date" class="form-control">
                                            </select>
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

</body>
</html>