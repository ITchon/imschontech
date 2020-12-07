<?php include "header.php" ?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>UI Elements</li>
                <li class="active">Components</li>
            </ol>

            <h1>Components</h1>
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
                <div class="col-xs-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4>Progress Bars</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>
                                    <h3>Default Progress Bars</h3>
                                    <p>Default progress bars are simple and css driven.</p>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-xs-12">
                                  <h3>Striped Progress Bars</h3>
                                    <p>Sriped Progress bars made with CSS3 gradients, just add the <code>progress-striped</code> class</p>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-xs-12">
                                  <h3>Animated Progressbars</h3>
                                    <p>Animated progressbars with CSS3, just add a class <code>active</code> with <code>progress-striped</code></p>
                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-info" style="width: 42%"></div>
                                    </div>
                                    <hr>
                                </div>
                                 <div class="col-xs-12">
                                    <h3>Stacking progressbars</h3>
                                    <p>You can stack one progressbar on top of another simply by including them all in the same <code>div.progress</code></p>
                                    <div class="progress">
                                          <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                                          <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                                          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-xs-12">
                                    <h3>Contextual Progressbars</h3>
                                    <p>Have thinner progress bars with details</p>
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">Painting New Room</div>
                                            <div class="progress-percentage">25%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">Setting up Devices</div>
                                            <div class="progress-percentage">70%</div>
                                        </div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <div class="contextual-progress">
                                        <div class="clearfix">
                                            <div class="progress-title">Fixing Old Furnitures</div>
                                            <div class="progress-percentage">3%</div>
                                        </div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-warning" style="width: 3%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                            <h4>Breadcrumbs</h4>
                      </div>
                      <div class="panel-body">
                        <p>Indicate the current page's location within a navigational hierarchy.</p>
                        <p>Just add <code>.breadcrumb</code> to any ordered or un-ordered list</p>
                            <div class="demo-example">
                                <ol class="breadcrumb">
                                  <li class="active"><a href="#">Home</a></li>
                                </ol>
                                <ol class="breadcrumb">
                                  <li><a href="#">Home</a></li>
                                  <li class="active">Library</li>
                                </ol>
                                <ol class="breadcrumb">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Library</a></li>
                                  <li>Data</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                      <div class="panel-heading"><h4>Pagination and Pager</h4></div>
                      <div class="panel-body">
                            <p>Provide pagination links for your site or app with the multi-page pagination component</p>
                            <h3>Default Pagination</h3>
                            <p>Simple, scable pagination by adding the <code>.pagination</code> class. You can also add <code>.disable</code> for unselectable links or <code>.active</code> to indicate current page</p>
                            <ul class="pagination">
                              <li class="disabled"><a href="#">&laquo;</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">&raquo;</a></li>
                            </ul>
                            <h4>Sizing</h4>
                            <p>Add smaller or larger pagination with the <code>.pagination-lg</code> or <code>.pagination-sm</code> class</p>
                            <div>
                                <ul class="pagination pagination-lg">
                                  <li class="disabled"><a href="#">&laquo;</a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination">
                                  <li class="disabled"><a href="#">&laquo;</a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination pagination-sm">
                                  <li class="disabled"><a href="#">&laquo;</a></li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                            <h3>Pager</h3>
                            <p>Quick previous and next links for simple pagination implementations with light markup and styles</p>
                            <p>Just add the class <code>.pager</code></p>
                            <ul class="pager">
                              <li><a href="#">Previous</a></li>
                              <li><a href="#">Next</a></li>
                            </ul>
                            <h4>Aligned Links</h4>
                            <p>Alternatively, you can align each link to the sides by adding the <code>.previous</code> and <code>.next</code> classes to the li</p>
                            <ul class="pager">
                              <li class="previous"><a href="#">&larr; Older</a></li>
                              <li class="next"><a href="#">Newer &rarr;</a></li>
                            </ul>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                      <div class="panel-heading">
                            <h4>Labels, Badges and Alerts</h4>
                      </div>
                      <div class="panel-body">
                        <h3>Labels</h3>
                        <p>Put the <code>.label</code> class and make your <code>span</code> stand out</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Example heading <span class="label label-default">New</span></h3>
                                <h4>Example heading <span class="label label-default">New</span></h4>
                                <h5>Example heading <span class="label label-default">New</span></h5>
                            </div>
                            <div class="col-md-6">
                                <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
                                <span class="label label-default">Default</span>
                                <span class="label label-primary">Primary</span>
                                <span class="label label-success">Success</span>
                                <span class="label label-info">Info</span>
                                <span class="label label-warning">Warning</span>
                                <span class="label label-danger">Danger</span>                                
                            </div>
                        </div>
                        <h3>Badges</h3>
                        <p>Easily highlight new or unread items with the <code>badge</code> class</p>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Add the <code>span class="badge"</code> to links, navs and more!</p>
                                <a href="#">Inbox <span class="badge">42</span></a>
                            </div>
                            <div class="col-md-6">
                                <p>When there are no new or unread items, badges will simply collapse (via CSS's :empty selector) provided no content exists within.</p>
                            </div>
                        </div>
                        <h3>Alerts</h3>
                        <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages</p>
                          <div class="alert alert-success">
                            <strong>Well done!</strong> You successfully read this important alert message.
                          </div>
                          <div class="alert alert-dismissable alert-info">
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          </div>
                          <div class="alert alert-dismissable alert-warning">
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          </div>
                          <div class="alert alert-dismissable alert-danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                      <div class="panel-heading">
                            <h4>List Groups</h4>
                      </div>
                      <div class="panel-body">
                            <p>List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic</h3>
                                    <p>The most basic list group is simply an unordered list with list items, and the proper classes.</p>
                                    <div class="panel panel-danger">
                                      <div class="panel-body">
                                        <ul class="list-group">
                                          <li class="list-group-item">Cras justo odio</li>
                                          <li class="list-group-item">Dapibus ac facilisis in</li>
                                          <li class="list-group-item active">Morbi leo risus</li>
                                          <li class="list-group-item">Porta ac consectetur ac</li>
                                          <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Badges</h3>
                                    <p>Add the badges component to any list group item and it will automatically be positioned on the right</p>
                                    <div class="panel panel-danger">
                                      <div class="panel-body">
                                        <ul class="list-group">
                                          <li class="list-group-item">Cras justo odio</li>
                                          <li class="list-group-item"><span class="badge">13</span>Dapibus ac facilisis in</li>
                                          <li class="list-group-item">Morbi leo risus</li>
                                          <li class="list-group-item"><span class="badge">7</span>Porta ac consectetur ac</li>
                                          <li class="list-group-item"><span class="badge">29</span>Vestibulum at eros</li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              </div>
                              <h3>Customize with nearly any HTML within!</h3>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="panel panel-primary">
                                    <div class="panel-body">
                                      <div class="list-group"> 
                                        <a href="#" class="list-group-item"><span class="badge">201</span> <i class="fa fa-envelope"></i> Inbox </a> 
                                        <a href="#" class="list-group-item"><span class="badge bg-info">5021</span> <i class="fa fa-eye"></i> Profile visits </a> 
                                        <a href="#" class="list-group-item"><span class="badge">14</span> <i class="fa fa-phone"></i> Call </a> 
                                        <a href="#" class="list-group-item"><span class="badge bg-inverse">20</span> <i class="fa fa-comments"></i> Messages </a> 
                                        <a href="#" class="list-group-item"><span class="badge">14</span> <i class="fa fa-bookmark"></i> Bookmarks </a> 
                                        <a href="#" class="list-group-item"><span class="badge bg-info">30</span> <i class="fa fa-bell"></i> Notifications </a> 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h4>Mailbox</h4>
                                    </div>
                                    <div class="panel-body">
                                      <div class="list-group"> 
                                        <a href="#" class="list-group-item"><span class="badge bg-success">230</span> <i class="fa fa-inbox"></i> Inbox (5) </a> 
                                        <a href="#" class="list-group-item"><span class="badge">50</span> <i class="fa fa-check"></i> Sent mail </a> 
                                        <a href="#" class="list-group-item"><span class="badge">5</span> <i class="fa fa-edit-sign"></i> Draft </a> 
                                        <a href="#" class="list-group-item"><span class="badge">20</span> <i class="fa fa-star"></i> Starred </a> 
                                        <a href="#" class="list-group-item"><span class="badge">15</span> <i class="fa fa-trash"></i> Trash </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>