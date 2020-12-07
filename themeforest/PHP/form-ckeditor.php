<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Form</li>
                <li class="active">WYSIWYG Editor</li>
            </ol>

            <h1>WYSIWYG Editor</h1>
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
            <div class="row">
                <div class="panel panel-magenta">
                    <div class="panel-heading">
                        <h4>CKEditor</h4>
                    </div>
                    <div class="panel-body collapse in">
                        <div class="col-12">
                            <textarea name="ckeditor" id="" cols="80" rows="20" class="ckeditor"></textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-magenta">
                    <div class="panel-heading">
                        <h4>Inline Editor</h4>
                    </div>
                    <div class="panel-body collapse in">
                        <div class="row">
                            <div class="col-md-12" contenteditable="true">
                                <h3>Inline Editor</h3>
                                <p>Make an editor out of anything! Just click anywhere and start editing!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, nobis laboriosam repellat ipsum deserunt voluptate eos praesentium atque eligendi libero. Nam, id, eligendi natus facilis ullam pariatur numquam amet illum repudiandae ex porro labore in perferendis vero nobis iure ratione? Repudiandae, vel, quo, dolores velit vero debitis sed non odio culpa quasi excepturi tempore saepe atque quod repellendus aliquam eum neque dolorem beatae veniam quis id deserunt dignissimos voluptatum incidunt necessitatibus inventore reprehenderit consequatur esse perferendis ipsum earum pariatur et eaque sequi a harum sit similique itaque dicta expedita unde. Animi, quo, facilis laudantium quas commodi aut harum reprehenderit explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->

    </div> <!--wrap -->

</div> <!-- page-content -->


<?php include "footer.php" ?>