
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>main">Dashboard</a></li>
                <li>Admin</li>
                <li class="active">Data Class</li>
            </ol>

            <h1>รายชื่อชั้นเรียน</h1>
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
                            <h4>รายชื่อชั้นเรียน</h4>
                            <div class="options">   
                                <!-- <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="<?php echo base_url(); ?>Classs/insert_class"><i class="fa fa-plus"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a> -->
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            
                            <div class="table-responsive">
                            <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>Classs/insert_class">เพิ่ม</a>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                    <thead>
                                        <tr>
                                            <th>อาจารย์</th>
                                            <th>แผนก</th>
                                            <th>ระดับชั้น</th>
                                            <th>กลุ่ม</th>
                                            <th  width="15%">Manage</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    
                                            <?php foreach($result as $r){ ?>
                                        <tr>
                                            <td><?php echo $r->fname ." ".$r->lname	 ?></td>
                                            <td><?php echo $r->dv_name ?></td>
                                            <td><?php echo $r->class_name ?></td>
                                            <td><?php echo $r->class_group ?></td>

                                            <td>
                                                <div class="btn-group">
                                                    <button type ="button" onclick="javascript:window.location='<?php echo base_url() . 'Classs/edit_class/' . $r->class_id; ?>';" style="width: 50px;" class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></button>
                                                    <button type ="button" value="<?php echo $r->class_id ?>" style="width: 50px;" class="btn btn-sm btn-danger delete"><i class='fa fa-trash-o'></i></button>
                                                </div>
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
