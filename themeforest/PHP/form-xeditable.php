<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Form</li>
                <li class="active">Inline Editor</li>
            </ol>

            <h1>Inline Editor</h1>
            <div class="options">
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
            </div>
        </div>

        <div class="container">

            <div class="alert alert-success">The X-Editable plugin allows you to create editable elements on your page. It can be used in both popup and inline modes.</div>

            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4>X-Editable</h4>
                    <div class="options">   
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#inline" data-toggle="tab">Inline</a></li>
                            <li><a href="#popovers" data-toggle="tab">Popover</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="tab-content">

                        <!-- the only difference between the inline and popover styles are the modes set in th demo js -->

                        <div class="tab-pane active" id="inline">
                            <form action="" class="form-horizontal row-border">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Simple Text Field</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Empty text field, required</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select, local array, custom display</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select, error while loading</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Combodate</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                                    <div class="col-sm-6">
                                        <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="popovers">
                            <form action="" class="form-horizontal row-border">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Simple Text Field</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Empty text field, required</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select, local array, custom display</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select, error while loading</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Combodate</label>
                                    <div class="col-sm-6">
                                        <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                                    <div class="col-sm-6">
                                        <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                                        </div>
                    </div>
            </div>

        </div> <!-- container -->

    </div> <!--wrap -->

</div> <!-- page-content -->

<?php include "footer.php" ?>