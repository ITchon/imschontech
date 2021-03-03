
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>main">Dashboard</a></li>
                <li>Admin</li>
                <li class="active">Data assessment sheet</li>
            </ol>

            <h1>รายชื่อใบประเมิน</h1>
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
                <div class="col-md-7">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>รายชื่อใบประเมิน</h4>
                            <div class="options">   
                                <!-- <a href="javascript:;"><i class="fa fa-cog"></i></a> -->
                                <!-- <a data-toggle="modal" href="#myModal" ><i class="fa fa-plus"></i></a> -->
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                        <div class="table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead>
                                    <tr>
                                        <!-- <th>division id</th> -->
                                        <th >รายชื่อใบประเมิน</th>
                                        <th width="35%">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach($result as $r){ ?>
                                    <tr>
                                        <!-- <td><?php echo $r->subject_id ?></td> -->
                                        <td><?php echo $r->subject_name ?></td>

                                      
                                        <!-- <td><?php echo '<b><span style="color:'.$txt_color.'">'.$txt_status.'</span></b>';?></td> -->
                                        <td>
                                         <!-- onclick="javascript:window.location='<?php echo base_url() . 'manage_division/' . $r->subject_id; ?>';" -->
                                         <a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'manage_asm/edit_subject/' . $r->subject_id; ?>';"><i class='btn-warning btn-sm fa fa-edit'></i></a> &nbsp 
                                            <?php echo "<a type='button' href='".base_url()."manage_asm/delete_subject/".$r->subject_id."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-danger btn-sm fa fa-trash-o'></i></a>";?> 
                                        </td>
                                        <?php  } ?> 
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>เพิ่มใบประเมิน</h4>
                            <div class="options">   
                                <!-- <a href="javascript:;"><i class="fa fa-cog"></i></a> -->
                                <!-- <a data-toggle="modal" href="#myModal" ><i class="fa fa-plus"></i></a> -->
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>

                        </div>
                       
                            <div class="panel-body collapse in">
                                <?php echo form_open('manage_asm/insert_sub');?>
                                      
                                        <div class="form-group">
                                            <label for="sub_name">ชื่อใบประเมิน</label>
                                            <input type="text" name="sub_name" class="form-control">
                                        </div>
                                    
                                        <?php echo form_submit(array('division_id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-primary btn')); 
                                            //   echo anchor(base_url().'manage_division', 'Cancel',array('class'=>'btn btn-dark'));
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

