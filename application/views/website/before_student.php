<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Internship Management</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
	<link rel="icon" href="<?php echo base_url('../assets/img/icon-ims.png') ?>" type="image/icon type">
    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    
    <!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>

<style>

</style>
<body class="container" id="grad1" >
<header class="navbar navbar-inverse navbar-fixed-top" role="banner" >

</header>
<div id="page-heading">
            <!-- <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>main">Dashboard</a></li>
                <li>Admin</li>
                <li class="active">Data Student</li>
            </ol> -->

            <h1>Data Student</h1>
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
<div class="row">
    <div class="col-md-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Data Student</h4>
                            <div class="options">   
                                    <!-- <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                    <a href="<?php echo base_url(); ?>manage_student/insert_student"><i class="fa fa-plus"></i></a>
                                    <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a> -->
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <div class="table-responsive">
                                <!-- <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>manage_student/insert_student">เพิ่ม</a> -->
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                    <thead>
                                        <tr>
                                            <th>รหัสนักเรียน</th>
                                            <th width="12%">ปีเกิด</th>
                                            <th width="11%">คำนำหน้า</th>
                                            <th width="15%">ชื่อ นามสกุล</th>
                                                <!-- <th>นามสกุล</th> -->
                                            <th>เพศ</th>
                                            <th>เบอร์ติดต่อ</th>
                                            <th>อีเมล</th>
                                            <th width="11%">ระดับชั้น</th>
                                            <th width="11%">กลุ่ม</th>
                                        <!-- <th width="19%">สถานะ</th>
                                            <th  width="15%">Manage</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $r){ 

                                                    if($r->status == 1 ){ 
                                                        
                                                        $txt_status = 'ลงทะเบียนแล้ว'; 
                                                        $txt_color = '#0EC952';
                                                        
                                                        }else{
                                                        
                                                        $txt_status = 'ยังไม่ลงทะเบียน'; 
                                                        $txt_color = '#FF0000'; 
                                                        
                                                        } ?>
                                        <tr>
                                            <td><?php echo $r->std_code ?></td>
                                            <td><?php echo $r->birth_date ?></td>
                                            <td><?php echo $r->title ?></td>
                                            <td><?php echo $r->fname." ".$r->lname ?></td>
                                            <!-- <td><?php echo $r->lname ?></td> -->
                                            <td><?php echo $r->gender ?></td>
                                            <td><?php echo $r->tel ?></td>
                                            <td><?php echo $r->email ?></td>
                                            
                                            
                                            <td><?php echo $r->class_name ?></td>
                                            <td><?php echo $r->class_group ?></td>
                                            <!-- <td><?php echo '<b><span style="color:'.$txt_color.'">'.$txt_status.'</span></b>';?></td>
                                            <td>
                                            <a type ='button'   onclick="javascript:window.location='<?php echo base_url() . 'manage_student/edit_student/' . $r->std_id; ?>';"><i class='btn-warning btn-sm fa fa-edit'></i></a> &nbsp 
                                                <?php echo "<a type='button' href='".base_url()."manage_student/delete_student_p/".$r->std_id."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-danger btn-sm fa fa-trash-o'></i></a>";?> 
                                            </td> -->
                                            <?php  } ?> 
                                        </tr>
                                    </tbody>
                                </table>
                                
                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;<br><br>
                            <div class="col-md-8 col-xs-12 col-sm-8">
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <a class="info-tiles tiles-danger" href="<?php echo base_url()?>website">
                                    <!-- <div class="tiles-heading">Student</div> -->
                                    <div class="tiles-body-alt">
                                
                                        <div class="text-center"><span class="text-top"></span><b>back</b></div>
                                        <!-- <small>ดูรายชื่อนักเรียน</small> -->
                                    </div>
                                    <!-- <div class="tiles-footer">more info</div> -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-md-3"></div>     
</div>
</body>
</html>



