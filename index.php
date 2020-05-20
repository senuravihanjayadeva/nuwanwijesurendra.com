<!--Start Session-->

<?php
require 'config.php';
session_start();
$userID = $_SESSION['userName'];
if(!isset($_SESSION['userName'])) {
    header("location: login");
} 
?>
<!--End of Start Session-->



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>අපේ ICT පංතිය | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--ICON on the browser tab-->
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
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!--CSS for changing mobile destop view banner-->
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





	

  <!--Mobile View Banner-->
  <div class="MobileViewBanner">
    <div class="hero-wrap hero-bread" style="background-image: url('images/banner1Mobile.jpg'); background-size: cover;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">No 1 </a></span> <span> ICT Class in Sri Lanka</span></p>
            <h1 class="mb-0 bread">NUWAN WIJESURENDRA</h1>
          </div>
        </div>
      </div>
  </div>
</div>
<!--End of Mobile View Banner-->

<!--Destop VIEW banner-->
  
  <div class="DestopViewBanner">
  
  <div class="hero-wrap hero-bread" style="background-image: url('images/banner1.jpg');  background-size: cover;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <br><br><br><br><br><br><br><br>
          </div>
        </div>
      </div>
	</div>
  
</div>
<!--End of Destop VIEW banner-->

    <section class="ftco-section">
    	<div class="container">
    	

<!--Search Form-->

<center>
        <div class="searchBox">
                <form action="FindVideoLessons" method="get" style="margin-top:10px;" onsubmit = "return(validate());">
                
                <select id= "Grade" name="Grade" id="subhome" style="padding:10px 30px; border:3px solid #2d9416;margin:2px ; font-size:medium;">


                                <option selected value="Select Subject" style="font-size:medium;"disabled>Select Grade</option>
                                <option value="6">Grade 6</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                                <option value="13">Grade 13</option>
                           
            
                </select>

              
                          
                <button style="margin:2px; padding:10px 30px; font-size:medium;" type="submit" id="submitsearch" >search </button>


                    
                </form>
        </div>

        </center>
    <br><br>


    <!--**************************************************************
                javascript for validate search grade
         ******************************************************-->
         <script type = "text/javascript">
  
 
  function validate() {

   var  x = document.getElementById("Grade").value;
  
     if(x == "6" || x == "7" || x == "8" || x == "9" || x == "10" || x == "11" || x == "12" || x == "13" ) {
      return true;
     }
     else{
      alert( "Please Select value between 6 and 13 For Grade" );
        return false;
     }
    
    
  }

</script>

 <!--**************************************************************
          End of javascript for validate search grade
     **************************************************************-->



<!--End of Search Form-->




<!--**************************************************************
          count total videoes
******************************************************-->

<?php


$result1 = $conn->query("SELECT COUNT(*) AS lessonCountByGrade FROM videolessons");
$lessonCount = $result1->fetch_all(MYSQLI_ASSOC);
$total = $lessonCount[0]['lessonCountByGrade'];


?>

<!--***************************************************
        End of count total Videoes
    ***************************************************-->

<!--Display total videos -->
<h6><?php echo $total ?> Lessons have Uploaded </h6> 

   <hr style="border:1px solid green">
    

   <!--****************************************************************
         Display video list as a grid
      *****************************************************************-->
			
			<!--Start of Grid-->
        <center>
    		<div class="row">


				<?php
                        
				include "config.php";
				include "timeago.php";
				
				 $limit = 30;
				 $page = isset($_GET['page']) ? $_GET['page'] : 1;
				 $start = ($page - 1) * $limit;
				 $sql = "SELECT *FROM videolessons ORDER BY lessonID DESC LIMIT  $start,$limit";
				 $result1 = $conn->query("SELECT COUNT(lessonID) AS lessonCountAll FROM videolessons");
				 $lessonCount = $result1->fetch_all(MYSQLI_ASSOC);
				 $total = $lessonCount[0]['lessonCountAll'];
				 $pages = ceil($total / $limit);

				$Previous = $page - 1;
				$Next = $page + 1;


				$result = $conn->query($sql);
				
				$count = mysqli_num_rows($result);//OUTPUT BOOLEAN
				  
				  if($count == TRUE)
				  {    
						while($row = $result->fetch_assoc())
						{ 
							//CALL facebook_time_ago function in timeago.php
             
              $time =  facebook_time_ago($row["Time"]);
				
			?>
							


    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
					    

          
                <a href="Lesson?Tid=<?php echo "$row[lessonID]" ?>" class="img-prod">
                <iframe  src="<?php echo $row['URL']; ?>"    frameborder="0" scrolling="no" seamless="" 
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin allow-forms allow-scripts">
							  </iframe>

    						<span class="status" style="font-size:medium">Grade <?php echo "$row[Grade]" ?></span>
    						<div class="overlay"></div>
    				  	</a>
    				  	<div class="text py-3 pb-4 px-3 text-center">
    						<h3 style="font-size:medium"><a href="Lesson?Tid=<?php echo "$row[lessonID]" ?>"><?php echo "$row[Topic]" ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    	
									<font size="1.5"><p class="" ><span class=""><?php echo "$time" ?></span></p></font>
									
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="Lesson?Tid=<?php echo "$row[lessonID]" ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									View
	    							</a>
									
    							</div>
    						</div>
    					</div>
    				</div>
				</div>
			
			<?php

					}
                              
			}
			else
			{
        echo "<center>";
        echo "<img width='55%' src='images/wait.png'>";
        echo "<h3 class = 'text-center' >Wait!! lessons will be uploaded</h3>";
        echo "</center>";
			}

			?>
				
			</div>
			

      </center>
			<!--End of Grid-->

  <!--****************************************************************
        End of Display video list as a grid
   *****************************************************************-->
  <!--****************************************************************
         Pagination
   *****************************************************************-->

    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a  href="index.php?page=<?= $Previous; ?>" >&lt;</a></li>
                <?php for($i = 1; $i<= $pages; $i++) : 
                  
                  if($i == $page) { ?>
                <li class="active" ><a><?= $i; ?></a></li>
                  <?php } else { ?>
                <li ><a  href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				        <?php } endfor; ?>
                <li><a href="index.php?page=<?= $Next; ?>">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
    
  <!--****************************************************************
        End  Pagination
   *****************************************************************-->
   
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

