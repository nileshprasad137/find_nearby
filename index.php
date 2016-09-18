<!DOCTYPE html>
<html lang="en">
<head>
  <title>FindNearby</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style type="text/css">

    .jumbotron 
    {
             
      /*margin-top: 50px;*/
      color: black;
      background: url("jumbotron_img/map2.jpg") no-repeat center center;       
     -webkit-background-size: 100% 100%;
     -moz-background-size: 100% 100%;
     -o-background-size: 100% 100%;
      background-size: 100% 100%;

     }

     .navbar{
    background-color: transparent;
    border-style: none;    
    color:green;
    height: 50px;
    text-align: center;
    font-family: sans-serif;
    font-size: 20px;
      


     }

     .active{
      background-color: green;
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
        <li class="active "><a href="#">Home</a></li>
   
        <li><a href="#"><span class="glyphicon glyphicon-search" ></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active "><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li class="active "><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li class="active "><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
            

      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container-fluid text-center" style="height: 470px; ">
    <h1 style="color:white; font-family:serif; margin-top:100px;">Find Nearby</h1>      
    <p style="color:white; font-family:Helvetica Neue;">Smart way to manage places around you </p>
  </div>
</div>


<div class="container-fluid text-center" style="background-color: #CFEDC9">
  <div id="brief">
  <h2 style="text-align: center; color:green ;  ";>Choose what to find nearby..</h2>
  <p style="font-size: 18px; ">
    
  </p>  
  </div>
</div>

<!--
<div class="container">    
  <div class="row" style="margin-top:30px">

    <div class="col-sm-4">

        <div class="card card-inverse">
          <img class="card-img" class="img-responsive" style="width:100%; height:150px " src="places_icons/hospital.png" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Hospital</h4>
            
          </div>
        </div>
    </div>
    <div class="col-sm-4">

        <div class="card card-inverse">
          <img class="card-img" class="img-responsive" style="width:100%; height:150px " src="places_icons/hospital.png" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Hospital</h4>            
          </div>
        </div>
    </div>
    <div class="col-sm-4">

        <div class="card card-inverse">
          <img class="card-img" class="img-responsive" style="width:100%; height:150px " src="places_icons/hospital.png" alt="Card image">          
          <div class="card-img-overlay">
            <h4 class="card-title">Hospital</h4>
            
          </div>
        </div>
    </div>



  </div>
</div>

-->


<div class="container" style="margin-top:50px;";>    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-success" >
        <div class="panel-heading" style="text-align:center; font-weight:bold">Hospital</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading" style="text-align:center; font-weight:bold">FireStation</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Zoo</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
  </div>
</div><br>


<div class="container" style="margin-top:50px;";>    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-success" >
        <div class="panel-heading" style="text-align:center; font-weight:bold">Furniture Store</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading" style="text-align:center; font-weight:bold">School</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Shopping Mall</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
  </div>
</div><br>


<div class="container" style="margin-top:50px;";>    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-success" >
        <div class="panel-heading" style="text-align:center; font-weight:bold">Taxi-Stand</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading" style="text-align:center; font-weight:bold">University</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Gym</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
  </div>
</div><br>



<div class="container" style="margin-top:50px;";>    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-success" >
        <div class="panel-heading" style="text-align:center; font-weight:bold">Restaurant</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Department-Store</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Pharmacy</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
  </div>
</div><br>


<div class="container" style="margin-top:50px;";>    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-success" >
        <div class="panel-heading" style="text-align:center; font-weight:bold">Restaurant</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Department-Store</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align:center; font-weight:bold">Pharmacy</div>
        <div class="panel-body"><img src="places_icons/hospital.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-success btn-block">SEARCH!</a></div>
      </div>
    </div>
  </div>
</div><br>







</body>
</html>