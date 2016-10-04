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
  <script src="https://use.fontawesome.com/4ade0e5ef1.js"></script>
  <style type="text/css">
    

     .navbar
     {    
      background-color: green;
      padding-right: 50px;
      padding-left: 50px;
      padding-bottom: 30px;
      padding-top:30px;
      color:green;
      height: 100px;
      text-align: center;
      font-family: sans-serif;
      font-size: 20px;

     }

     .active
     {
      background-color: green;
     } 

     footer {
      background-color:#B8DD98;

      padding: 25px;
      margin-top:50px;       
      height:150px;
      


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
        <li class="active"><a href="index.php">FindNearby</a></li>
   
        <li><a href="#"><span class="glyphicon glyphicon-search" ></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li  ><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
            

      </ul>
    </div>
  </div>
</nav>



    <div class="container row" id="results" style="margin-top:120px;">

      <div class="col-md-6" >
      <?php

        /*if($_POST['location']==" " )
        {
        echo " Enter the address above...";
        }
            */if (isset($_POST['submit_mes'])) 
              {

                if($_POST['location']==" " )
                    {
                      echo " Enter the address above...";
                    }//not working....why?


              //$location_length = strlen($_POST['location'])  ;
              $addr=str_replace(" ","+",$_POST['location']);
              //done to replace empty spaces by '+' sign as google api requires it.
              
              $location_url="https://maps.googleapis.com/maps/api/geocode/json?address=".$addr;

              //https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=500&type=restaurant&name=cruise&key=YOUR_API_KEY

              $loc_cont = file_get_contents($location_url);
              $loc_obj = json_decode($loc_cont,true);          

              $lat=$loc_obj["results"][0]["geometry"]["location"]["lat"];
              /*
              if(!isset($lat))
                  {
                    echo "We were not able identify this location. ";
                    
                  }
              */
              $lng=$loc_obj["results"][0]["geometry"]["location"]["lng"];
              /*if(!isset($lng))
                  {
                    echo "We were not able identify this location. ";
                    
                  }
              */

              $formal_location=$loc_obj["results"][0]["formatted_address"];
              echo "<br><br><b>We are showing results for this location(".$formal_location.")<br><i>Were you looking for the same?</i><br>";
              echo "<br><br>";
          
              $link ="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$lat.','.$lng.'&radius=500&type=doctor&key=AIzaSyDtRVL608rSdYKjmMIlgRNwRgkqDU0zhi0 ';              
                      
              $cont = file_get_contents($link);
              $obj = json_decode($cont,true);
              
              /*
              $doctor=$obj["results"][0]["name"];
              $doctor_address=$obj["results"][0]["vicinity"];
              echo $doctor;
              echo "<br>";
              echo $doctor_address;
              */
              /*$doctor=$obj["results"];

              foreach ($obj["results"] as $key )
               {
                        # code...
                  echo $key->name;
                  echo "<br>";
                  echo $key->vicinity;

               }
               */
               for($i=0;$i<15;$i++)
               {
                  if(!isset($obj["results"][$i]["name"]))
                  {
                    echo "<b>We were able to show only these many results.";
                    break;
                  }
                  else
                  {
                   /* echo $obj["results"][$i]["name"];
                    echo "<br>";
                    echo $obj["results"][$i]["vicinity"];
                    echo "<br><br>";
                    */
                    
                   
                          echo '
                          <div class="container">
                              <div class="jumbotron3" style="background-color:#9CDEBA;font-size:20px;margin-left:20px;padding-left:20px;padding-top:25px;padding-bottom:25px;">
                                  <b>'.$obj["results"][$i]["name"].
                              '</div><br><br>';
                          echo '<ul type="square" >
                                 <li><b><i>Address:'.$obj["results"][$i]["vicinity"].
                                 '</i></ul><br><hr></div>';

                          
                  }  


               }
               
             }
       
      ?>      
        
      </div>

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
          
        <p style="text-align:right"><b><i>Copyright &copy NILESH PRASAD</p></i></b> <hr>
     </div>      
</footer>

</body>
</html>