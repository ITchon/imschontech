
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>main">Dashboard</a></li>
                <li>Admin</li>
                <li class="active">Data Teacher</li>
            </ol>

            <h1>รายชื่ออาจารย์</h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4>รายชื่ออาจารย์</h4>
                            <div class="options">   
                                <!-- <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="<?php echo base_url(); ?>manage_teacher/insert_teacher"><i class="fa fa-plus"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a> -->
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <div class="table-responsive">
                                <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>manage_teacher/insert_teacher">เพิ่ม</a>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                    <thead>
                                        <tr>
                                            <th>คำนำหน้า</th>
                                            <th>ชื่อ นามสกุล</th>
                                            <!-- <th>นาม</th> -->
                                            <th>เบอร์ติดต่อ</th>
                                            <th>อีเมล</th>
                                            <th>รหัสครูผู้สอน</th>
                                            <th>ปีเกิด</th>
                                            <!-- <th>ระดับชั้น</th> -->
                                            <th  width="15%">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach($result as $r){ ?>
                                        <tr>
                                            <td><?php echo $r->title ?></td>
                                            <td><?php echo $r->fname ." ".$r->lname ?></td>
                                            <!-- <td><?php echo $r->lname ?></td> -->
                                            <td><?php echo $r->tel ?></td>
                                            <td><?php echo $r->email ?></td>
                                            <td><?php echo $r->th_code ?></td>
                                            <td><?php echo $r->th_birth_date ?></td>
                                            <!-- <td><?php echo $r->class_name ?></td> -->
                                            <td>
                                            <!-- <a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'manage_teacher/edit_teacher/' . $r->teacher_id; ?>';"><i class='btn-warning btn-sm fa fa-edit'></i></a> &nbsp 
                                                <?php echo "<a type='button' href='".base_url()."manage_teacher/delete_teacher_p/".$r->teacher_id."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-danger btn-sm fa fa-trash-o'></i></a>";?>  -->
                                                <div class="btn-group">
                                                    <button type ="button" onclick="javascript:window.location='<?php echo base_url() . 'manage_teacher/edit_teacher/' . $r->teacher_id; ?>';" style="width: 50px;" class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></button>
                                                    <button type ="button" value="<?php echo $r->teacher_id ?>" style="width: 50px;" class="btn btn-sm btn-danger delete"><i class='fa fa-trash-o'></i></button>
                                                </div>
                                            </td>
                                            <?php  } ?> 
                                        </tr>
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
