<!DOCTYPE html>
<html lang="en">
<head>
  <title>FindNearby</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <script src="https://use.fontawesome.com/4ade0e5ef1.js"></script>
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
    font-family: 'Luckiest Guy', cursive;
    font-size: 20px;
      


     }

     .active{
      background-color: green;
     } 

     footer
    {
      margin-top: 100px;
      background-color: #121212;
      position:relative;
      padding: 25px;           
      height:150px;
      color: white;
      position: relative;
      right: 0;
      bottom: 0;
      left: 0;
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
    <h1 style="color:white; font-family:'Bungee Inline', cursive; margin-top:100px;">Find Nearby</h1> <hr>     
    <p style="color:white; font-family:'Architects Daughter', cursive;">Smart way to manage places around you </p>
  </div>
</div>


<div class="container-fluid text-center" style="background-color:#A7C2E2; ">
  <div id="brief">
  <h2 style="text-align: center; color:#080C17;font-family: 'Quantico', sans-serif;  ";>Choose what to find nearby..</h2>
  <p style="font-size: 18px; ">
    
  </p>  
  </div>
</div>


 <div class="container" style="margin-top:50px;">
        <!-- form begins-->
        <form role="form"  method="POST" action="results_display.php">
          
          <div class="form-group" >
            <input type="text" class="form-control" name="location" placeholder="Enter the district or city name" style="align:center"/>                                       
          </div>
          
          <div class="form-group">
            <select class="form-control" name="keyword">                                                
              <option value="fire_station" >Fire Station</option><!--1-->
              <option value="doctor" >Doctor</a></option><!--2-->
              <option value="hospital" >Hospital</option><!--3-->
              <option value="atm" >ATM</option><!--4-->
              <option value="park" >Park</option><!--5-->
              <option value="police" >Police Station</option><!--6-->                    
              <option value="restaurant" >Restaurant</option><!--7-->
              <option value="shopping_mall" >Shopping Mall</option><!--8-->
              <option value="amusement_park" >Amusement Park</option><!--9-->
              <option value="bank" >Bank</option><!--10-->
              <option value="movie_theater" >Movie Theater</option><!--11-->
              <option value="clothing_store" >Clothing Store</option><!--12-->
              <option value="department_store" >Department Store</option><!--13-->
              <option value="electronics_store" >Electronics Store</option><!--14-->
              <option value="gas_station" >Gas Station</option><!--15-->
              <option value="taxi_stand" >Taxi Stand</option><!--16-->
              <option value="pharmacy" >Pharmacy</option><!--17-->
              
            </select> 
 
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="submit_mes" value="submit" class="btn btn-lg btn-success btn-block"><hr>
          </div>

        </form>
        <!-- end form-->
 </div>      
      

<footer class="container-fluid">
  <div class="row">
    <div class="col-sm-6">   
       <ul class="links" >        
        <a href="https://github.com/nileshprasad137/find_nearby"><span class="fa fa-github" style="font-size:75px;"></span><b>Fork me on GitHub</a></b></li>        
      </ul>
    </div>


     <div class="col-sm-6"> 
        <p style="text-align:right"><b><i>Contact Me:<br>prasadnilesh96@gmail.com</p></i></b><hr>
          
        <p style="text-align:right"><b><i>Copyright &copy NILESH PRASAD</p></i></b> 
     </div>      
</footer>

</body>
</html>