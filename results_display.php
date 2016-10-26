
<?php
session_start();
$looking_for=$_SESSION['key_val'];

?>

<?php

 if (isset($_POST['submit_mes']))
  { 
      $_SESSION['key_val'] = $_POST['keyword'];
  }
  $looking_for=$_SESSION['key_val'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>FindNearby</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/4ade0e5ef1.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmFqQa3GmRdYRtITKJnv3qF3-tsL5H2A&v=3.exp&sensor=false&libraries=places"></script>
  <script type="text/javascript">
               function initialize() {
                       var input = document.getElementById('diff_address');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
       </script>

  <style type="text/css">
    

     .navbar
     {    
      background-color: #121212;
      padding-right: 50px;
      padding-left: 50px;
      padding-bottom: 30px;
      padding-top:30px;
      color:green;
      height: 100px;
      text-align: center;
      font-family: 'Carter One', cursive;
      font-size: 20px;

     }

     .active
     {
      background-color: green;
     } 

     footer
    {
      background-color: #121212;
      position:relative;
      padding: 10px;           
      height:50px;
      color: white;
      position: relative;
      right: 0;
      bottom: 0;
      left: 0;
    }

        .fixedContainer
     {    
    position: fixed;    
    margin-left: 10px;    
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
      <a class="navbar-brand" href="index.php">FindNearby</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">           
        <li>
            <!--<span role="form"  method="POST" action="results_display.php">                 
                  <input type="text" class="form-control" name="diff_location" id="diff_address" placeholder="Enter a different address.."  />
            </span> 
            -->
            <form role="search" class="navbar-form navbar-left" method="POST" action="results_display.php">
                <div class="form-group" >
                    <input type="text" id="diff_address" name="location"  placeholder="change location.." class="form-control">
                </div>

                
            </form>

            
            
         </li>   

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
            */
        //echo $looking_for;
        

        if (isset($_POST['submit_mes'])||($_POST['location'])) 
              {

                if($_POST['location']==" " )
                    {
                      echo " Enter the address above...";

                    }//not working....why?


              //$location_length = strlen($_POST['location'])  ;

              //$addr=str_replace(" ","+",$_POST['location']);

              //done to replace empty spaces by '+' sign as google api requires it.
              $addr=urlencode($_POST['location']);
              
              $location_url="https://maps.googleapis.com/maps/api/geocode/json?address=".$addr;
              //echo '<br><br><br>'.$location_url;

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

              echo "<br>
                     <div class='container-fluid' style='font-family:'Marcellus',serif;'>
                        <b><i>We are showing results for this location(".$_POST['location'].")</b></i>
                     </div>";
                      
              echo "<br><br>";
          
              /*-----to be put inside function--------
              $link ="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$lat.','.$lng.'&radius=500&type=doctor&key=AIzaSyDtRVL608rSdYKjmMIlgRNwRgkqDU0zhi0 ';    
              */  
              
              $link ="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$lat.','.$lng.'&radius=500&type='.$looking_for. '&key=AIzaSyDtRVL608rSdYKjmMIlgRNwRgkqDU0zhi0 ';      

                  

              //$link= place_type_decide($lat,$lng);  //place_type_decide is a user-defined function ....defined below.
                      
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
               for($i=0;$i<25;$i++)
               {
                  if(!isset($obj["results"][$i]["name"]))
                  {
                    echo "<b>We were able to show only these many results.</b><br><br><br><br>";
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
                          <div class="container-fluid">
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

      <div class="col-md-6 " id="map" style="position:relative">
                                        <?php 
                                        
                                            echo '
                                                    
                                                      <div class="fixedContainer">
                                                      <iframe 
                                                        width="630"
                                                        height="460"                                                        
                                                        frameborder="0" style="border:0"
                                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnPd6rDXQ8pUSBOkvy5TCI5PCDUFQXTdk
                                                          &q='.$_POST['location'].'" allowfullscreen>

                                                      </iframe></div>';

                                                        


                                            

                                         ?>
                                </div>      

  </div>



<footer style="position:fixed">
  <div class="row">
    <div class="col-sm-6">                  
        <a href="https://github.com/nileshprasad137/find_nearby">&nbsp;<span class="fa fa-github" style="font-size:25px;color:white;"></span>&nbsp;&nbsp;<b>Fork Me on GitHub</a> </b>  
    </div>


     <div class="col-sm-6 "  > 
        <b >&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;prasadnilesh96@gmail.com</p></i></b>     
     </div> 
        
</footer>




 


</body>
</html>