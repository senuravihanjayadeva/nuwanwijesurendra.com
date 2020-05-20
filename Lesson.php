<!--Start Session-->
<?php
require 'config.php';
session_start();
$userID = $_SESSION['userName'];
if(!isset($_SESSION['userName'])) {
    header("location: login.php");
} 
?>
<!--End of Start Session-->


<!-- Include COUNTVIEWS -->
<?php 
include "countView.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>අපේ ICT පංතිය | Lesson</title>
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
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<!--CSS for comment box-->
	<link rel="stylesheet" href="css/commentBox.css">
	<link rel="stylesheet" href="css/mobileDestop.css">


<!--This is For Iframe-->
<style>

.responsive-container {
position:relative;
padding-bottom:56.25%;
padding-top:30px;
height:0;
overflow:hidden;
}

.responsive-container iframe, .responsive-container object, .responsive-container embed {
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
}
</style>

<!--End For Iframe-->

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
            <br><br><br>
          </div>
        </div>
      </div>
  </div>
</div>
<!--End of Mobile View Banner-->

<!--Destop VIEW banner-->
  
  <div class="DestopViewBanner">
  
  <div class="hero-wrap hero-bread" style="background-image: url('images/banner1.jpg'); background-size: cover;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
		
          <div class="col-md-9 ftco-animate text-center">
            <br><br><br><br><br><br>
          </div>
        </div>
      </div>
	</div>
  
</div>
<!--End of Destop VIEW banner-->

<!--*******************************************************************
		 Count Views Video Div
    ******************************************************************-->

	<?php

    
	if($viewCount == 0 )
	{
		$finalViewCount = $viewCount + 1;
	}
	else
	{
		$finalViewCount = $viewCount;
	}

	?>


<!--*******************************************************************
		End of Count Views Video Div
    ******************************************************************-->

<!--*******************************************************************
		 Display Video Div
    ******************************************************************-->
    <section class="ftco-section">

		<?php

		include "config.php";

		$lessonID = $_GET['Tid'];
		$query = "SELECT *FROM videolessons WHERE lessonID = '$lessonID' ";
		$data = mysqli_query($conn,$query);
		$result = mysqli_fetch_assoc($data);
		$Grade = $result['Grade'];


 		?> 
 
    	<div class="container">
    		<div class="row">
    					<div class="col-lg-12 mb-5 ftco-animate">
						
						<h4><span style="font-weight:bold;"> <?php echo $result['Topic']; ?></span><span style="font-size:small"> Grade <?php echo $result['Grade']; ?> </span></h4>
						<p><?php echo $result['Description']; ?><br><hr style="border:1px solid green;"> <?php echo $result['Time'];?> | <i class="far fa-eye"></i> <?php echo $finalViewCount ?> Views  </p>
						
							<div class="responsive-container">

								<iframe src="<?php echo $result['URL']; ?>"    frameborder="0" scrolling="no" seamless=""  
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin  allow-scripts">
							    </iframe>
								<div style="width: 100%; height: 90px; position: absolute; opacity: 0; right: 0px; top: 0px;"> </div>

								

							</div>
							
    		   			</div>

    					<div class="col-lg-12 product-details pl-md-5 ftco-animate">
				
						

			  			<p><span style="color:black">NOTE : </span> If the video show <span style="color:red">"No preview available"</span> Error you have to sign out from all the google accounts</p>
						<p><span style="color:black">NOTE : </span> This video is not compatible with <span style="color:red"> safari and internet explorer</span>.Please use chrome or firefox</p>
						  
				  
          				</div>	
			</div>

			

    	</div>
	</section>


<!--*******************************************************************
		 End of Display Video Div
    ******************************************************************-->

<!--Comment Section-->
			<center>
  			<div class="container1">
			  <p>You may use the discussion option below to discuss about the lecture with your teacher and fellow students</p>	
                <h4>Ask Questions</h4>
               		<form action = "passDiscussionData.php" method="post" >
					<input type="hidden" name="LessonID" value="<?php echo $result['lessonID']; ?>" required>
					<input type="hidden" name="Topic" value="<?php echo $result['Topic']; ?>" required>
                    <textarea name="Name" placeholder="Name" required></textarea>
                    <textarea name="Comment" placeholder="Ask Your Question" required></textarea>
                    <div class="btn">
                        <input type="submit" value='Ask'>
                        
                    </div>
               		</form>
  		    </div>
		  </center>
		  
  			  <script src='js/plugin.js'></script>  

  			<br><br>
    
  			<div class="container">
								
			  <h4> Discussion</h4><br>
			

 			 <?php
                        
                        include "config.php";
                        
                        
                         $limit = 50;
                         $page = isset($_GET['page']) ? $_GET['page'] : 1;
                         $start = ($page - 1) * $limit;
                         $sql = "SELECT *FROM commentsection WHERE LessonID = '$lessonID' ORDER BY commentID DESC LIMIT  $start,$limit";
                         $result1 = $conn->query("SELECT COUNT(commentID) AS commentID FROM commentsection");
                         $subjectCount = $result1->fetch_all(MYSQLI_ASSOC);
                         $total = $subjectCount[0]['commentID'];
                         $pages = ceil($total / $limit);
                
                        $Previous = $page - 1;
                        $Next = $page + 1;
                
                
                        $result = $conn->query($sql);
                        
                          $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
                          
                          if($count == TRUE)
                          {    
                            while($row = $result->fetch_assoc())
                            { 
       
                              ?>
                              

  			<div class="col-md-12">

  				<p ><img src="images/male.png" width=25 height=25> <span style="color:green; font-weight:bold;"><?php echo "$row[StudentName]" ?> </span>  <?php echo "$row[Time]" ?></p>
  				<p ><?php echo "$row[comment]" ?></p>
    
  
  			</div>

  			<hr>

  			<?php
                            }
                          }
                          else{

                            echo "No Comments";

                          }
                    ?>

  		</div>
  <!--End of Comment Section-->


	

<!--Related Lessons-->

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Lessons</span>
            <h2 class="mb-4">Related Lessons</h2>
            <p>A good teacher can inspire hope, ignite the imagination, and instill a love of learning. Brad Henry</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">

			<!--Start Realted Lesspms Grid-->
			<center>
    		<div class="row">

		


			<?php
                        
				include "config.php";
				include "timeago.php";

				 $limit = 4;
				 $sql = "SELECT * FROM videolessons WHERE Grade = '$Grade'  ORDER BY lessonID DESC LIMIT $limit";
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
					<?php 

				if($row["Grade"] == '10')
				{ 

				?>

				<a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>" class="img-prod">      <iframe  src="<?php echo $row['URL']; ?>"    frameborder="0" scrolling="no" seamless="" 
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin allow-forms allow-scripts">
							    </iframe>

				<?php

				}

				else if($row["Grade"] == '11' )
				{ 

				?>

				<a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>" class="img-prod">      <iframe  src="<?php echo $row['URL']; ?>"    frameborder="0" scrolling="no" seamless="" 
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin allow-forms allow-scripts">
							    </iframe>

				<?php

				}

				else if($row["Grade"] == '12' )
				{ 

				?>

				<a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>" class="img-prod">      <iframe  src="<?php echo $row['URL']; ?>"    frameborder="0" scrolling="no" seamless="" 
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin allow-forms allow-scripts">
							    </iframe>

				<?php

				}

				else{		 

				?>

				<a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>" class="img-prod">      <iframe  src="<?php echo $row['URL']; ?>"    frameborder="0" scrolling="no" seamless="" 
								allowfullscreen="allowfullscreen"
       							mozallowfullscreen="mozallowfullscreen" 
        						msallowfullscreen="msallowfullscreen" 
        						oallowfullscreen="oallowfullscreen" 
								webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-same-origin allow-forms allow-scripts">
							    </iframe>

				<?php

				}

				?>

			<span class="status">Grade <?php echo "$row[Grade]" ?></span>
    						<div class="overlay"></div>
    				  	</a>
    				  	<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>"><?php echo "$row[Topic]" ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    	
									<font size="1.5"><p class="" ><span class=""><?php echo "$time" ?></span></p></font>
									
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="Lesson.php?Tid=<?php echo "$row[lessonID]" ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
		echo "Comming Soon";
		}

		?>
				

				

				


    		</div>
			</center>
<!--End of the Related lessons Grid-->
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

