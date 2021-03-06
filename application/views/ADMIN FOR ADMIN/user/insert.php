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
                <li>Insert Data</li>
                <li class="active">Insert</li>
            </ol>

            <h1>Data Tables</h1>
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
                            <h4>Data Tables</h4>
                        </div>
                        <div class="panel-body collapse in">
                            <form action="<?php echo base_url(); ?>manage_user/insert_p" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="usergroup">Group user</label>
                                             <Select id="usergroup" name="usergroup" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกประเภทผู้ใช้..." data-hide-disabled="true">
                                                <option value="student">student</option>
                                                <option value="admin">admin</option>
                                                <option value="teacher">teacher</option>
                                                <option value="contact">contact</option>
                                             </Select>

                                        </div>
                                    </div>
                                    <div class="col-md-4" id="select">
                                        <div class="form-group">
                                            <label for="usergroup">Select user</label>
                                            <Select id="user" name="user" class="selectpicker form-control" data-container="body" data-live-search="true" title="เลือกผู้ใช้..." data-hide-disabled="true">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div id="form">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Username</label>
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Password</label>
                                                <input type="password"  name="password" id="password-field" class="form-control">
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
									<?php echo $this->session->flashdata("success"); ?>

                                <input type="submit" class="btn btn-primary" value="บันทีกข้อมูล">
                                </form>

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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->

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
<script>
$( document ).ready(function() {
    $('#select').hide();
    $('#form').hide();
});
    $('#usergroup').change(function(){
  var usergroup = $('#usergroup').val();
  if(usergroup != "admin" && usergroup != "contact"){
    $('#select').show();
    $('#form').hide();

     $.ajax({
    url:"<?php echo base_url(); ?>ajax/get_by_usergroup",
    method:"POST",
    data:{usergroup:usergroup},
    success:function(data)
    {
      console.log(data);
     $('#user').empty();
     $('#user').html(data);
     $('.selectpicker').selectpicker('refresh');
    }
   });
  }else{
    $('#select').hide();
    $('#form').show();
  }
});

</script>
</body>
</html>