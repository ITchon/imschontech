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
</style>
<div class="container">
    <div class="text-center">
        <?php 
        if(isset($student_detail)){
            if($student_detail != null){
                foreach($student_detail as $sd){
                    echo "First Name : "."<b>".$sd->fname."</b>";
            }
            }else{
                echo "No Data";
            }
        }else{
            echo "No Data";
        }

        ?>
        <form action="<?php echo base_url()?>Teacher/index" method="get">
            <input type="text" class="form-control" name="student_search">
        </form>
    </div>
            <div class="row">
                <h1>They are your student</h1>
              <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Default Tables</h4>
                        <div class="options">
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Title</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Gender</th>
                              <th>Tel</th>
                              <th>Email</th>
                              <th>Class_id</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($student_list as $std){ ?>
                                <tr>
                              <td><?php echo $std->std_id ?></td>
                              <td><?php echo $std->title ?></td>
                              <td><?php echo $std->fname ?></td>
                              <td><?php echo $std->lname ?></td>
                              <td><?php echo $std->gender ?></td>
                              <td><?php echo $std->tel ?></td>
                              <td><?php echo $std->email ?></td>
                              <td><?php echo $std->class_name ?></td>
                              <?php echo "<td><a href='".base_url()."Teacher/index/".$std->std_id."'>look</a></td>";  ?>
                            </tr>
                              <?php } ?>
                           
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
