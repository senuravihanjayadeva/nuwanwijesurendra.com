
<!--************************************************************
              nav bar
 ***********************************************************-->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/logo.png" width=80><span style = "font-size:15px">අපේ  ICT  පංතිය</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          
 
          <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="adminPanel" class="nav-link">Admin Panel</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link"><span style="font-weight:bold; color:green;">Admin ( Logout ) </span></a></li>

          <li class="nav-item" ><a id="myDIV" onclick="document.getElementById('id01').style.display='block'"  class="nav-link" style="cursor:pointer;"><i class="fas fa-bell" style="font-size:15px;"></i></a></li>

          <li class="nav-item" ><a id="myDIV" onclick="document.getElementById('id02').style.display='block'"  class="nav-link" style="cursor:pointer;"><i class="fas fa-envelope" style="font-size:15px;"></i></a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
<!--************************************************************
              End of nav bar
 ***********************************************************-->


 <!--*******************************************************
      Div for asked question notification popup overlay
********************************************************-->
<div class="w3-container">
 

 <div id="id01" class="w3-modal">
   <div class="w3-modal-content" style="padding:20px;">
     <div class="w3-container" >

     <h4>Asked Questions</h4>
       <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       <?php

                       
         include "config.php";
 
       
         $limit = 10;
         $sql = "SELECT *FROM commentsection ORDER BY commentID DESC LIMIT $limit";
         $result = $conn->query($sql);

         $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
 
         if($count == TRUE)
         {    
             while($row = $result->fetch_assoc())
             { 
   

         ?>

                <p> <?php echo "$row[StudentName]" ?> : <?php echo "$row[comment]" ?>  <span style="font-size:10px;"> <?php echo "$row[Time]" ?> </span> </p>

         <?php

             }
           
         }
         else
         {
             echo "No data in the Database";
         }

         ?>


     </div>
   </div>
 </div>
</div>



<!--*******************************************************
     End  Div for asked question notification popup overlay
***********************************************************-->

<!--*******************************************************
     Div for messages popup overlay
**********************************************************-->
<div class="w3-container">


 <div id="id02" class="w3-modal">
   <div class="w3-modal-content" style="padding:20px;">
     <div class="w3-container" >

     <h4>Messages</h4>
       <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       <?php

                       
         include "config.php";
 
       
         $limit = 10;
         $sql = "SELECT *FROM messagesection ORDER BY messageID DESC LIMIT $limit";
         $result = $conn->query($sql);

         $count = mysqli_num_rows($result);//OUTPUT BOOLEAN
 
         if($count == TRUE)
         {    
             while($row = $result->fetch_assoc())
             { 
   

         ?>

                <p> <?php echo "$row[messageID]" ?> : <?php echo "$row[name]" ?> | <?php echo "$row[message]" ?> </p>

             

         <?php

             }
           
         }
         else
         {
             echo "No data in the Database";
         }

         ?>


     </div>
   </div>
 </div>
</div>



<!--*******************************************************
       End Div for messages popup overlay
***********************************************************-->