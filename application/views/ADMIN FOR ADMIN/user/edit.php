<style>
    .field-icon {
    float: right;
    margin-left: -25px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
    }

    .container{
    padding-top:50px;
    margin: auto;
    }
</style>
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Data user</li>
                <li class="active">edit user</li>
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
                            <h4>แก้ไชผู้ใช้งานในระบบ</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_user/edit_p');?>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $result[0]->id ?>">
                                <input type="hidden" name="user_id" class="form-control" value="<?php echo $result[0]->user_id ?>">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="title">Username</label>
                                           <input type="text" name="username" class="form-control" value="<?php echo $result[0]->username ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="title">Password</label>
                                            <input type="password" name="password" id="password-field" class="form-control" value="<?php echo $result[0]->password ?>">
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="usergroup">Group user</label>
                                            <input type="text" class="form-control" value="<?php echo $result[0]->usergroup ?>" disabled>
                                             <!-- <Select name="usergroup" class="form-control" >
                                                <option value="student">student</option>
                                                <option value="admin">admin</option>
                                                <option value="teacher">teacher</option>
                                                <option value="contact">contact</option>
                                             </Select> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_submit(array('id'=>'submit','value'=>' ยืนยัน ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'manage_user', 'ยกเลิก',array('class'=>'btn btn-dark'));
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

<script>
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });
</script>

</body>
</html>