<div id='wrap'>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            
<?php 
if($result != null){ ?>
<?php foreach($result as $r){?>
    <div class="col-sm-4">
        <img src="<?php echo base_url()."uploads/$r->img_code"?>"  alt="" class="pull-left img-responsive">
        </div>
    <?php } 
}else{ ?>
                <p class="text-center">
                    <span class="text-danger" style="font-size:4em;">No Image!</span>
                </p>
<?php }
?>
<!-- <div class="col-sm-12"></div>
<span class="text-danger" style="font-size:2em;">OR</span> -->

        </div>
    </div>
    </div>
</div> <!-- container -->
</div> <!--wrap -->