
<?php
require 'config.php';
session_start();
$userID = $_SESSION['userName'];
if(!isset($_SESSION['userName'])) {
    header("location: login.php");
} else if (strpos($userID, 'student') !== false) {
    header("location: index.php");
} 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>අපේ  ICT  පංතිය | ADMIN </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="images" href="images/logo.png">

    <!--css for notification and message-->
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/68eb695a6c.js" crossorigin="anonymous"></script>
    <!--End of css for notification and message-->


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

    <link rel="stylesheet" href="css/notes.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/mobileDestop.css">

  </head>
  <body class="goto-here">
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
                    nav bar Admin
***********************************************************-->

<?php include "navBarAdmin.php" ?>

<!--************************************************************
              End of nav bar Admin
 ***********************************************************-->

	


   <!--Mobile View Banner-->
  <div class="MobileViewBanner">
    <div class="hero-wrap hero-bread" style="background-image: url('images/banner1Mobile.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <br><br><br>
          </div>
        </div>
      </div>
  </div>
</div>
  <!--Destop VIEW banner-->
  
  <div class="DestopViewBanner">
  
  <div class="hero-wrap hero-bread" style="background-image: url('images/banner1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <br><br>
          </div>
        </div>
      </div>
	</div>
  
</div>



	
<br>
<center><h1>ADMIN PANEL<h1></center>
<br><br><hr>

<?php

   
   include "config.php";

    $rowID = $_GET['rowID'];
    $query = "SELECT *FROM adminaccess WHERE rowID = '$rowID' ";
	$data = mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($data);
	



?>
  

<!-- Insert Papers-->

   <div class="formAdminUpload">

   <h3 class="text-center">Edit Lesson Details</h3>
  <form action="updateDataTeacherACC.php" method="post" onsubmit = "return(validate());">


    <input type="hidden" id="teacherID" name="rowID" value="<?php echo $result['rowID']; ?>" required>
    
    <label for="Password">Password</label>
    <input type="text" id="Password" name="Password" value="<?php echo $result['Password']; ?>" required>

  
    <input type="submit"   value="Update">
  </form>
</div>




                        
        <!--End of From Grid-->

        <script type = "text/javascript">
  
      // Form validation code will come here.
      function validate() {

       var  x = document.getElementById("Grade").value;
      
         if( x == "10" || x == "11" || x == "12" || x == "13" ) {
          return true;
         }
         else{
          alert( "Please provide value between 10 and 13 For Grade" );
            return false;
         }
        
        
      }
   //-->
</script>




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