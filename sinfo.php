<?php
include "header.php";
include'connect.php'; 
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
    //$sql = "select user_id,username, address, created_at, modified_at from tb_users";
    $sql = "select * from sreg";
    
    $result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
echo "<table class='table table-bordered'>";
 echo "<tr>";
 echo "<th>"; echo "Firstname";  echo "</th>";
 echo "<th>"; echo "Laststname";  echo "</th>";
 echo "<th>"; echo "Username";  echo "</th>";
 echo "<th>"; echo "Email";  echo "</th>";
 echo "<th>"; echo "Contact";  echo "</th>";
 echo "<th>"; echo "Sem";  echo "</th>";
 echo"<th>"; echo "Enrollment";  echo "</th>";
 echo"<th>"; echo"Status";  echo"</th>";
 echo"<th>"; echo "Approve";  echo "</th>";
echo"</tr>";
    //$a=mysqli_fetch_array($result);
    //echo $result["username"];
    if(mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))   
            {
  //echo $row["username"];
  
  
  ?>
  
  <tr>
    <td><?php echo $row['fname'] ?></td>
    <td><?php echo $row['lname'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['contact'] ?></td>
    <td><?php echo $row['sem'] ?></td>
    <td><?php echo $row['enrollment'] ?></td>
    <td><?php echo $row['status'] ?></td>
    <td> 
        <a href="approve.php ? id= <?php echo $row['id'] ?> ">Yes</a>
        <a href="napprove.php ? id= <?php echo $row['id'] ?> ">No</a>
    </td>

    
  </tr>
  <?php

            
            }
        }

?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "footer.php";

?>
        