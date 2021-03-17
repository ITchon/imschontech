<script type="text/javascript">
 $(document).ready(function() {

    $(document).on('click', '.delete', function() {
				var r =  $('#modal-up').modal();
				var id = $(this).val();
				$(document).on('click', '.con', function() {
					// alert(id);
					// if(id == true){

					// }
  			      window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/delete/"+id;
				
				})
  	})
 });
 
            
</script>
<script type="text/javascript">
 $(document).ready(function() {

    $(document).on('click', '.sj_delete', function() {
				var r =  $('#modal-up').modal();
				var id = $(this).val();
				$(document).on('click', '.con', function() {
					// alert(id);
					// if(id == true){

					// }
  			      window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/sj_delete/"+id;
				
				})
  	})
 });
 
            
</script>
