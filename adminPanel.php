
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>අපේ ICT පංතිය | ADMIN </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Browser ICON-->
    <link rel="icon" type="images" href="images/logo.png">


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

    <!--css for tables-->
    <link rel="stylesheet" href="css/notes.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/mobileDestop.css">

    <!--css for notification and message-->
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/68eb695a6c.js" crossorigin="anonymous"></script>
    <!--End of css for notification and message-->

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
<!--End of Mobile View Banner-->

<!--Destop VIEW banner-->
  
  <div class="DestopViewBanner">
  
  <div class="hero-wrap hero-bread" style="background-image: url('images/banner1.jpg');">
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


	
<br>
<center><h1>ADMIN PANEL<h1></center>
<br><br><hr>


<!--***********************************************************************
          Manage teacher Div
    ***********************************************************************-->

    <div class="adminTable col-md-12">

<center><h3>Manage Teacher Account<h3></center>
<div style="overflow-y:auto; overflow-x: auto;  height:300px;">
<table id="customers" style="overflow-x: auto;">
  <tr>
                    <th>UserName</td>   
                    <th>Password</td>
                    <th>Edit</td>  
  </tr>

  <?php
                        
                        include "config.php";
                          
                                
                        
                         $sql = "SELECT *FROM adminaccess ORDER BY rowID DESC";
                         $result = $conn->query($sql);
                        
                          $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
                          
                          if($count == TRUE)
                          {    
                            while($row = $result->fetch_assoc())
                            { 
                            
     ?>


                            <tr>
                            <td><?php echo "$row[teacherID]" ?></td>
                            <td><?php echo "$row[Password]" ?></td>
                           
                    
                            <td><a href="EditTeacherAcc.php?rowID=<?php echo "$row[rowID]" ?>"><button>Edit</button></a></td>
                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>
  
</table>
</div>
                      </div>


   <!--Paper Section-->


   <br><br>
   <hr>
   <br><br>

<!-- Insert Papers-->

   <div class="formAdminUpload">

   <h3 class="text-center">Create Teacher Account</h3>
  <form action="passDataTeacherAcc.php" method="post"  >
    <label for="Email">Email</label>
    <input type="text" id="Email" name="Email" placeholder="Email" required>
    <label for="UserName">UserName</label>
    <input type="text" id="teacherID" name="teacherID" placeholder="nuwanXXXXXXX " required>
    NOTE : Username must start with <span style="color:red;">nuwan</span><br><br>
    <label for="Password">Password</label>
    <input type="text" id="Password" name="teacherPassword" placeholder="Password" required>
  
    <input type="submit"  value="Create">
  </form>
  </div>





                        
        <!--End of From Grid-->

        <br><br>
   <hr>
   <br><br>

<!--***********************************************************************
      End of Manage teacher Div
    *********************************************************************-->

    <!--***********************************************************************
       Manage Student Div
    *********************************************************************-->

<div class="adminTable col-md-12">

<center><h3>Manage Student Account<h3></center>
<div style="overflow-y:auto; overflow-x: auto;  height:300px;">
<table id="customers">
  <tr>
                    <th>UserName</td>   
                    <th>Password</td>
                    <th>Delete</td>  
  </tr>

  <?php
                        
                        include "config.php";
                          
                                
                        
                         $sql = "SELECT *FROM studentaccessdatabase ORDER BY rowID DESC";
                         $result = $conn->query($sql);
                        
                          $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
                          
                          if($count == TRUE)
                          {    
                            while($row = $result->fetch_assoc())
                            { 
                            
     ?>


                            <tr>
                            <td><?php echo "$row[StudentID]" ?></td>
                            <td><?php echo "$row[Password]" ?></td>
                           
                    
                            <td><a href="deleteStudentAcc.php?rowID=<?php echo "$row[rowID]" ?>"><button>Delete</button></a></td>
                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>
  
</table>
</div>
                      </div>


   <!--Paper Section-->


   <br><br>
   <hr>
   <br><br>

<!-- Insert Papers-->

   <div class="formAdminUpload">

   <h3 class="text-center">Create Student Account</h3>
  <form action="passDataStudentAcc.php" method="post"  >
    <label for="UserName">UserName</label>
    <input type="text" id="studentID" name="studentID" placeholder="studentXXXXXXX " required>
    NOTE : Username must start with <span style="color:red;">student</span><br><br>

    <label for="Password">Password</label>
    <input type="text" id="Password" name="studentPassword" placeholder="Password" required>
  
    <input type="submit"  value="Create">
  </form>
  </div>





                        
        <!--End of From Grid-->

        <br><br>
   <hr>
   <br><br>

    <!--***********************************************************************
       End of Manage Student Div
    *********************************************************************-->

    <!--***********************************************************************
          Manage Lessons Div
      *******************************************************************-->

<div class="adminTable col-md-12">

<center><h3>Manage Lessons<h3></center>

<div style="overflow-y:auto; overflow-x: auto;  height:450px;">
<table id="customers">
  <tr>
  <th>lessonID</td>   
                    <th  class="hideColumn">Grade</td> 
                    <th>Topic</td>
                    <th class="hideColumn">Description</td> 
                    <th class="hideColumn">URL</td> 
                    <th class="hideColumn">Upload Time</td> 
                    <th>Edit</td>
                    <th>Delete</td>  
  </tr>

  

  <?php
                        
                        include "config.php";
                          
                                
                        
                         $sql = "SELECT *FROM videolessons ORDER BY lessonID DESC";
                         $result = $conn->query($sql);
                        
                          $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
                          
                          if($count == TRUE)
                          {    
                            while($row = $result->fetch_assoc())
                            { 
                            
     ?>


                            <tr>
                            <td><?php echo "$row[lessonID]" ?></td>
                            <td class="hideColumn"><?php echo "$row[Grade]" ?></td>
                            <td><?php echo "$row[Topic]" ?></td>
                            <td  class="hideColumn"><?php echo "$row[Description]" ?></td>
                            <td  class="hideColumn"><?php echo "$row[URL]" ?></td>
                            <td  class="hideColumn"><?php echo "$row[Time]" ?></td>
                            <td><a href="editLessonDetails.php?id=<?php echo "$row[lessonID]" ?>"><button>Edit</button></a></td>
                            <td><a href="deleteLessons.php?lessonID=<?php echo "$row[lessonID]" ?>"><button>Delete</button></a></td>
                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>

          
  
</table>
</div>

                      </div>


   <!--Paper Section-->


   <br><br>
   <hr>
   <br><br>

<!-- Insert Papers-->

   <div class="formAdminUpload">

   <h3 class="text-center">Upload a Lesson</h3>
  <form action="passDataLesson.php" method="post" onsubmit = "return(validate());">
    <label for="Topic">Topic</label>
    <input type="text" id="Topic" name="Topic" placeholder="Topic.." required>

    <label for="Description">Description</label>
    <input type="text" id="Description" name="Description" placeholder="Description.." required>


    <label for="Grade">Grade</label>
    <select id="Grade" name="Grade">
                                <option disabled selected>Grade</option>
                                <option value="6">Grade 6</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                                <option value="13">Grade 13</option>
    </select>

    <label for="URL">URL</label>
    <input type="text" id="URL" name="URL" placeholder="URL.." required>
  
    <input type="submit" value="Upload">
  </form>
</div>

<script type = "text/javascript">
  
  // Form validation code will come here.
  function validate() {

   var  x = document.getElementById("Grade").value;
  
     if(x == "6" || x == "7" || x == "8" || x == "9" || x == "10" || x == "11" || x == "12" || x == "13" ) {
      return true;
     }
     else{
      alert( "Please provide value between 6 and 13 For Grade" );
        return false;
     }
    
    
  }
//-->
</script>



                        
        <!--End of From Grid-->

        <br><br>
   <hr>
   <br><br>

<!--***********************************************************************
          End of Manage Lessons Div
      *******************************************************************-->


 <!--**************************************************************************
          Manage NOTICES
 *****************************************************************-->



    <div class="adminTable col-md-12">

<center><h3>Manage Notices<h3></center>
<div style="overflow-y:auto; overflow-x: auto;  height:300px;">
<table id="customers" style="overflow-x: auto;">
  <tr>              
                    <th>Notice ID</td>  
                    <th>Grade</td>   
                    <th>Notice</td>
                    <th>Delete</td>    
  </tr>

  <?php
                        
                        include "config.php";
                          
                                
                        
                         $sql = "SELECT *FROM notice ORDER BY NoticeID DESC";
                         $result = $conn->query($sql);
                        
                          $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
                          
                          if($count == TRUE)
                          {    
                            while($row = $result->fetch_assoc())
                            { 
                            
     ?>


                            <tr>
                            <td><?php echo "$row[NoticeID]" ?></td>
                            <td><?php echo "$row[Grade]" ?></td>
                            <td><?php echo "$row[Notice]" ?></td>
                           
                    
                            <td><a href="deleteNotice.php?rowID=<?php echo "$row[NoticeID]" ?>"><button>Delete</button></a></td>

                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>
  
</table>
</div>
                      </div>


   <!--Paper Section-->


   <br><br>
   <hr>
   <br><br>

<!-- Insert Papers-->

   <div class="formAdminUpload">

   <h3 class="text-center">Create A Notice</h3>

  <form action="passDataNotice.php" method="post"  >
  <label for="Grade">Grade</label>
    <select id="Grade" name="Grade">
                                <option value="All" selected>All</option>
                                <option value="Grade 6">Grade 6</option>
                                <option value="Grade 7">Grade 7</option>
                                <option value="Grade 8">Grade 8</option>
                                <option value="Grade 9">Grade 9</option>
                                <option value="Grade 10">Grade 10</option>
                                <option value="Grade 11">Grade 11</option>
                                <option value="Grade 12">Grade 12</option>
                                <option value="Grade 13">Grade 13</option>
    </select>

    <label for="Notice">Notice</label>
    <input type="text" id="Notice" name="Notice" placeholder="Notice" required>
  
    <input type="submit"  value="Create">

  </form>
  </div>





                        
        <!--End of From Grid-->

        <br><br>
   <hr>
   <br><br>

 <!--**************************************************************************
         End of Manage NOTICES
 ******************************************************************************-->


<!--***********************************************************************
        Manage Asking Questions     
    ************************************************************************-->

<div class="adminTable col-md-12">

<center><h3>Manage Asking Questions<h3></center>

<div style="overflow-y:auto; overflow-x: auto;  height:400px;">

<table id="customers" style="overflow-x: auto;">
   <tr>
                      
                    <th>commentID</td>   
                    <th class="hideColumn">LessonID</td>
                    <th class="hideColumn">LessonTopic</td> 
                    <th class="hideColumn">StudentName</td>   
                    <th class="hideColumn">comment</td>
                    <th class="hideColumn">time</td>
                    <th>Delete</td>   
  </tr>

        <?php

                        
				include "config.php";
          
                
				
				 $sql = "SELECT *FROM commentsection ORDER BY commentID DESC";
				 $result = $conn->query($sql);
				
				  $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
				  
				  if($count == TRUE)
				  {    
						while($row = $result->fetch_assoc())
						{ 
						
				
				?>

                            <tr>
                            <td><?php echo "$row[commentID]" ?></td>
                            <td class="hideColumn"><?php echo "$row[LessonID]" ?></td>
                            <td class="hideColumn"><?php echo "$row[LessonTopic]" ?></td>
                            <td class="hideColumn"><?php echo "$row[StudentName]" ?></td>
                            <td class="hideColumn"><?php echo "$row[comment]" ?></td>
                            <td class="hideColumn"><?php echo "$row[Time]" ?></td>
                           
                            <td><a href="deleteComments.php?commentID=<?php echo "$row[commentID]" ?>"><button>Delete</button></a></td>
                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>
  
</table>
</div>
                      </div>





   <br><br>
   <hr>
   <br><br>

   <!--***********************************************************************
        End of Manage Asking Questions     
    ************************************************************************-->

 <!-- *************************************************************************
      Message Section
      *******************************************************************-->

<div class="adminTable col-md-12">

<center><h3>Manage Messages<h3></center>

<div style="overflow-y:auto; overflow-x: auto;  height:300px;">

<table id="customers" >
   <tr>
                      
                    <th>messageID</td>
                    <th class="hideColumn">name</td>
                    <th>email</td>     
                    <th>message</td>

                  
                    <th>Delete</td>   
  </tr>

        <?php

                        
				include "config.php";
          
                
				
				 $sql = "SELECT *FROM messagesection ORDER BY messageID DESC";
				 $result = $conn->query($sql);
				
				  $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
				  
				  if($count == TRUE)
				  {    
						while($row = $result->fetch_assoc())
						{ 
						
				
				?>

                            <tr>
                            <td><?php echo "$row[messageID]" ?></td>
                            <td class="hideColumn"><?php echo "$row[name]" ?></td>
                            <td><?php echo "$row[email]" ?></td>
                            <td><?php echo "$row[message]" ?></td>
                           
                            <td><a href="deleteMessages.php?messageID=<?php echo "$row[messageID]" ?>"><button>Delete</button></a></td>
                            </tr>

                        <?php

                        }
                    
                        }
                      else
                        {
                  echo "No data in the Database";
                        }

          ?>
  
</table>
</div>
                      </div>





   <br><br>
   <hr>
   <br><br>


 <!-- ************************************
 
      End of Message Section

      *************************************-->

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