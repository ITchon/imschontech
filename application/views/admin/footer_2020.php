<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable({
     "paging": true,
     "lengthChange": true,
     "searching": true,
     "ordering": true,
     "info": true,
     "autoWidth": false,
     "responsive": true,
        
      "oLanguage": {
                   "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด / หน้า",
                   "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                   "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                   "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                   "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                   "sSearch": "ค้นหา : ",
                   "sSearchPlaceholder" : ". . . "
                 },
        dom: 'Bfrtip',
                buttons: [
                   'excel', 'pdf', 'print'
                ]

   });
} );

</script>

<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js'></script> 
 <script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/enquire.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/plugins/sparklines/jquery.sparklines.min.js'></script> 

<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/js/application.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>/assets/demo/demo.js'></script> 

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 

        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script> 
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> 


</body>
</html>

