<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar
    {
    background-color: #323612;
    border-style: none;    
    /*color:green;*/
    height: 50px;
    text-align: center;
    font-family: sans-serif;
    font-size: 20px;   
   }
     .active
     {
      background-color: green;
     }
     body
     {
        background-color: #D6EBC2;

     }    
    
  </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">FindNearby</a></li>
   
        <li><a href="#"><span class="glyphicon glyphicon-search" ></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active "><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li ><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li ><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
            

      </ul>
    </div>
  </div>
</nav>


<div class="container" style="margin-top:70px">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="signup_script.php" method="post" role="form">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label for="f_name">First Name</label>
								<input type="text" placeholder="Enter First Name Here.."  name="f_name" id="f_name" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label for="l_name">Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." name="l_name" id="l_name" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label for="user_address">Address</label>
							<textarea placeholder="Enter Address Here.." id="user_address" name="user_address" rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label for="user_city">City</label>
								<input type="text" id="user_city" name="user_city" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label for="user_state">State</label>
								<input type="text" id="user_state" name="user_state" placeholder="Enter State Name Here.." class="form-control">
							</div>	
								
						</div>
												
					<div class="form-group">
						<label for="mobile">Contact Number</label>
						<input type="number" name="mobile" id="mobile" placeholder="Enter Mobile Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label for="e_id">Email Address</label>
						<input type="text" name="e_id" id="e_id" placeholder="Enter Email Address Here.." class="form-control">
					</div>	

          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Decide your password...." class="form-control">
          </div>  
					
					<!--<button type="button" class="btn btn-lg btn-info">Submit</button>	-->

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="SUBMIT_MESSAGE" value="SUBMIT" class="btn btn-lg btn-success btn-block">
          </div>	


					</div>
				</form> 
				</div>
	</div>
</div>

</body>
</html>