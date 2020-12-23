
<!DOCTYPE html>
<html>
<head>
    <title>Jquery FullCalendar Integration with Codeigniter using Ajax</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/calendar/plugins/fullcalendar/fullcalendar.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/calendar/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dropzone.min.js"></script>
    <style>
.fc-day:hover{
    background: #bed7f3;

}

/*Allow pointer-events through*/
.fc-slats, /*horizontals*/
.fc-content-skeleton, /*day numbers*/
.fc-bgevent-skeleton /*events container*/{
    pointer-events:none
}

/*Turn pointer events back on*/
.fc-bgevent,
.fc-event-container{
    pointer-events:auto; /*events*/
}

    </style>
    <script>
    $(document).ready(function(){
        var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

        var calendar = $('#calendar').fullCalendar({
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay',
             
            },
            timeFormat: 'HH:mm',
            slotLabelFormat:'HH:mm',
            minTime:'00:00',
            maxTime:'24:00',
            timezone: 'Asia/Bangkok',
            selectable:false,
            allDaySlot: false,
            eventTextColor: '#FFFFFF',
            nextDayThreshold : "24:00:00",
            displayEventTime: true,
			displayEventEnd:false,
            editable:true,
 
            events:"<?php echo base_url(); ?>fullcalendar/load",
                    eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },


        dayClick:function(date, jsEvent, view)
            {   
            //  $(this).css('background-color', '#bed7f3'); 
                
            var datetime = $.fullCalendar.formatDate(date, "Y-MM-DD HH:mm:ss");
            var date = datetime.slice(0, 10);
            var time = datetime.slice(11, 20);
            document.getElementById("start_date").value = date;
            document.getElementById("start_time").value = time;
                  $('#addModal').modal();
           
         
            },
          
            // eventResize:function(event)
            // {
            //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

            //     var title = event.title;

       
            //     var id = event.id;

            //     $.ajax({
            //         url:"<?php echo base_url(); ?>fullcalendar/update",
            //         type:"POST",
            //         data:{title:title, start:start, end:end, id:id},
            //         success:function()
            //         {
            //             calendar.fullCalendar('refetchEvents');
                       
            //         }
            //     }) 
           
                
            // },
            
  
         

            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                // alert(start);
                // var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                // alert(end);
                var id = event.id;

                    $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{ start:start, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');

                    }
                })
           
            
            },

            eventClick:function(event)
            {

              var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
             var str = start; 
            var time = str.slice(11, 20);
            var start = str.slice(0, 10);

                $('#name').val(event.title);
                $('#description').val(event.description);
                $('#color').val(event.color);
                $('#edit_start_time').val((time));
                $('#edit_start_date').val((start));
                $('#event_id').val(event.id);
                $('#editModal').modal();
            }

            
        });
         $('#insert').on("click", function () {
        myDropzone.processQueue();
        var data = $('#form').serialize();
            $.ajax({
            url:"<?php echo base_url(); ?>fullcalendar/insert",
                    type:"POST",
                     data: data,
                    success:function(res)
                    {           
                      insert_issue(res);
                        calendar.fullCalendar('refetchEvents');
                        $('#addModal').modal('hide');
                    }
                  
            });
          
    });

    $('#editsave').on("click",function () {
        var data = $('#form2').serialize();
        start = $("#edit_start_date").val();
        end = $("#edit_end_date").val();
        start_time = $("#edit_start_time").val();
        end_time = $("#edit_end_time").val();

            $.ajax({
            url:"<?php echo base_url(); ?>fullcalendar/edit_event",
                    type:"POST",
                    data: data,
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        $('#editModal').modal('hide');
                    }
            });
          
    });

    $('#delete').on("click", function () {
             var data = $('#form2').serialize();
            $.ajax({
            url:"<?php echo base_url(); ?>fullcalendar/delete",
                    type:"POST",
                    data: data,
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        $('#editModal').modal('hide');
                    }
            });
    });
    
    $('#seeimg').on("click", function () {
      var event_id = $("#event_id").val();
            $.ajax({
            url:"<?php echo base_url(); ?>fullcalendar/seeimg",
                    type:"POST",
                    data: {event_id:event_id},
                    success:function(data)
                    {
                      $('#img_data').html(data);
                      $('#modal_img').modal();
                    }
            });
    });
    });
        


    
    </script>
</head>
    <div class="row">
         <div class="col-xs-12" >
                <div class="panel panel-midnightblue calendar" >
                    <div class="panel-heading">

                        <h4><i class="fa fa-calendar"></i> Calendar</h4>
                        <div class="options">
                            
                        </div>
                    </div>
                    <div class="panel-body" >
                        <!-- <div class="alert alert-info">Click on a date to create an event, drag &amp; drop to move events or extend time ranges</div> -->
                        <div id='calendar'></div>
                    </div>
                </div>
        </div>
    </div>
<div id="modalSignUpSm" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h4 class="modal-title">Sign up with your email address</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="control-label">Email address</label>
                <input class="form-control" type="email" name="email">
              </div>
              <div class="form-group">
                <label class="control-label">Username</label>
                <input class="form-control" type="text" name="username">
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control" type="password" name="password">
              </div>
              <button class="btn btn-success btn-block btn-next" type="button">Create an account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">ADD EVENT</h4>
      </div>
      <div class="modal-body">

     <form name="form" id="form" class='form' method="post" enctype="multipart/form-data">
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="title" value=""><br>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">

                    <textarea name="description" id="" class="form-control" cols="20" rows="3"></textarea><br>
                </div>
        </div>
        <div class="form-group">
        <label for="p-in" class="col-md-4 label-heading">Color</label>
                <div class="col-md-8 ui-front">
                    <input type="color" class="form-control" name="color" value="#0071c5"><br>
                </div>              
        </div>

       
        <div class="form-group">
                <label for="p-in" class="col-md-4 col-xs-3 label-heading">Start Date</label>
                <div class="col-md-4 col-xs-5">
                    <input type="date" readonly class="form-control" name="start_day" id="start_date" required>
                </div>
                <div class="col-md-4 col-xs-4">
                    <input type="time" class="form-control" name="start_time" id="start_time" required><br>
                </div>
        </div>

        <div class="form-group">
                <label for="p-in" class="col-md-4 col-xs-3 label-heading">Image</label>
                <div class="col-md-12 col-xs-5">
                                  
       <div class='content'>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class=""><b> Attach file</b></label>
                        </div>
                      </div>
                      <div id="file" class="dropzone" name="file" action="<?= base_url()?>">
                      
      <div class="dz-message">
      <div class="fallback">
    </div>
        <h3>Drop files here</h3> or <strong>click</strong> to upload
      </div>
    </div>
                      
    </div> 
                </div>

        </div>

      </div>
      
 
            <div class="modal-footer" >
                <input type="button" class="btn btn-primary" style="margin-top:20px" id="insert" value="Add Event">
              <button type="button" class="btn btn-default" style="margin-top:20px" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
    
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
      </div>


      <form name="form2" id="form2" class='form2' method="post">
      <div class="modal-body">
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Title</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="title" value="" id="name"><br>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                <textarea name="description" id="description" class="form-control" cols="20" rows="3"></textarea><br>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Color</label>
                <div class="col-md-8 ui-front">
                    <input type="color" class="form-control" name="color" id="color"><br>
                </div>
        </div>
        <div class="form-group">
              <label for="p-in" class="col-md-4 col-xs-3 label-heading">Start Date</label>
                <div class="col-md-4 col-xs-5">
                    <input type="date" readonly class="form-control" name="start_day" id="edit_start_date" required>
                </div>
                <div class="col-md-4 col-xs-4">
                    <input type="time" class="form-control" name="start_time" id="edit_start_time" required><br>
                </div>
        </div>
    
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
      <div class="col-md-12">
        <button type="button" id="seeimg" name="seeimg" class="btn btn-success">SeeImg</button>
        <button type="button" id="delete" name="delete" class="btn btn-danger">Delete</button>
        <input type="button" class="btn btn-primary" value="Update Event" id="editsave">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</button>
</div>
</div>
</div>
</div>
<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone(".dropzone", {
      acceptedFiles: ".jpeg,.jpg,.png",
      autoProcessQueue: false,
      url: "<?php echo site_url("fullcalendar/upload") ?>",
      addRemoveLinks: true,
      parallelUploads: 10,
      success: function( file, response ){
        //  obj = JSON.parse(response);
        //  alert(obj.filename); // <---- here is your filename
    },

    });
    
  
  </script>
     <script type="text/javascript">
    function insert_issue(data) {
      var index;
      var array=[];
    for (index = 0; index < myDropzone.files.length; ++index) {
        array.push(myDropzone.files[index].name);
    };
        $.ajax({
        url: "<?php echo site_url("fullcalendar/insert_img") ?>",
        type : 'POST',
        dataType : "html",
        data : {
          'file':array,
          'id':data
        },
        success : function(data) {   
          console.log(data);
        }
    });
  };
</script>
<!-- 
  <script type="text/javascript">
    function save_img(data) {
        $.ajax({
        url: "<?php echo site_url("issue/save_img") ?>",
        type : 'POST',
        data : {
          'file':data
        },
        success : function(response) {   
        }
    });
  };
</script> -->
