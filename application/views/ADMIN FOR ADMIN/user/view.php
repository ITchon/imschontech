
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>main">Dashboard</a></li>
                <li>Admin</li>
                <li class="active">Data Student</li>
            </ol>

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


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-inverse">
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
                                <!-- <a class="btn btn-success pull-right" href="<?php echo base_url(); ?>manage_user/insert_user">เพิ่ม</a> -->
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                    <thead>
                                        <tr>
                                        
                                            <th width="12%">usergroup</th>
                                            <th width="11%">username</th>
                                          
                                            <th width="19%">สถานะ</th>
                                            <th  width="15%">Manage</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($result as $r){ ?>
                                        <?php 

                           if($r->status_login == 1 ){ 
                            
                              $txt_status = 'เปลี่ยนรหัสผ่านแล้ว'; 
                              $txt_color = '#0EC952';
                            
                            }else{
                             
                            $txt_status = 'ยังไม่เปลี่ยนรหัสผ่าน'; 
                              $txt_color = '#FF0000'; 
                            
                            }
                      

                   ?>
                                    <tr>
                                     
                                        <td><?php echo $r->usergroup ?></td>
                                        <td><?php echo $r->username ?></td>
                                       
                                         <td><?php echo '<b><span style="color:'.$txt_color.'">'.$txt_status.'</span></b>';?></td> 
                                        <td>
                                        <a type ='button' onclick="javascript:window.location='<?php echo base_url() . 'manage_user/edit_user/' . $r->id; ?>';"><i class='btn-warning btn-sm fa fa-edit'></i></a> &nbsp 
                                            <?php echo "<a type='button' href='".base_url()."manage_student/delete_student_p/".$r->id."' onclick='return confirm(\"Confirm Delete Item\")' ><i class='btn-danger btn-sm fa fa-trash-o'></i></a>";?> 
                                        </td>
                                        <?php } ?> 
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

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

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
