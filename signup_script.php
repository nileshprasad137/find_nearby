
<?php
//start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) // name of the button 
{
// checking the submitted text box for null value by giving there name.
  if($_REQUEST['f_name']=="" || $_REQUEST['l_name']==""||$_REQUEST['user_address']==""||$_REQUEST['user_city']==""||$_REQUEST['user_state']==""||$_REQUEST['mobile']==""||$_REQUEST['e_id']==""||$_REQUEST['pass']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
  }



  else
  {
      
      $fir_name=$_POST['f_name'];
      $last_name=$_POST['l_name'];
      $u_add=$_POST['user_address'];
      $u_city=$_POST['user_city'];
      $u_state=$_POST['user_state'];
      $u_mobile=$_POST['mobile'];
      $u_eid=$_POST['e_id'];
      $u_password=$_POST['pass'];
      $sql = "INSERT INTO sys_users (firstname,lastname,contact_no,email,address,password,city,state) VALUES ('$fir_name','$last_name','$u_mobile','$u_eid','$u_add','$u_password','$u_city','$u_state')";
      $insert = $mysqli->query($sql);
  
       // Print response from MySQL
        if ( $insert ) 
        {
            echo "<br><br><br><br<br><br>CONGRATULATIONS ! YOU ARE A NEW MEMBER OF OUR COMMUNITY....<br>YOU CAN NOW LOGIN . ";
            

        } 
        else 
        {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }
  
  // Close our connection
  $mysqli->close();
  }
} 
?>