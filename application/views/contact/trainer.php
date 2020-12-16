<style>
    .container{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .student_detail{
        padding-left:50px;
        padding-right:50px;
        padding-top:100px;
    }
    .fa-check{
        color: green;
    }
    .fa-ban{
        color: red;
    }
</style>
<div class="container">
    <div>
    <div class="row">
            <br><br><br>
            <div class="row">
              <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                    <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered datatables" id="example">
                          <thead class="bg-primary">
                            <tr>
                              <th>Title</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Tel</th>
                              <th>Email</th>
                              <th>Division</th>
                              <th>-</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if($student_list != null){ foreach($student_list as $std){ ?>
                                <tr>
                              <td><?php echo $std->title ?></td>
                              <td><?php echo $std->fname ?></td>
                              <td><?php echo $std->lname ?></td>
                              <td><?php echo $std->tel ?></td>
                              <td><?php echo $std->email ?></td>
                              <td><?php echo $std->dv_name ?></td>
                              <?php echo "<td><a target = '_blank' href='".base_url()."contact/trainer_data/".$std->std_id."'>look</a></td>";  ?>
                            </tr>
                              <?php }}else{
                                  echo "No Data";
                              }  ?>
                           
                          </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
