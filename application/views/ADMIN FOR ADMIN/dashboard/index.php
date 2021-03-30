
<div id="page-content">
    <div id='wrap'>
      
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-alizarin" href="#">
                        <div class="tiles-heading">
                               <span style="font-size:18px">จำนวนนักเรียนที่กำลังออกฝึกงาน</span> 
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"></div>
                            <div class="pull-right"><?php echo $total ?><div id="indexinfocomments" style="margin-top: 10px; margin-bottom: -10px;"></div></div>
                        </div>
                    </a>
                </div>
               

                
            </div>
            <div class="col-md-12">
        <div class="panel panel-green">
            <div class="panel-heading"><h4>Carousel</h4></div>
            <div class="panel-body">

      <div id="carousel-example-captions" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url()."uploads/114.png" ?>" alt="River">
                <div class="carousel-caption">
                    <h3 style="color:#34495e">ยินดีต้อนรับ <?php echo $this->session->userdata('username') ?></h3>
                </div>
            </div>
            <div class="item">
              <img src="assets/demo/images/ind_demolition.jpg" alt="Demolition">
              <div class="carousel-caption">
                <h3>First slide label</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
          <div class="item ">
            <img src="assets/demo/images/arch_fountain.jpg" alt="Fountain">
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="fa fa-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="fa fa-next"></span>
        </a>
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


    