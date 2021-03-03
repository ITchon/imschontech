
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Table Division</li>
                <li class="active">Edit Division</li>
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
                            <h4>Edit Division</h4>
                        </div>
                        <div class="panel-body collapse in">
                                <?php echo form_open('manage_division/edit_p');?>
                                <?php echo form_hidden('dv_id',$result_ed[0]->dv_id);  ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dv_name">ชื่อบริษัท</label>
                                            <input type="text" name="dv_name" value="<?php echo $result_ed[0]->dv_name  ?>" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                        </div>
                        <?php echo form_submit(array('dv_id'=>'submit','value'=>' ยีนยัน ','class'=>'btn-primary btn')); 
                              echo anchor(base_url().'manage_division', 'ยกเลิก',array('class'=>'btn btn-dark'));
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