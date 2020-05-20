<!--Start SESSION-->
<?php
require 'config.php';
session_start();
 
?>



<?php 

$lessonID = 12;
$queryViews = "SELECT *FROM views WHERE lessonID = '$lessonID' ";
$dataViews = mysqli_query($conn,$queryViews);
$resultViews = mysqli_fetch_assoc($dataViews);
				
$viewCount = $resultViews['views'];



echo $viewCount;


if( $viewCount == 0 )
{
  $sqlinsertView = "INSERT INTO views (lessonID, views) VALUES ($lessonID,1)";
  $conn->query($sqlinsertView);
}
else
{
  $viewCount = $viewCount + 1; 

  $sqlViewUpdate = "UPDATE  views SET  views = $viewCount  WHERE lessonID = $lessonID ";
  $conn->query($sqlViewUpdate);
}
  /*
  if($countViews == TRUE)
  {  

      $resultQueryView['view'] = $resultQueryView['view']+1; 
 
	
      echo $result['view'];

    $sqlViewUpdate = "UPDATE  views SET  views = $_SESSION[views]  WHERE lessonID = $lessonID ";
    $conn->query($sqlViewUpdate);
      
  }
  else
  {
    $sqlinsertView = "INSERT INTO views (lessonID, views) VALUES ($lessonID,1)";
    $conn->query($sqlinsertView);
   
  }
*/
?> 



<!--End of Start SESSION-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>අපේ ICT පංතිය | Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="images" href="images/logo.png">

    <!--For Notice icon-->
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/68eb695a6c.js" crossorigin="anonymous"></script>
    <!--End for Notice iCON-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!--Script for use fontawesome icons-->
    <script src="https://kit.fontawesome.com/68eb695a6c.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/commentBox.css">
    <link rel="stylesheet" href="css/loginform.css">
    <link rel="stylesheet" href="css/mobileDestop.css">
  </head>

  <body class="goto-here" oncontextmenu="return false;">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+94 77 621 0138</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">nuwanwijesurendra@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Join With US</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>



    
<!--************************************************************
                    nav bar
***********************************************************-->

  <?php include "navBar.php" ?>

<!--************************************************************
              End of nav bar
 ***********************************************************-->


    <!--Contact Us-->

   
    <div class="hero-wrap hero-bread" style="background-image: url('images/contactusbanner.jpg');">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
              <h1 class="mb-0 bread">Contact us</h1>
              
            </div>
          </div>
        </div>
      </div>
  
      <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                  <p><span>Address:</span> Colombo</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                  <p><span>Phone:</span> <a href="tel://+9470 4987077">+94 77 621 0138</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">NUWANWIJESURENDRA@GMAIL.COM</a></p>
                </div>
            </div>
         
          </div>
          <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form action="passDataMessages.php" method="POST" class="bg-white p-5 contact-form">

                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email">
                </div>
             
                <div class="form-group">
                  <textarea  name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>

                <div class="form-group">
                  <input type="submit" value="Send Message" style="border:2px solid green;" class="form-control" >
                </div>
                

              </form>
            
            </div>
  
            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </section>




 <!--************************************************************
                    Footer
    ***********************************************************-->
    <?php include "footer.php" ?>

<!--************************************************************
              End of Footer
 ***********************************************************-->
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


<script>
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}

</script>

            